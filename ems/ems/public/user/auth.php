<?php
require_once __DIR__.'/../../constants.php';
require_once BASE_PATH.'/config/autoload.php';
require_once BASE_PATH.'/config/db.config.php';
require_once BASE_PATH.'/includes/helper.php';

// login
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['type'] === 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(! isset($_POST['email']) || ! isset($_POST['password'])){
      response(["error", "Please fill all the fields"]);
    }

    $user = new User();
    if (!$user->login($email, $password)) {
        response(["error", "Please enter correct login and password"]);
    }

    response(["success", "Login success"]);
}

// registration
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['type'] === 'signup') {

    if(
        ! isset($_POST['fname']) || 
        ! isset($_POST['lname']) || 
        ! isset($_POST['mobile']) || 
        ! isset($_POST['email']) || 
        ! isset($_POST['password'])
    ){
        response(["error", "Please fill all the fields"]);
    }

    $user = new User();
    if ($user->email_exists($_POST['email'])) {
        response(["error", "This email is already exists. please use another"]);
    }

    if (!$user->signup($_POST)) {
        response(["error", "Please try again, signup failed"]);
    }

    response(["success", "signup success"]);
}


 


 

