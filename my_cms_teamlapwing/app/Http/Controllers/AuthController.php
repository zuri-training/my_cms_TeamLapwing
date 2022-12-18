<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Auth;
session_start();
class AuthController extends Controller
{
    public $fullname;
    public $email;
    public $password;
    public $request;

    public function signup(){
        return view('signup');
    }
    public function login(){
        return view('login');
    }

    function register(Request $request){
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12'
        ]);
       $item = new User;
       $item->fullname = $request->fullname;
       $item->email = $request->email;
       $item->password = $request->password;
       $item->save();

        $request->session()->put('success', 'Registered Successfully!');
       return redirect('/login');
    }

    function loginUser(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
                $request->session()->put('loginId', $user->id);
                $_SESSION['email'] = $request->email;
                return redirect('dashboard');
            }
        else {
            return back()->with('fail', 'This email is not registered');
        }
    }
    /*function logout(Request $request){
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:5|max:12'
        // ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
                $request->session_destroy();
                //()->put('loginId', $user->id);
                //$_SESSION['email'] = $request->email;
                return redirect('index');
            }
    }*/
    // function logout(Request User){
    //     session_start();
    //     session_destroy();
    //     header('Location: index.php');
    // }
}

