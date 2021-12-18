<?php
	session_start();
	require_once 'connection.php';

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$check = mysqli_query($connection, "SELECT * FROM `users_pion` WHERE `email` = '$email' AND `password` = '$password'");
	if (mysqli_num_rows($check) > 0) {
		$_SESSION['message'] = 'Вы успешно авторизированы';
		header('Location:index.php');

	} else {
		$_SESSION['message'] = 'Неверный логин или пароль';
		
		header('Location:index.php');
	}
?>