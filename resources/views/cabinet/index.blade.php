@extends('layouts.main')

@section('title', 'Заголовок страницы из БД')

@section('content')

<section class="cabinet">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-push-2 shadow">
				<h3>Личный кабинет - {{$user->surname}} {{$user->name}}</h3>
				<div class="row">
					<div class="col-md-4">
						<div class="photo">
							<img src="" alt="" width="100%">
						</div>
					</div>
					<div class="col-md-8">
						<div class="info">
							<p class="user_data">{{$user->surname}} {{$user->name}}</p>
							<p class="user_type">{{$user->surname}} {{$user->name}}</p>
							<p class="user_data">{{$user->surname}} {{$user->name}}</p>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="btn_group">
							<a href="{{route('deal')}}" class="btn_add">Добавить объвление</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<table>
							<tr>
								<th>Заголовок</th>
								<th>Описание</th>
								<th>Цена</th>
								<th>Действие</th>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@stop