<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function register(Request $request){
        $incomingfields = $request->validate([
           'name' => ['required', 'min:2' , 'max:15'],
           'email' =>  ['required', 'min:2' , 'max:45'],
            'password' => ['required', 'min:2' , 'max:21']
        ]);
        $incomingfields['password'] = bcrypt($incomingfields['password']);
        $user = User::create($incomingfields);
        auth()->login($user);

        return redirect('/');

    }

    public  function logout(){
        auth()->logout();
        return redirect('/');

    }

    public function getloginpage(){

        return view('login');

    }

    public  function login(Request $request ){

        $incomingfields = $request->validate([
            'loginname'  => 'required',
            'loginpassword' => 'required'
        ]);
        if (auth()->attempt(['name' => $incomingfields['loginname'] , 'password'  => $incomingfields['loginpassword'] ])){
            $request->session()->regenerate();

        }
        return redirect('/');

    }


}
