<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">
</head>
<body>

	<!-- Top menu -->

	<div class="top_menu">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-8">
					<div class="logo">
						<a href="{{route('main_page')}}" title="kinnisvarateenus.ee"><img src="assets/img/logo.png" alt="kinnisvarateenue"></a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-6 visible-xs visible-sm">
					<button>-</button>
				</div>
				<div class="col-md-4 hidden-sm hidden-xs">
					<div class="main_menu">
						<ul>
							<li><a href="{{route('main_page')}}">Главная</a></li>
							<li><a href="">Спецпредложения</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 hidden-sm hidden-xs">
					<div class="language">
						<section>
							<select class="cs-select cs-skin-elastic">
								<option value="est" selected data-class="flag-est">Эстонский</option>
								<option value="ru" data-class="flag-ru">Русский</option>
							</select>
						</section>
					</div>
				</div>
				<div class="col-md-3 hidden-sm hidden-xs">
					<a href="" class="btn_deal">Подать объявление</a>
				</div>
			</div>
		</div>
	</div>

	<!-- End top menu -->

	@yield('content')

	<!-- Scripts -->

	<script></script>
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/js/classie.js') }}"></script>
	<script src="{{ asset('assets/js/selectFx.js') }}"></script>
	<script>
		(function() {
			[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
				new SelectFx(el);
			} );
		})();
	</script>
</body>
</html>