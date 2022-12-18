<?php

//require 'AuthController.php';
// use App\Http\Controllers\AuthController;

// $route = new AuthController();

// $route->handleForm();

session_start();


logout();

function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
    if (session_status() == PHP_SESSION_ACTIVE) {
        session_unset();
        session_destroy();
        echo '<meta http-equiv="refresh" content="1; url=../">';
        return redirect()->route('index');
    }
}