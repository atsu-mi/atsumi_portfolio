<?php
    require_once "../class/user.php";
    $user = new User();
    session_start();

    if(isset($_POST['register'])){
       $create_result = $user->createAccount($_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT));

       if($create_result == true){
        $user->createUser($_POST['first_name'], $_POST['last_name'], $_POST['address']);
       }
    }elseif(isset($_POST['login'])){
      $user->login($_POST['email'], $_POST['password']);
    }elseif(isset($_POST['book'])){
      $user->book($_SESSION['user_id'], $_SESSION['email'], $_POST['phone_number'], $_POST['date'], $_POST['time'], $_POST['people']);
    }elseif(isset($_POST['message'])){
      $user->contact($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);
    }


?>    