<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta lang="ru">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- Строка <meta http-equiv="Refresh" content="3600"> нужна для автоматического обнавления страницы. Значение content указывается в секундах. -->
	<meta http-equiv="Refresh" content="3600">
	<title>Статистика по филиалам</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
	<?php

		define("START_TIME", microtime(true));

		error_reporting(0);

		//Подключаем файл класса, отвечающий за ввывод выручки по филиалам
		include ($_SERVER['DOCUMENT_ROOT']."/class/selectCash.php");

		//Подключаем файл класса, отвечающий за ввывод колличества водителей на филиалах
		include ($_SERVER['DOCUMENT_ROOT']."/class/selectUsers.php");

		//Подключаем файл класса, отвечающий за ввывод колличества заказов на филиалах
		include ($_SERVER['DOCUMENT_ROOT']."/class/selectOrders.php");

		//Присваиваем переменной новый (-ую) объект (копию класса) selectCash
		$cash = new selectCash;

		//Присваиваем переменной новый (-ую) объект (копию класса) selectUsers
		$user = new selectUsers;

		//Присваиваем переменной новый (-ую) объект (копию класса) selectOrders
		$orders = new selectOrders;
	?>
	<table border="1px" class="table table-striped table-bordered table-condensed table-responsive">
		<tr>
			<td align="center"><span class="glyphicon glyphicon-map-marker"></span><b>Филиал</b></td>
			<td align="center"><span class="glyphicon glyphicon-usd"></span><b>Выручка</b></td>
			<td align="center"><span class="glyphicon glyphicon-tag"></span><b>Заказы</b></td>
			<td align="center"><span class="glyphicon glyphicon-user"></span><b>Водители</b></td>
		</tr>
		<tr align="center">
			<td>Академическая</td>
			<td><?php $cash->GetTotalCashAkadem() ?></td>
			<td><?php $orders->GetOrdersAkadem() ?></td>
			<td class="user-red-akadem"><?php $user->GetUsersAkadem() ?></td>
		</tr>
		<tr align="center">
			<td>Бескудниково</td>
			<td><?php $cash->GetTotalCashBeskud() ?></td>
			<td><?php $orders->GetOrdersBeskud() ?></td>
			<td class="user-red-beckud"><?php $user->GetUsersBeskud() ?></td>
		</tr>
		<tr align="center">
			<td>Бибирево</td>
			<td><?php $cash->GetTotalCashBibirevo() ?></td>
			<td><?php $orders->GetOrdersBibirevo() ?></td>
			<td class="user-red-bibirevo"><?php $user->GetUsersBibirevo() ?></td>
		</tr>
		<tr align="center">
			<td>Бутово</td>
			<td><?php $cash->GetTotalCashButovo() ?></td>
			<td><?php $orders->GetOrdersButovo() ?></td>
			<td class="user-red-butovo"><?php $user->GetUsersButovo() ?></td>
		</tr>
		<tr align="center">
			<td>Водный стадион</td>
			<td><?php $cash->GetTotalCashVodnik() ?></td>
			<td><?php $orders->GetOrdersVodnik() ?></td>
			<td class="user-red-vodnik"><?php $user->GetUsersVodnik() ?></td>
		</tr>
		<tr align="center">
			<td>Динамо</td>
			<td><?php $cash->GetTotalCashDinamo() ?></td>
			<td><?php $orders->GetOrdersDinamo() ?></td>
			<td class="user-red-dinamo"><?php $user->GetUsersDinamo() ?></td>
		</tr>
		<tr align="center">
			<td>Домодедовская</td>
			<td><?php $cash->GetTotalCashDomodedovo() ?></td>
			<td><?php $orders->GetOrdersDomodedovo() ?></td>
			<td class="user-red-akadem"><?php $user->GetUsersDomodedovo() ?></td>
		</tr>
		<tr align="center">
			<td>Дубровка</td>
			<td><?php $cash->GetTotalCashDubrovka() ?></td>
			<td><?php $orders->GetOrdersDubrovka() ?></td>
			<td class="user-red-dubrovka"><?php $user->GetUsersDubrovka() ?></td>
		</tr>
		<tr align="center">
			<td>Измайлово</td>
			<td><?php $cash->GetTotalCashIzmailovo() ?></td>
			<td><?php $orders->GetOrdersIzmailovo() ?></td>
			<td class="user-red-izmailovo"><?php $user->GetUsersIzmailovo() ?></td>
		</tr>
		<tr align="center">
			<td>Кантемировская</td>
			<td><?php $cash->GetTotalCashKantim() ?></td>
			<td><?php $orders->GetOrdersKantim() ?></td>
			<td class="user-red-kantim"><?php $user->GetUsersKantim() ?></td>
		</tr>
		<tr align="center">
			<td>Коломенское</td>
			<td><?php $cash->GetTotalCashKolomen() ?></td>
			<td><?php $orders->GetOrdersKolomen() ?></td>
			<td class="user-red-kolomen"><?php $user->GetUsersKolomen() ?></td>
		</tr>
		<tr align="center">
			<td>Крылатское</td>
			<td><?php $cash->GetTotalCashKrylatskoe() ?></td>
			<td><?php $orders->GetOrdersKrylatskoe() ?></td>
			<td class="user-red-kolomen"><?php $user->GetUsersKrylatskoe() ?></td>
		</tr>
		<tr align="center">
			<td>Люберцы</td>
			<td><?php $cash->GetTotalCashLuber() ?></td>
			<td><?php $orders->GetOrdersLuber() ?></td>
			<td class="user-red-luber"><?php $user->GetUsersLuber() ?></td>
		</tr>
		<tr align="center">
			<td>Марьино</td>
			<td><?php $cash->GetTotalCashMarino() ?></td>
			<td><?php $orders->GetOrdersMarino() ?></td>
			<td class="user-red-marino"><?php $user->GetUsersMarino() ?></td>
		</tr>
		<tr align="center">
			<td>Митино</td>
			<td><?php $cash->GetTotalCashMitino() ?></td>
			<td><?php $orders->GetOrdersMitino() ?></td>
			<td class="user-red-mitino"><?php $user->GetUsersMitino() ?></td>
		</tr>
		<tr align="center">
			<td>Орджоникидзе</td>
			<td><?php $cash->GetTotalCashOrdjen() ?></td>
			<td><?php $orders->GetOrdersOrdjen() ?></td>
			<td class="user-red-ordjen"><?php $user->GetUsersOrdjen() ?></td>
		</tr>
		<tr align="center">
			<td>Перово</td>
			<td><?php $cash->GetTotalCashPerovo() ?></td>
			<td><?php $orders->GetOrdersPerovo() ?></td>
			<td class="user-red-perovo"><?php $user->GetUsersPerovo() ?></td>
		</tr>
		<tr align="center">
			<td>Пионерская</td>
			<td><?php $cash->GetTotalCashPionerka() ?></td>
			<td><?php $orders->GetOrdersPionerka() ?></td>
			<td class="user-red-pionerka"><?php $user->GetUsersPionerka() ?></td>
		</tr>
		<tr align="center">
			<td>Свиблово</td>
			<td><?php $cash->GetTotalCashSviblovo() ?></td>
			<td><?php $orders->GetOrdersSviblovo() ?></td>
			<td class="user-red-sviblovo"><?php $user->GetUsersSviblovo() ?></td>
		</tr>
		<tr align="center">
			<td>Строгино</td>
			<td><?php $cash->GetTotalCashStrogino() ?></td>
			<td><?php $orders->GetOrdersStrogino() ?></td>
			<td class="user-red-strogino"><?php $user->GetUsersStrogino() ?></td>
		</tr>
		<tr align="center">
			<td>Чертаново</td>
			<td><?php $cash->GetTotalCashChertanovo() ?></td>
			<td><?php $orders->GetOrdersChertanovo() ?></td>
			<td class="user-red-chertanovo"><?php $user->GetUsersChertanovo() ?></td>
		</tr>
		<tr align="center">
			<td>Ясенево</td>
			<td><?php $cash->GetTotalCashYasenevo() ?></td>
			<td><?php $orders->GetOrdersYasenevo() ?></td>
			<td class="user-red-yasenevo"><?php $user->GetUsersYasenevo() ?></td>
		</tr>
		<tr align="center">
			<td><b>Итого</b></td>
			<td><b><?php $cash->GetTotalSum() ?></b></td>
			<td><b><?php $orders->GetTotalOrders() ?></b></td>
			<td><b><?php $user->GetTotalUsers() ?></b></td>
		</tr>

	</table>
	<table class="table table-responsive">
		<tr>
			<td align="right"><?php printf("Отчет сгенерирован за: %.5f сек", microtime(true)-START_TIME);?></td>
			<td align="right" style="display: none;">Обновлено в <?php echo date ("d-m-Y H:i:s.", filemtime("index.php"));?></td>
			<td></td>
		</tr>
	</table>
<!-- HelloPreload http://hello-site.ru/preloader/ -->
<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background: #ffffff url(js/preloader/img/3.gif) center center no-repeat;background-size:80px;}</style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
<!-- HelloPreload http://hello-site.ru/preloader/ -->
</body>
</html>