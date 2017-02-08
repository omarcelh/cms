<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PasswordController extends Controller
{
    public function showPasswordForm()
    {
        return view('password');
    }

    public function changePassword(Request $request)
    {
    	$values = $request->all();

    	$validator = Validator::make($values, [
            'password' => 'required',
            'new-password' => 'required',
            'new-password-confirmation' => 'required|same:new-password',
        ]);

        if ($validator->fails()) {
        	// var_dump($validator->errors());
            return redirect('password')
                ->withErrors($validator)
                ->withInput();
        } else {
        	$currentUser = Auth::user();
            if(password_verify($values['password'], $currentUser->password)) {
            	$currentUser->password = bcrypt($values['new-password']);
            	$currentUser->save();
                return redirect('home')->with('status', 'Change password successful');
            } else {
                return redirect('password')->with('error', 'Password does not match with old password');
            }
        }
    }
}
