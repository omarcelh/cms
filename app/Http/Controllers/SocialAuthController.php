<?php

namespace App\Http\Controllers;

use Auth;
use Socialite;
use App\User;
use App\Userrole;
use Illuminate\Http\Request;

class SocialAuthController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();   
    }   

    public function callback($provider)
    {
		$user = Socialite::driver($provider)->user();

	    $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser);

	    return redirect()->to('/home');
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where($provider . '_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        $user_id = Userrole::where('name', 'User')->get()->first()->id;
        $password = bcrypt('password');
        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'password' => $password,
            'provider' => $provider,
            'provider_id' => $user->id,
            'userrole_id' => $user_id,
        ]);
    }
}
