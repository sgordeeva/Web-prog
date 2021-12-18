<?php
	session_start();
	require_once 'connection.php';

	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    if (mb_strlen($email) < 5 || mb_strlen($email) > 50){
        $_SESSION['message'] = 'E-mail должен содержать более 5 символов';
        header('Location:registr.php');
        die;
    }elseif (mb_strlen($password) < 5 || mb_strlen($password) > 40){
        $_SESSION['message'] = 'Пароль должен содержать более 5 символов';
        header('Location:registr.php');
        die;
    }

	$password = md5($password);

	mysqli_query($connection, "INSERT INTO `users_pion` (`id`, `email`, `password`) VALUES (NULL, '$email', '$password')");

	$_SESSION['message'] = 'Вы успешно зарегистрированы';

	header('Location:registr.php');


?>