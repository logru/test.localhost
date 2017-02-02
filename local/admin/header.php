<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="windows-1251">
	<title></title>
	<link rel="stylesheet" href="template_style.css"/>
	<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
	<div class="wrap">
		<div class="hd_header_area">
			<div class="hd_header">
				<div class="nv_topnav">
					<ul>
						<li><a href=""   class="menu-img-fon"  style="background-image: url(images/nv_home.png);" ><span></span></a></li>
						<li><a href=""><span>Компания</span></a>
							<ul>
								<li><a href="">Пункт 1</a></li>
								<li><a href="">Пункт 2</a></li>
								<li><a href="">Пункт 3</a></li>
								<li><a href="">Пункт 4</a></li>
							</ul>
						</li>
						<li><a href=""><span>Новости</span></a></li>
						<li><a href=""><span>Каталог</span></a></li>
						<li><a href=""><span>Акции</span></a>
							<ul>
								<li><a href="">Пункт 1</a>
									<ul>
										<li><a href="">Пункт 1</a></li>
										<li><a href="">Пункт 2</a></li>
									</ul>
								</li>
								<li><a href="">Пункт 2</a></li>
								<li><a href="">Пункт 3</a></li>
								<li><a href="">Пункт 4</a></li>
							</ul>
						</li>
						<li><a href=""><span>Партнерам</span></a></li>
						<li><a href=""><span>Контакты</span></a></li>
						<div class="clearboth"></div>
					</ul>
				</div>
			</div>
		</div>
		<!--- // end header area --->
		
		
		<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"nav",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?><br>

		<div class="main_container page">
			<div class="mn_container">
				<div class="mn_content">
					<div class="main_post">
						<div class="main_title">
							<p class="title">Заголовок страницы</p>
						</div>
						<!-- workarea -->
	