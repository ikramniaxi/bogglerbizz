<?php

namespace App\Http\Controllers;

use App\UserGroup;
use Illuminate\Http\Request;
use Cache;
use App\ChatGpt;
class UserGroupController extends Controller{
  public function store(Request $request){
    $gid = $request->ngroup_id;
    $uid = $request->user_id;
    if ($uid > 0) {
            $validate = UserGroup::where('user_id', $uid)->first();
        if (empty($validate)) {
            $store = ['group_id' => $gid, 'user_id' => $uid];
            if (UserGroup::create($store)) {
                $res = ['status' => 200];
            }else{
                $res = ['status' => 'error', 'msg' => 'Something went wrong to add the user into the selected group.'];
            }
        }else{
            $res = ['status' => 'error', 'msg' => 'The user is part of a group already.'];
        }

    }else{
        $res = ['status' => 'error', 'msg' => 'Please select a valid user to add into the group.'];
    }
    return json_encode($res);
  }

  public function listGroupUsers(Request $request){
    $group_id = $request->group_id;
    $users = UserGroup::join('users', 'user_groups.user_id', 'users.id')
    ->join('user_group_names', 'user_groups.group_id', 'user_group_names.id')
    ->where('user_groups.group_id', $group_id)
    ->select('user_group_names.group_name', 'user_group_names.id as gid', 'users.*')
    ->get();
    if (!empty($users)) {
        $tbl = '<table class="table table-bordered table-striped" id="nUTbl">
            <thead>
                <tr>    
                    <th>#</th>
                    <th>Uname</th>
                    <th>Gname</th>
                    <th>Email</th>
                    <th>Tokens Count</th>
                    <th>Last Seen</th>
                    <th>Action</th>
                </tr>
            </thead><tbody>';

            foreach ($users as $key => $user) {
             
                if (!empty($user->last_seen)) {
                    $lSeen = '<span class="badge badge-pill badge-primary" data-toggle="tooltip" title="last seen '.fTimeConvert($user->last_seen).'">'.timeElapsed($user->last_seen).'</span>';
                }else{
                    $lSeen = '<span class="badge badge-pill badge-danger">Never</span>';
                }
                $mkey = $key+1;

               $tokens = ChatGpt::where('user_id', $user->id)
                ->selectRaw('SUM(prompt_tokens + completion_tokens) as total_tokens')
                ->pluck('total_tokens')
                ->first() ?? 0;

                $tbl .='<tr>
                    <td>'.$mkey.'</td>
                    <td>'.$user->name.'</td>
                    <td>'.$user->group_name.'</td>
                    <td>'.$user->email.'</td>
                    <td><span class="badge badge-success">'.$tokens.'</span></td>
                    <td>'.$lSeen.'</td>
                    <td><button class="btn btn-danger delFromGroup" gid='.$user->gid.' uid='.$user->id.'><i class="fa fa-trash-alt"></i></button></td>
                </tr>';
            }

            $tbl .='
                </tbody>
                </table>';
            $tbl .='<script>$("#nUTbl").DataTable();</script>';
        $res = ['status' => 200, 'data' => $tbl];
    }else{
        $res = ['status' => 'error', 'msg' => 'No users found in the selected group.'];
    }

    return json_encode($res);
  }

  public function delete(Request $request){
    $uid = $request->uid;
    $gid = $request->gid;
    $find = UserGroup::where([
        ['user_id', $uid],
        ['group_id', $gid]
    ])->first();

    if (!empty($find)) {
        if ($find->delete()) {
            $res = ['success' => ['User deleted from the group.']];
        }else{
            $res = ['error' => ['Something went wrong to delete the user from group.']];
        }
    }else{
        $res = ['error' => ['We could not find the requested user in this group.']];
    }

    return response()->json($res);
  }

}
