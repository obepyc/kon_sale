@extends('layouts.main')

@section('title', 'Заголовок страницы из БД')

@section('content')

<!-- Header -->

<header>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-push-1">
				<div class="slogan">
					<h1>
						Бесплатное размещение<br>
						объявлений на портале<br>
						недвижимости в Эстонии
					</h1>
				</div>
			</div>
			<div class="col-md-4 col-md-push-1">
				<div class="header_form">
					<div class="tabs">
						<input id="login" type="radio" name="tabs" checked>
						<label for="login" title="Вход">Вход</label>

						<input id="registration" type="radio" name="tabs">
						<label for="registration" title="Регистрация">Регистрация</label>
						<div class="clr"></div>
						<section id="content-login">
							<form action="" method="post" class="form_login">
								<input type="text" name="login" placeholder="Логин" required>
								<input type="password" name="password" placeholder="Пароль" required>
								<input type="submit" value="Войти">
								<a href="">Забыли пароль?</a>
							</form>
						</section>  
						<section id="content-registration">
							<form action="/registration" method="get" class="form_reg">
								<input type="text" name="login" placeholder="Логин" required>
								<input type="password" name="password" placeholder="Пароль" required>
								<input type="password" name="password-rep" placeholder="Повторите пароль" required>
								<input type="submit" value="Продолжить">
							</form>
						</section> 
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- End header -->

<!-- Search -->

<section class="search">
	<div class="container">
		<div class="row">

		</div>
	</div>
</section>

<!-- End search -->

<!-- Deal list -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="main_banner">
				<a href=""><img src="" alt=""></a>
			</div>
		</div>
	</div>

	<div class="deals">
		<div class="row">
			<div class="col-md-12">
				<h2>Новые объекты</h2>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="item">
					<img src="assets/img/item.jpg"  alt="">
					<div class="mini_cont">
						<div class="details">
							<div class="info">
								<strong class="price">72 000</strong>
								<p>4 комнаты, 120м2</p>
							</div>
							<div class="type">
								<span>Продажа</span>
							</div>
							<div class="clr"></div>
						</div>
						<div class="desc">
							<p class="title">
								Продается квартира в Талине
							</p>
							<p class="sub_desc">
								Просторная планировка красивой зеленой местности
							</p>
						</div>
						<a href="" class="more">Подробнее</a>
					</div>
				</div>
			</div>


			<div class="col-md-4 col-sm-6">
				<div class="item">
					<img src="assets/img/item.jpg"  alt="">
					<div class="mini_cont">
						<div class="details">
							<div class="info">
								<strong class="price">72 000</strong>
								<p>4 комнаты, 120м2</p>
							</div>
							<div class="type">
								<span>Продажа</span>
							</div>
							<div class="clr"></div>
						</div>
						<div class="desc">
							<p class="title">
								Продается квартира в Талине
							</p>
							<p class="sub_desc">
								Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные текстРечью домах раз, единственное возвращайся одна, языком рекламных дал образ, предупреждал вопрос лучше грустный до!
							</p>
						</div>
						<a href="" class="more">Подробнее</a>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="item">
					<img src="assets/img/item.jpg"  alt="">
					<div class="mini_cont">
						<div class="details">
							<div class="info">
								<strong class="price">72 000</strong>
								<p>4 комнаты, 120м2</p>
							</div>
							<div class="type">
								<span>Продажа</span>
							</div>
							<div class="clr"></div>
						</div>
						<div class="desc">
							<p class="title">
								Продается квартира в Талине
							</p>
							<p class="sub_desc">
								Просторная планировка красивой зеленой местности
							</p>
						</div>
						<a href="" class="more">Подробнее</a>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="item">
					<img src="assets/img/item.jpg"  alt="">
					<div class="mini_cont">
						<div class="details">
							<div class="info">
								<strong class="price">72 000</strong>
								<p>4 комнаты, 120м2</p>
							</div>
							<div class="type">
								<span>Продажа</span>
							</div>
							<div class="clr"></div>
						</div>
						<div class="desc">
							<p class="title">
								Продается квартира в Талине
							</p>
							<p class="sub_desc">
								Просторная планировка красивой зеленой местности
							</p>
						</div>
						<a href="" class="more">Подробнее</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

@stop