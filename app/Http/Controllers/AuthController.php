<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        unset($user['manager_password']);

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    function loginManager(Request $request)
    {
        $this->validate($request, [
            'manager_password' => 'required|string',
        ]);

        if (!Hash::check($request->manager_password, Auth::user()->manager_password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        session()->put('is_manager',true);

        return response()->noContent(200);
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8',
        ]);


        if (!Hash::check($request->password, Auth::user()->password)) {
            return response([
                'message' => ['The password is incorrect.']
            ], 422);
        }

        $user = User::find(Auth::id());


        $user->update([
            'password' => Hash::make($request->new_password)
        ]);


        return response($user);
    }

    public function changeManagerPassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8',
        ]);

        if (!Hash::check($request->password, Auth::user()->manager_password)) {
            return response([
                'message' => ['The password is incorrect.']
            ], 422);
        }

        $user = User::find(Auth::id());

        $user->update([
            'manager_password' => Hash::make($request->new_password)
        ]);

        return response($user);
    }


    function register(Request $request)
    {
        $data = $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string|max:256',
            'password' => 'required|string|min:8',
            'manager_password' => 'required|string|min:8',
        ]);

        $data['type'] = User::USER_MANAGER;

        $data['password'] = Hash::make($request->password);
        $data['manager_password'] = Hash::make($request->manager_password);

        $user = User::create($data);

        $token = $user->createToken('my-app-token')->plainTextToken;

        unset($user['manager_password']);

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout() {
        Auth::logout();

        session()->put('is_manager',false);
        return response()->noContent();
    }
}
/*  */
