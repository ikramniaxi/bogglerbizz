<?php

namespace App\Http\Controllers\portal;

use App\Models\User;
use App\Models\Visitor;
use App\Models\UserGroup;
use App\Models\GptSession;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    public function index(){
        $totalUsers=User::count();
        $TotalConversation=GptSession::count();
        $ImagesGenerated=1;
        $UserGroups=UserGroup::count();


        
            $months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            $newVisits = array_fill(0, 12, 0);
            $uniqueVisits = array_fill(0, 12, 0);
    
            $visitors = Visitor::selectRaw('MONTH(created_at) as month, COUNT(*) as new_visits, COUNT(DISTINCT(ip_address)) as unique_visits')
                ->groupBy('month')
                ->get();
    
            foreach ($visitors as $visitor) {
                $newVisits[$visitor->month - 1] = $visitor->new_visits;
                $uniqueVisits[$visitor->month - 1] = $visitor->unique_visits;
            }
            $chartData['new_visit']=$newVisits;
            $chartData['unique_visit']=$uniqueVisits;
            $chartData['months']=$months;
    
           

     
          
        
        return view('portal.dashbaord',compact('totalUsers','TotalConversation','ImagesGenerated','UserGroups','chartData'));
    }
}
