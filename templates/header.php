<html>
<head>
	<?php global $engine; ?>
	<title><?php echo $engine->getTitle(); ?></title>
	<!-- Подключаем bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="styles/styles2.css">
</head>
<body>
	<div class = "header">
		<div class="container main">
			<div class="row">
				<div class="col-lg-4 col-xs-5">
					<div class="row no-gutters">
						<div class="col-lg-4 logo">
							<!--<a href="?page=main" >
								<img src="/img/logo.png" class="responsive">
							</a>-->
						</div>
						<div class="col-lg-8">
							<div class="row">
								<div class="col-lg-12 title logo_first_line">
									СОЦИАЛЬНАЯ СТОМАТОЛОГИЯ
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 title logo_second_line">
									БЕЛОГОРЬЯ
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 title logo_third_line">
									Объединенная стоматологическая поликлиника Старооскольского городского округа
								</div>
							</div>
						</div>
					</div>
					<!--<a href="?page=main" ><img src="/img/header_logo.png" class="logo_header"></a> -->
				</div>
				<div class="col-lg-8">
					<div class="row">
						<div class="d-none d-lg-block d-xl-block col-lg-2 col-xs-5 header_container">
							<div class="row"> <!--продублировать/убрать, если 2/1 ряда -->
								<div class="col-lg-4 contact_icon ">
									<a href="vk.com"><img src="/img/vk_b.png"></a> 
								</div>
								<div class="col-lg-4 contact_icon ">
									<a href="vk.com"><img src="/img/ok_b.png"></a> 
								</div>
								<div class="col-lg-4 contact_icon ">
									<a href="vk.com"><img src="/img/wa_b.png"></a> 
								</div>
							</div>	
							<div class="row">
								<div class="col-lg-4 contact_icon ">
									<a href="vk.com"><img src="/img/fb_b.png"></a> 
								</div>
								<div class="col-lg-4 contact_icon ">
									<a href="vk.com"><img src="/img/ig_b.png"></a> 
								</div>
								<div class="col-lg-4 contact_icon ">
									<a href="vk.com"><img src="/img/tw_b.png"></a> 
								</div>
							</div>						
						</div>
						<div class="col-lg-4 header_container">
								<div class="row"> 
									<div class="col-12">
										<button class = "appoint_button"><p>ЗАПИСАТЬСЯ НА ПРИЕМ</p></button>
									</div>
								</div>
								<div class="row"> 
									<div class="col-12">
										<button class="call_button"><p>ЗАКАЗАТЬ ЗВОНОК</p></button>
									</div>
								</div>          
						</div>
						<div class="col-lg-6 header_container">
								<div class="row"> 
									<div class="col-6">
										<p class="header_phone">8 (4725) 32-94-88</p>
										<p class="header_address">м-н Ольминского, д. 6А</p>
									</div>
									<div class="col-6">
										<p class="header_phone">8 (4725) 24-13-84</p>
										<p class="header_address">пр-т Комсомольский, д.81</p>
									</div>
								</div>
								<div class="row">									
									<div class="col-12">	
										<div class="col-12 time_container">
											<p class="header_time">Время работы: 8:00-20:00</p>
											<p class="header_time">В выходные и праздники: 9:00-15:00</p>
										</div>
									</div>
								</div>          
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>


	

		<div class="nav-container">
		<nav class="header-nav main">
	      <ul>
	        <li>
	          <a href="#">О клиниках</a>
	          <ul class="sub-menu">
	            <li><a href="#">Врачи</a></li>
	            <li><a href="#">Новости</a></li>
	            <li><a href="#">Акции</a></li>
	            <li><a href="#">Галерея</a></li>
	            <li><a href="#">Отзывы</a></li>
	            <li><a href="#">Вакансии</a></li>
	            <li><a href="#">Контакты</a></li>
	            <li><a href="#">Лечение зубов по ДМС</a></li>
	            <li><a href="#">Лечение в расрочку</a></li>
	            <li><a href="#">Официальная информация</a></li>
	            <li><a href="#">Уголок пациента</a></li>
	            <li><a href="#">Закупки</a></li>
	          </ul>
	        </li>
	        <li>
	          <a href="#">Лечение</a>
	          <ul class="sub-menu">
	            <li><a href="#">Лечение под микроскопом</a></li>
	            <li><a href="#">Лечение без сверления</a></li>
	            <li><a href="#">Лечение под наркозом</a></li>
	            <li><a href="#">Детская стоматология</a></li>
	            <li><a href="#">Лечение десен</a></li>
	            <li><a href="#">Плазмолифтинг</a></li>
	          </ul>
	        </li>
	        <li>
	          <a href="#">Эстетика</a>
	          <ul class="sub-menu">
	            <li><a href="#">Чистка зубов</a></li>
	            <li><a href="#">Отбеливание зубов</a></li>
	            <li><a href="#">Имплантация</a></li>
	            <li><a href="#">Компониры</a></li>
	            <li><a href="#">Реставрация зубов</a></li>
	            <li><a href="#">Виниры</a></li>
	          </ul>
	        </li>
	        <li><a href="#">
	          <span>Д</span>
	          <span>е</span>
	          <span>т</span>
	          <span>с</span>
	          <span>к</span>
	          <span>а</span>
	          <span>я</span> стоматология</a></li>
	        <li><a href="#">Брекеты</a></li>
	        <li>
	          <a href="#">Хирургия</a>
	          <ul class="sub-menu">
	            <li><a href="#">Имплантация</a></li>
	            <li><a href="#">Удаление зубов</a></li>
	          </ul>
	        </li>
	        <li><a href="#">Имплантация</a></li>
	        <li>
	          <a href="#">Протезирование</a>
	          <ul class="sub-menu">
	            <li><a href="#">Ортопедия</a></li>
	            <li><a href="#">Компониры</a></li>
	            <li><a href="#">Виниры</a></li>
	            <li><a href="#">Имплантация</a></li>
	          </ul>
	        </li>
	        <li><a href="#">3D-диагностика</a></li>
	        <li><a href="#">Цены</a></li>
	        <li><a href="#">Наши работы</a></li>
	      </ul>
	    </nav>
	</div>
    

	<!-- Включаем bootstrapjs -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>