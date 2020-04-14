<?php
    session_start();
    requir_once'connect.php';
    
    $full_name= $_POST['full_name'];
    $login= $_POST['login'];
    $password= $_POST['password'];
    
    if ($password === $password_confirm) {

    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
    	die('пароли не совпадают')
    }
?>