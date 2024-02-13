<?php

namespace App\Http\Controllers\Api;

use Validator;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function message(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message' => 'required',
            'type' => 'required|in:admin,gpt',
            // Add validation rule for 'type'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'status' => 'failed',
                'error' => $errors
            ], 400);
        }

        $user = auth()->user();

        $message = new Message([
            'message' => $request->input('message'),
            'type' => $request->input('type'),
        ]);

        // Associate the message with the authenticated user
        $user->messages()->save($message);

        return response()->json([
            'status' => 'success',
            'message' => $message,
        ], 200);
    }

    // get message
    public function getMessage($type)
    {
        $validator = Validator::make(['type' => $type], [
            'type' => 'required|in:admin,gpt',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'status' => 'failed',
                'error' => $errors
            ], 400);
        }

        $user = auth()->user();

        $messages = $user->messages()->where('type', $type)->get();

        return response()->json([
            'status' => 'success',
            'messages' => $messages,
        ], 200);
    }


}
