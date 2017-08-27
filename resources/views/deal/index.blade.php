@extends('layouts.main')

@section('title', 'Формирование нового предложения')

@section('content')

<section class="deal">
	<div class="container deal_block">
		<div class="row">
			<div class="col-md-12">
				<form action="">
					<h3>Вид недвижимости</h3>
					<div class="col-md-8 col-md-push-2">
						<div class="input_group">
							<label for="type_deal">Вид сделки</label>
							<select name="type_deal" id="">
								<option disabled selected>Выберите вид сделки</option>
								<option value="1">Продажа</option>
								<option value="2">Аренда</option>
							</select>
						</div>
						<div class="input_group">
							<label for="">Тип недвижимости</label>
							<select name="" id="">
								<option disabled selected>Выберите вид сделки</option>
								<option value="1">Квартира</option>
								<option value="2">Дом</option>
							</select>
						</div>
					</div>
				</form>
			</div>
		</div>

		{{-- Main info form --}}

		<form action="" id="house">
			<div class="row">
				<div class="col-md-12">
					<h3>Общая информация</h3>
					<div class="col-md-8 col-md-push-2">
						<div class="input_group">
							<label for="">Уезд</label>
							<select name="" id="">
								<option disabled selected>Выберите уезд</option>
								<option value="1">Продажа</option>
								<option value="2">Аренда</option>
							</select>
						</div>
						<div class="input_group">
							<label for="">Город</label>
							<select name="" id="">
								<option disabled selected>Выберите город</option>
								<option value="1">Квартира</option>
								<option value="2">Дом</option>
							</select>
						</div>
						<div class="input_group">
							<label for="">Часть города/поселок</label>
							<select name="" id="">
								<option disabled selected>Выберите часть города/поселок</option>
								<option value="1">Квартира</option>
								<option value="2">Дом</option>
							</select>
						</div>
						<div class="input_group">
							<label for="">Название улицы</label>
							<input type="text" name="street">
						</div>
						<div class="input_group">
							<label for="">Номер дома</label>
							<input type="text" name="house_number">
						</div>
						<div class="input_group">
							<label for="">Название местоположения</label>
							<input type="text" name="location">
						</div>

						<div class="input_group">
							<label for="">Местонахождение на карте</label>
							<span>с.ш.</span>
							<input type="text" name="loc_x" class="min_input">
							<span>в.д.</span>
							<input type="text" name="loc_y" class="min_input">
							<div class="mini_group">
								<input type="checkbox" name="map" id="map">
								<span>Скрыть карту</span>
							</div>
						</div>

						<div class="input_group">
							<label for="">Кадастровый номер</label>
							<input type="text" name="kadastr_number">
						</div>

						<div class="input_group">
							<label for="">Номер регистра недвижимости</label>
							<input type="text" name="registr_number">
						</div>

						<div class="input_group">
							<label for="">Дистанция до Tallinn (км)</label>
							<input type="text" name="to_talin">
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>

@stop

@section('script')
<script src="{{ asset('assets/js/select2.full.min.js') }}"></script>
<script>
	
	$(document).ready(function() {
		$("form select").select2({
			// minimumResultsForSearch: Infinity
		});

		$("#map").on('click', function(){
			if(this.checked){
				$('.min_input').val('');
				$('.min_input').attr('disabled', true);
			}else{
				$('.min_input').attr('disabled', false);
			}
		});
	});
</script>

</script>
@stop