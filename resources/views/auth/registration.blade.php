@extends('layouts.main')

@section('title', 'Заголовок страницы из БД')

@section('content')

{{-- Reqistration --}}

<section class="reg_form">
	
	<div class="container">
		<div class="row">
			<form action="">
				<div class="info">
					<h3>Пожалуйста, завершите регистрацию, заполнив профиль.</h3>
					<p>Внимание: (*) - обязательные поля.</p>
				</div>

				<div class="row">
					<div class="col-md-4">
						<label for="name">Имя (*)</label>
						<input type="text" name="name" required placeholder="Имя">
					</div>
					<div class="col-md-4">
						<label for="surname">Фамилия</label>
						<input type="text" name="surname" placeholder="Фамилия">
					</div>
					<div class="col-md-4">
						<label for="login">Логин (*)</label>
						<input type="text" name="login" placeholder="Логин" required>
					</div>
					<div class="col-md-4">
						<label for="password">Пароль(*)</label>
						<input type="password" name="password" placeholder="Введите пароль" required>
					</div>
					<div class="col-md-4">
						<label for="password_rep">Повторите пароль (*)</label>
						<input type="password" name="password_rep" placeholder="Введите пароль" required>
					</div>					
					<div class="col-md-4">
						<label for="email">E-mail (*)<label>
						<input type="email" name="email" placeholder="Введите E-mail" required>
					</div>
				</div>
				<div class="sep"></div>

				<div class="row">
					<div class="col-md-4">
						<label for="name">&nbsp;</label>
						<img src="" alt="">
					</div>
					<div class="col-md-4">
						<label for="captcha">Код с картинки</label>
						<input type="text" name="captcha" placeholder="Введите код с картинки" required>
					</div>
					<div class="col-md-4">
						<label for="login">&nbsp;</label>
						<input type="submit" value="Завершить регистрацию">
					</div>
				</div>
			</form>
		</div>
	</div>

</section>

@stop