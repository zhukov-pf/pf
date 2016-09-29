<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta lang="ru">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- Строка <meta http-equiv="Refresh" content="3600"> нужна для автоматического обнавления страницы. Значение content указывается в секундах. -->
	<meta http-equiv="Refresh" content="3600">
	<title>Статистика по филиалам</title>
	<!-- Bootstrap 3 -->
	<link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

		<?php
		define("START_TIME", microtime(true));

		error_reporting(0);

		//Подключаем файл класса, отвечающий за проверку статуса соединения с сервером филиала
		include ("/class/getStatus.php");

		//Подключаем файл класса, отвечающий за ввывод выручки по филиалам
		include ("/class/selectCash.php");

		//Подключаем файл класса, отвечающий за ввывод колличества водителей на филиалах
		include ("/class/selectUsers.php");

		//Подключаем файл класса, отвечающий за ввывод колличества заказов на филиалах
		include ("/class/selectOrders.php");

		//Присваиваем переменной новый (-ую) объект (копию класса) getStatus
		$status = new getStatus;

		//Присваиваем переменной новый (-ую) объект (копию класса) selectCash
		$cash = new selectCash;

		//Присваиваем переменной новый (-ую) объект (копию класса) selectUsers
		$user = new selectUsers;

		//Присваиваем переменной новый (-ую) объект (копию класса) selectOrders
		$orders = new selectOrders;
	?>

	<table class="table table-striped table-bordered table-condensed table-responsive">
		<tr align="center">
			<td><b>Филиал</b></td>
			<td><b>Выручка</b></td>
			<td colspan="3">
				<b>Заказы</b>
				<table width="100%">
					<tr align="center">
						<td width="33%">Зал</td>
						<td width="33%">Доставка</td>
						<td width="33%">Всего</td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<b>Водители</b>
				<table width="100%">
					<tr align="center">
						<td width="50%">Норма</td>
						<td width="50%">На филиале</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusAkadem(); ?>>
			<td>Академическая</td>
			<td><?php $cash->GetTotalCashAkadem() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersAkademZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersAkademDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersAkadem() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-akadem user-norma-green-akadem"><?php $user->NormaUserAkadem(); ?></td>
						<td width="50%" class="user-red-akadem"><?php $user->GetUsersAkadem() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusBeskud() ?>>
			<td>Бескудниково</td>
			<td><?php $cash->GetTotalCashBeskud() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersBeskudZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersBeskudDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersBeskud() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-beskud user-norma-green-beskud"><?php $user->NormaUserBeskud() ?></td>
						<td width="50%" class="user-red-beckud"><?php $user->GetUsersBeskud() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusBibirevo(); ?>>
			<td>Бибирево</td>
			<td><?php $cash->GetTotalCashBibirevo() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersBibirevoZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersBibirevoDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersBibirevo() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-bibirevo user-norma-green-bibirevo"><?php $user->NormaUserBibirevo() ?></td>
						<td width="50%" class="user-red-bibirevo"><?php $user->GetUsersBibirevo() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusButovo(); ?>>
			<td>Бутово</td>
			<td><?php $cash->GetTotalCashButovo() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersButovoZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersButovoDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersButovo() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-butovo user-norma-green-butovo"><?php $user->NormaUserButovo(); ?></td>
						<td width="50%" class="user-red-butovo"><?php $user->GetUsersButovo() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusVodnik(); ?>>
			<td>Водный Стадион</td>
			<td><?php $cash->GetTotalCashVodnik() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersVodnikZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersVodnikDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersVodnik() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-vodnik user-norma-green-vodnik"><?php $user->NormaUserVodnik(); ?></td>
						<td width="50%" class="user-red-vodnik"><?php $user->GetUsersVodnik() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusDinamo(); ?>>
			<td>Динамо</td>
			<td><?php $cash->GetTotalCashDinamo() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersDinamoZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersDinamoDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersDinamo() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-dinamo user-norma-green-dinamo"><?php $user->NormaUserDinamo(); ?></td>
						<td width="50%" class="user-red-dinamo"><?php $user->GetUsersDinamo() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusDomodedovo(); ?>>
			<td>Домодедовская</td>
			<td><?php $cash->GetTotalCashDomodedovo() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersDomodedovoZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersDomodedovoDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersDomodedovo() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-domodedovo user-norma-green-domodedovo"><?php $user->NormaUserDomodedovo() ?></td>
						<td width="50%" class="user-red-akadem"><?php $user->GetUsersDomodedovo() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusDubrovka(); ?>>
			<td>Дубровка</td>
			<td><?php $cash->GetTotalCashDubrovka() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersDubrovkaZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersDubrovkaDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersDubrovka() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-dubrovka user-norma-green-dubrovka"><?php $user->NormaUserDubrovka() ?></td>
						<td width="50%" class="user-red-dubrovka"><?php $user->GetUsersDubrovka() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusIzmailovo(); ?>>
			<td>Измайлово</td>
			<td><?php $cash->GetTotalCashIzmailovo() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersIzmailovoZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersIzmailovoDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersIzmailovo() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-izmailovo user-norma-green-izmailovo"><?php $user->NormaUserIzmailovo(); ?></td>
						<td width="50%" class="user-red-izmailovo"><?php $user->GetUsersIzmailovo() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusKantim(); ?>>
			<td>Кантемировская</td>
			<td><?php $cash->GetTotalCashKantim() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersKantimZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersKantimDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersKantim() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-kantim user-norma-green-kantim"><?php $user->NormaUserKantim() ?></td>
						<td width="50%" class="user-red-kantim"><?php $user->GetUsersKantim() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusKolomen(); ?>>
			<td>Коломенское</td>
			<td><?php $cash->GetTotalCashKolomen() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersKolomenZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersKolomenDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersKolomen() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-kolomen user-norma-green-kolomen"><?php $user->NormaUserKolomen() ?></td>
						<td width="50%" class="user-red-kolomen"><?php $user->GetUsersKolomen() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusKrylatskoe(); ?>>
			<td>Крылатское</td>
			<td><?php $cash->GetTotalCashKrylatskoe() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersKrylatskoeZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersKrylatskoeDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersKrylatskoe() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-krylatskoe user-norma-green-krylatskoe"><?php $user->NormaUserKrylatskoe() ?></td>
						<td width="50%" class="user-red-kolomen"><?php $user->GetUsersKrylatskoe() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusLuber(); ?>>
			<td>Люберцы</td>
			<td><?php $cash->GetTotalCashLuber() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersLuberZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersLuberDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersLuber() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-luber user-norma-green-luber"><?php $user->NormaUserLuber() ?></td>
						<td width="50%" class="user-red-luber"><?php $user->GetUsersLuber() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusMarino(); ?>>
			<td>Марьино</td>
			<td><?php $cash->GetTotalCashMarino() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersMarinoZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersMarinoDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersMarino() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-marino user-norma-green-marino"><?php $user->NormaUserMarino() ?></td>
						<td width="50%" class="user-red-marino"><?php $user->GetUsersMarino() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusMitino(); ?>>
			<td>Митино</td>
			<td><?php $cash->GetTotalCashMitino() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersMitinoZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersMitinoDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersMitino() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-mitino user-norma-green-mitino"><?php $user->NormaUserMitino() ?></td>
						<td width="50%" class="user-red-mitino"><?php $user->GetUsersMitino() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusOrdjen(); ?>>
			<td>Ордженикидзе</td>
			<td><?php $cash->GetTotalCashOrdjen() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersOrdjenZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersOrdjenDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersOrdjen() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-ordjen user-norma-green-ordjen"><?php $user->NormaUserOrdjen(); ?></td>
						<td width="50%" class="user-red-ordjen"><?php $user->GetUsersOrdjen() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusPerovo(); ?>>
			<td>Перово</td>
			<td><?php $cash->GetTotalCashPerovo() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersPerovoZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersPerovoDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersPerovo() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-perovo user-norma-green-perovo"><?php $user->NormaUserPerovo() ?></td>
						<td width="50%" class="user-red-perovo"><?php $user->GetUsersPerovo() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusPionerka(); ?>>
			<td>Пионерская</td>
			<td><?php $cash->GetTotalCashPionerka() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersPionerkaZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersPionerkaDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersPionerka() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-pionerka user-norma-green-pionerka"><?php $user->NormaUserPionerka() ?></td>
						<td width="50%" class="user-red-pionerka"><?php $user->GetUsersPionerka() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusSviblovo(); ?>>
			<td>Свиблово</td>
			<td><?php $cash->GetTotalCashSviblovo() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersSviblovoZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersSviblovoDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersSviblovo() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-sviblovo user-norma-green-sviblovo"><?php $user->NormaUserSviblovo(); ?></td>
						<td width="50%" class="user-red-sviblovo"><?php $user->GetUsersSviblovo(); ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusStrogino(); ?>>
			<td>Строгино</td>
			<td><?php $cash->GetTotalCashStrogino(); ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersStroginoZal(); ?></td>
						<td width="33%"><?php $orders->GetOrdersStroginoDostavka(); ?></td>
						<td width="33%"><?php $orders->GetOrdersStrogino(); ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-strogino user-norma-green-strogino"><?php $user->NormaUserStrogino(); ?></td>
						<td width="50%" class="user-red-strogino"><?php $user->GetUsersStrogino() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusChertanovo(); ?>>
			<td>Чертаново</td>
			<td><?php $cash->GetTotalCashChertanovo() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersChertanovoZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersChertanovoDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersChertanovo() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-chertanovo user-norma-green-chertanovo"><?php $user->NormaUserChertanovo(); ?></td>
						<td width="50%" class="user-red-chertanovo"><?php $user->GetUsersChertanovo() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center" <?php $status->StatusYasenevo(); ?>>
			<td>Ясенево</td>
			<td><?php $cash->GetTotalCashYasenevo() ?></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><?php $orders->GetOrdersYasenevoZal() ?></td>
						<td width="33%"><?php $orders->GetOrdersYasenevoDostavka() ?></td>
						<td width="33%"><?php $orders->GetOrdersYasenevo() ?></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%" class="user-norma-red-yasenevo user-norma-green-yasenevo"><?php $user->NormaUserYasenevo(); ?></td>
						<td width="50%" class="user-red-yasenevo"><?php $user->GetUsersYasenevo() ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr align="center">
			<td><b>Итого</b></td>
			<td><b><?php $cash->GetTotalSum() ?></b></td>
			<td colspan="3">
				<table width="100%">
					<tr align="center">
						<td width="33%"><b><?php $orders->GetTotalOrdersZal() ?></b></td>
						<td width="33%"><b><?php $orders->GetTotalOrdersDostavka() ?></b></td>
						<td width="33%"><b><?php $orders->GetTotalOrders() ?></b></td>
					</tr>
				</table>
			</td>
			<td colspan="2">
				<table width="100%">
					<tr align="center">
						<td width="50%"><b></b></td>
						<td width="50%"><b><?php $user->GetTotalUsers() ?></b></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table class="table table-responsive">
		<tr>
			<td align="right"><?php printf("Отчет сгенерирован за: %.5f сек", microtime(true)-START_TIME);?></td>
			<td align="right" style="display: none;">Обнавлено в <?php echo date ("d-m-Y H:i:s.", filemtime("index.php"));?></td>
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