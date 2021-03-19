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
    }


?>    