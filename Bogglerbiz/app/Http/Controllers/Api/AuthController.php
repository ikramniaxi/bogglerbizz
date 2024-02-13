<?php

namespace App\Http\Controllers\Api;

use Validator;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordMail;
use App\Models\ResetCodePassword;
use App\Mail\SendCodeResetPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [

            'name' => 'required|string',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',


        ]);
        // Return errors if validation error occur.
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'status' => 'failed',
                'error' => $errors
            ], 400);
        }
        // Check if validation pass then create user and auth token. Return the auth token
        if ($validator->passes()) {
            $user = User::create(array_merge($request->except('password'), ['password' => Hash::make($request->password)]));
            $user->assignRole('user');
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'status' => 'success',
                'user_data' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer'

            ]);
        }
    }

    public function login(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [

            'password' => 'required',
            'email' => 'required',

        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'status' => 'failed',
                'error' => $errors
            ], 400);
        }
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Invalid login details'
            ], 401);
        }

        $user = User::where('email', $request->email)->firstOrFail();
        $user->fcm_token = $request->fcm_token;
        $user->save();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'status' => 'success',
            'user_data' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    // signin with google
    public function signinwithgoogle(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required|string',
            'provider_id' => 'required',
            'email' => 'required|email|max:255',
            'fcm_token' => 'required'
            // must need to pass => password_confirmation
        ]);
        // Return errors if validation error occur.
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'status' => 'failed',
                'error' => $errors
            ], 400);
        }

        $user = User::where('email', $request->email);

        if ($user->count() > 0) {
            $user = $user->first();
            $user->fcm_token = $request->fcm_token;
            $user->save();
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'status' => 'success',
                'user_data' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer'
            ]);
            return response()->json([
                'status' => 'failed',
                'message' => 'invalid login credentials'
            ], 203);
        } else {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'provider_id' => $request->provider_id,
                'provider' => 'Google',
                'password' => Hash::make(Str::random(16))

            ]);
            $user->fcm_token = $request->fcm_token;
            $user->save();
            $token = $user->createToken('auth_token')->plainTextToken;
            $user = User::where('email', $request->email)->first();
            return response()->json([
                'status' => 'success',
                'user_data' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer'
            ]);

        }
    }


    public function logout()
    {

        $user = User::find(auth()->user()->id);
        if ($user) {
            $user->tokens()->delete();
        }
        return response()
            ->json([
                'message' => 'You have successfully logged out and the token was successfully deleted'
            ]);
    }



    //forgot password
    public function sendCode(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();
        if (!$user) {

            return response()->json(['error' => 'No such email existes'], 400);

        }
        $code = rand(100000, 999999);
        Mail::to($request->email)->send(new ResetPasswordMail($code));
        // Mail::to($email)->send(new ResetPasswordMail($code));
        $ResetCodePassword = ResetCodePassword::updateOrCreate(
            ['email' => $request->email],
            ['token' => Hash::make($code)]
        );
        //remove code from message
        return response()->json(['message' => 'Code  sent successfully', 'code' => $code]);
    }

    public function verifyPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required|min:4'
        ]);
        $email = $request->email;
        $code = $request->code;
        // verify the code
        $ResetCodePassword = ResetCodePassword::where('email', $email)
            ->orderBy('created_at', 'desc')
            ->first();
        if (!$ResetCodePassword || !Hash::check($code, $ResetCodePassword->token)) {
            return response()->json(['message' => 'Invalid code'], 422);
        }
        return response()->json(['token' => $ResetCodePassword->token]);
    }
    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'token' => 'required',

            'password' => 'required'
        ]);
        // Return errors if validation error occur.
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'status' => 'failed',
                'error' => $errors
            ], 400);
        }

        $token = $request->token;
        $password = $request->password;
        $ResetCodePassword = ResetCodePassword::where('token', $token)->first();

        if (!$ResetCodePassword) {
            return response()->json(['message' => 'Invalid token'], 422);
        }
        $user = User::where('email', $ResetCodePassword->email)->first();
        $user->update(['password' => Hash::make($password)]);
        $ResetCodePassword->delete();
        return response()->json(['success' => 'Password reset successfully']);
    }


    // get profile

    public function getProfile()
    {
        $user = auth()->user();
        $profile = [
            'image' => $user->image,
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'gender' => $user->gender,
            'birthday' => $user->birthday,
            'location' => $user->location,
        ];

        return response()->json(['profile' => $profile]);
    }

    // update profile use first or second

    // public function updateProfile(Request $request)
    // {
    //     $user = auth()->user();
    //     // Update user profile
    //     $data = $request->except('image');

    //     if ($request->hasFile('image')) {
    //         $data['image'] = url('/') . Storage::url($request->file('image')->store('images', 'public'));
    //     }

    //     $user->update($data);
    //     $profile = [
    //         'id' => $user->id,
    //         'name' => $user->name,
    //         'email' => $user->email,
    //         'gender' => $user->gender,
    //         'birthday' => $user->birthday,
    //         'location' => $user->location,
    //         'image' => $user->image,
    //     ];

    //     return response()->json(['status' => 'success', 'profile' => $profile]);
    // }


    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        // Get the current user data
        $currentUserData = $user->toArray();

        // Update user profile
        $data = $request->except('image');

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($user->image) {
                Storage::delete('public/images/' . basename($user->image));
            }

            $data['image'] = url('/') . Storage::url($request->file('image')->store('images', 'public'));
        } else {
            // If no new image is uploaded, keep the existing image
            $data['image'] = $currentUserData['image'] ?? null;
        }

        // Filter out empty values and keep the existing values if they are empty in the request
        foreach ($data as $key => $value) {
            if ($value === null || $value === '') {
                $data[$key] = $currentUserData[$key] ?? null;
            }
        }

        $user->update($data);

        $profile = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'gender' => $user->gender,
            'birthday' => $user->birthday,
            'location' => $user->location,
            'image' => $user->image,
        ];

        return response()->json(['status' => 'success', 'profile' => $profile]);
    }



}
