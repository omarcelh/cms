<?php

namespace App\Http\Controllers;

use Auth;
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
        	$currentUser->password = bcrypt($values['new-password']);
        	$currentUser->save();
        	return redirect('home')
        		->with('Change password successful');
        }
    }
}
