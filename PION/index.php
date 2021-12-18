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
						<a href="#basic">
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

	<section id="basic" class="basic">
		<div class="container">
			<div class="discription">
				<div class="offer">
					<h1>
						Дари счастье
					</h1>
					<p>
						Порадуй близкого человека,<br/>
						прояви свои чувства,<br/>
						сделай себе маленький подарок
					</p>
					<a href="#catalog" class="btn">
						Подобрать
					</a>
				</div>

				<form action="entry.php" method="post" class="form">

					<img src="img/flower1.png" alt="flower" class="flower1">
					<img src="img/flower2.png" alt="flower" class="flower2">
					<p class="ent">Войти</p>
					<p class="input_name">E-mail</p>
					<input type="text" name="email" class="name">
					<p class="input_name">Пароль</p>
					<input type="password" name="password" class="phone">
					
					<button class="btn1">Войти</button>
				</form>
				<?php
					echo $_SESSION['message'];
					unset($_SESSION['message']);
				?>
			</div>

		</div>
	</section>

	<section id="trigger" class="trigger">
		<div class="container">
			<div class="benefits">
				<h2>
					Почему мы
				</h2>
				<div class="triggers">	
					<div class="triggers_item">			
						<img src="img/fresh.svg" alt="fresh" class="fresh">
						<div class="trigger_title">Свежие цветы</div>
						<div class="trigger_text">Новые поставки<br/>3 раза в неделю</div>
					</div>
					<div class="triggers_item">			
						<img src="img/delivery.svg" alt="delivery" class="delivery">
						<div class="trigger_title">Доставка</div>
						<div class="trigger_text">В любое удобное<br/>для вас время</div>
					</div>
					<div class="triggers_item">			
						<img src="img/men.svg" alt="men" class="men">
						<div class="trigger_title">Креатив</div>
						<div class="trigger_text">Только лучшие<br/>мастера</div>
					</div>	
				</div>
			</div>
		</div>
	</section>

	<section id="catalog" class="catalog">
		<div class="container">
			<h3>Каталог</h3>

			<ul class="catalogs">
				<li class ="catalog_item">
					<a href="#">
						<img src="img/pions.jpg" alt="pions" class="pions">
						<div class="name_box">
							<p>Пионы</p>
						</div>
					</a>
				</li>
				<li class ="catalog_item">
					<a href="#">
						<img src="img/rose.jpg" alt="rose" class="rose">
						<div class="name_box">
							<p>Розы</p>
						</div>
					</a>
				</li>
				<li class ="catalog_item">
					<a href="#">
						<img src="img/bouquet.jpg" alt="bouquet" class="bouquet">
						<div class="name_box">
							<p>Авторские</br>букеты</p>
						</div>
					</a>
				</li>
				
				<li class ="catalog_item">
					<a href="#">
						<img src="img/gipsofila.jpg" alt="gipsofila" class="gipsofila">
						<div class="name_box">
							<p>Гипсофила</p>
						</div>
					</a>
				</li>
				<li class ="catalog_item">
					<a href="#">
						<img src="img/suhoczvet.jpg" alt="suhoczvet" class="suhoczvet">
						<div class="name_box">
							<p>Сухоцветы</p>
						</div>
					</a>
				</li>
				<li class ="catalog_item">
					<a href="#">
						<img src="img/gortenzii.jpg" alt="gortenzii" class="gortenzii">
						<div class="name_box">
							<p>Гортензии</p>
						</div>
					</a>
				</li>
				
				<li class ="catalog_item">
					<a href="#">
						<img src="img/cactus.jpg" alt="cactus" class="cactus">
						<div class="name_box">
							<p>Кактусы и</br>суккуленты</p>
						</div>
					</a>
				</li>
				<li class ="catalog_item">
					<a href="#">
						<img src="img/candle.jpg" alt="candle" class="candle">
						<div class="name_box">
							<p>Свечи и</br>диффузоры</p>
						</div>
					</a>
				</li>
				<li class ="catalog_item">
					<a href="#">
						<img src="img/presents.jpg" alt="presents" class="presents">
						<div class="name_box">
							<p>Подарки</p>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</section>

	<section id="info" class="info">
		<div class="container">
			<div class="titles">
				<h4>О нас</h4>
		
			</div>
			<div class="info_item">
				<div class="about">
					<div class="box_info">
					<div class="text"><p>
						Цветочная лавка ПИОН
						</br>
						Мы любим дарить красоту и 
						создавать уют.
						
						У нас всегда свежие, нежные
						букеты и композиции из 
						свежесрезанных цветов любой
						сложности.
						
						Великолепные цветы украсят
						любой интерьер и создадут
						неповторимую атмосферу
						в каждом доме.
						
						Наши мастера всегда помогут
						определиться с выбором.
						
						Мы ценим и уважаем каждого
						гостя.
						</br>
						Дарите любовь.
					</p></div>
					</div>
				</div>
				

				<h5>Наш инстаграм</h5>
				<div class="insta">
					<div class="inst_item">
						<img src="img/inst1.jpg">
					</div>
					<div class="inst_item">
						<img src="img/inst2.jpg">
					</div>
					<div class="inst_item">
						<img src="img/inst3.jpg">
					</div>
				</div>
			</div>
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
