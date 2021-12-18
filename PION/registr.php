<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PION</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header id="header" class="header">
		<div class="container">
			<div class="nav">			
				<img src="img/logo1.svg" alt="pion" class="logo">
				<p class="pionlogo">пион</p>			
				<ul class ="menu">
					<li>
						<a href="index.php">
							Главная
						</a>
					</li>
					<li>
						<a href="#catalog">
							Цветы
						</a>
					</li>
					<li>
						<a href="#info">
							О нас
						</a>
					</li>
					<li>
						<a href="#footer">
							Контакты
						</a>
					</li>
				</ul>
				<a href="tel:+79822222222" class="tel">
					+7 982 222-22-22
				</a>
				<button class="menu_open">
					<img src="img/menu.svg" alt="menu">
				</button>
				
				<div class="entry">
					<a href="registr.php" class="btn_ent">Регистрация</a>
				</div>
			</div>
		</div>
	</header>

	<section id="reg" class="reg">
		<div class="container">
			<form action="check.php" method="post" class="check">
				
				<p>Зарегистрироваться</p>
				
				<input type="text" class="control" name="email" placeholder="Введите E-mail">
				
				<input type="password" class="control" name="password" placeholder="Введите пароль">
					
				<button class="btn_reg">Зарегистрироваться</button>
				<p class="msg">
					<?php
						echo $_SESSION['message'];
						unset($_SESSION['message']);
					?>
				</p>
			</form>
		</div>
	</section>

	<footer id="footer" class="footer">
		<div class="container">
			<div class="questions">
					<ul class="colom1">
						<li>
							<a href="#">
								О нас
							</a>
						</li>
						<li>
							<a href="#">
								Способы оплаты
							</a>
						</li>
						<li>
							<a href="#">
								Гарантии
							</a>
						</li>
						<li>
							<a href="#">
								Отзывы клиентов
							</a>
						</li>
						<li>
							<a href="#">
								Каталог
							</a>
						</li>
					</ul>
					<ul class="colom2">
						<li>
							<a href="#">
								Условия доставки
							</a>
						</li>
						<li>
							<a href="#">
								Вопрос ответ
							</a>
						</li>
						<li>
							<a href="#">
								Условия возврата
							</a>
						</li>
					</ul>
					<div class="contacts">
						<div class="contact_1">
							<a href="tel:+79822222222" class="tel2">
								<img src="img/phone.svg" alt="phone" class="phone2">
								+7 982 222-22-22
							</a>
						</div>
						<div class="contact_2">
							<img src="img/gps.svg" alt="gps" class="gps">
							Челябинск
						</div>
						<div class="contact_">
							<img src="img/mail.svg" alt="mail" class="mail">
							flowerspion@gmail.com
						</div>
					</div>
			</div>
		</div>	
	</footer>

	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
