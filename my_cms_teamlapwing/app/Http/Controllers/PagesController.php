<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function step1(){
        return view('onboarding1');
    }
    public function step2(){
        return view('onboarding2');
    }
    public function step3(){
        return view('onboarding3');
    }
    public function step4(){
        return view('onboarding4');
    }
    public function templates(){
        return view('templates');
    }
    public function changetemplate(){
        return view('changetemplate');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function set(){
        return view('Ready-set-up');
    }
    public function logout(){
        return view('logout');
    }
}
