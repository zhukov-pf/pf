<?php

/**
* 
*/
class GetUsersNormaStatus {
	
	//Сверка количества водителей с установленной нормой на филиале Бескудниково
	function NormaUserBeskud() {

		$connect_db = pg_connect("host=172.18.1.4 port=5432 dbname=pizza_site6 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaBeskudAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3"];

					return strtr($weekday, $data);
				}

				function NormaBeskudPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "4",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaBeskudAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-beskud{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-beskud{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-beskud{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaBeskudPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-beskud{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-beskud{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-beskud{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Митино
	function NormaUserMitino() {

		$connect_db = pg_connect("host=172.18.2.254 port=5432 dbname=pizza_site2 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaMitinoAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "2", "2" => "2", "3" => "2", "4" => "2", "5" => "2", "6" => "3"];

					return strtr($weekday, $data);
				}

				function NormaMitinoPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "2", "2" => "2", "3" => "2", "4" => "2", "5" => "3", "6" => "3",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaMitinoAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-mitino{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-mitino{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-mitino{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaMitinoPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-mitino{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-mitino{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-mitino{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Коломенское
	function NormaUserKolomen() {

		$connect_db = pg_connect("host=172.18.3.254 port=5432 dbname=pizza_site3 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaKolomenAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "2", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "2"];

					return strtr($weekday, $data);
				}

				function NormaKolomenPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "2", "2" => "2", "3" => "2", "4" => "2", "5" => "3", "6" => "3",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaKolomenAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-kolomen{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-kolomen{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-kolomen{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaKolomenPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-kolomen{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-kolomen{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-kolomen{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Крылатское
	function NormaUserKrylatskoe() {

		$connect_db = pg_connect("host=172.18.4.254 port=5432 dbname=pizza_site4 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaKrylatskoeAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3"];

					return strtr($weekday, $data);
				}

				function NormaKrylatskoePM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaKrylatskoeAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-krylatskoe{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-krylatskoe{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-krylatskoe{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaKrylatskoePM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-krylatskoe{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-krylatskoe{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-krylatskoe{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Свиблово
	function NormaUserSviblovo() {

		$connect_db = pg_connect("host=172.18.6.254 port=5432 dbname=pizza_site11 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaSviblovoAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "2", "2" => "2", "3" => "2", "4" => "2", "5" => "3", "6" => "3"];

					return strtr($weekday, $data);
				}

				function NormaSviblovoPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaSviblovoAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-sviblovo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-sviblovo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-sviblovo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaSviblovoPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-sviblovo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-sviblovo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-sviblovo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Строгино
	function NormaUserStrogino() {

		$connect_db = pg_connect("host=172.18.7.254 port=5432 dbname=pizza_site7 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaStroginoAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3"];

					return strtr($weekday, $data);
				}

				function NormaStroginoPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaStroginoAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-strogino{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-strogino{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-strogino{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaStroginoPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-strogino{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-strogino{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-strogino{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Кантемировская
	function NormaUserKantim() {

		$connect_db = pg_connect("host=172.18.8.254 port=5432 dbname=pizza_site8 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaKantimAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "2", "1" => "2", "2" => "2", "3" => "2", "4" => "2", "5" => "2", "6" => "2"];

					return strtr($weekday, $data);
				}

				function NormaKantimPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaKantimAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-kantim{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-kantim{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-kantim{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaKantimPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-kantim{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-kantim{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-kantim{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Домодедовская
	function NormaUserDomodedovo() {

		$connect_db = pg_connect("host=172.18.9.254 port=5432 dbname=pizza_site9 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaDomodedovoAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "2", "1" => "2", "2" => "2", "3" => "2", "4" => "2", "5" => "3", "6" => "2"];

					return strtr($weekday, $data);
				}

				function NormaDomodedovoPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaDomodedovoAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-domodedovo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-domodedovo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-domodedovo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaDomodedovoPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-domodedovo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-domodedovo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-domodedovo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Дубровка
	function NormaUserDubrovka() {

		$connect_db = pg_connect("host=172.18.10.254 port=5432 dbname=pizza_site10 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaDubrovkaAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "4", "2" => "4", "3" => "4", "4" => "4", "5" => "4", "6" => "3"];

					return strtr($weekday, $data);
				}

				function NormaDubrovkaPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "4", "1" => "4", "2" => "4", "3" => "4", "4" => "4", "5" => "4", "6" => "4",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaDubrovkaAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-dubrovka{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-dubrovka{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-dubrovka{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaDubrovkaPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-dubrovka{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-dubrovka{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-dubrovka{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Пионерская
	function NormaUserPionerka() {

		$connect_db = pg_connect("host=172.18.11.254 port=5432 dbname=pizza_site1 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaPionerkaAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "4", "1" => "4", "2" => "4", "3" => "4", "4" => "4", "5" => "5", "6" => "4"];

					return strtr($weekday, $data);
				}

				function NormaPionerkaPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "5", "1" => "4", "2" => "4", "3" => "4", "4" => "4", "5" => "5", "6" => "6",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaPionerkaAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-pionerka{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-pionerka{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-pionerka{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaPionerkaPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-pionerka{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-pionerka{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-pionerka{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Люберцы
	function NormaUserLuber() {

		$connect_db = pg_connect("host=172.18.12.3 port=5432 dbname=pizza_site12 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaLuberAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "2", "1" => "2", "2" => "2", "3" => "2", "4" => "2", "5" => "2", "6" => "2"];

					return strtr($weekday, $data);
				}

				function NormaLuberPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "2", "2" => "2", "3" => "2", "4" => "2", "5" => "3", "6" => "3",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaLuberAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-luber{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-luber{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-luber{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaLuberPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-luber{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-luber{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-luber{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Бибирево
	function NormaUserBibirevo() {

		$connect_db = pg_connect("host=172.18.13.254 port=5432 dbname=pizza_site13 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaBibirevoAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3"];

					return strtr($weekday, $data);
				}

				function NormaBibirevoPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "4", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "4",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaBibirevoAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-bibirevo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-bibirevo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-bibirevo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaBibirevoPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-bibirevo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-bibirevo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-bibirevo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Марьино
	function NormaUserMarino() {

		$connect_db = pg_connect("host=172.18.14.254 port=5432 dbname=pizza_site14 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaMarinoAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "2", "1" => "2", "2" => "2", "3" => "2", "4" => "2", "5" => "2", "6" => "2"];

					return strtr($weekday, $data);
				}

				function NormaMarinoPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "2", "1" => "2", "2" => "2", "3" => "2", "4" => "2", "5" => "3", "6" => "3",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaMarinoAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-marino{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-marino{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-marino{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaMarinoPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-marino{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-marino{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-marino{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Перово
	function NormaUserPerovo() {

		$connect_db = pg_connect("host=172.18.15.254 port=5432 dbname=pizza_site15 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaPerovoAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "2", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3"];

					return strtr($weekday, $data);
				}

				function NormaPerovoPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaPerovoAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-perovo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-perovo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-perovo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaPerovoPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-perovo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-perovo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-perovo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Чертаново
	function NormaUserChertanovo() {

		$connect_db = pg_connect("host=172.18.16.254 port=5432 dbname=pizza_site16 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaChertanovoAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "2", "2" => "2", "3" => "2", "4" => "2", "5" => "3", "6" => "3"];

					return strtr($weekday, $data);
				}

				function NormaChertanovoPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "4", "6" => "4",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaChertanovoAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-chertanovo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-chertanovo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-chertanovo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaChertanovoPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-chertanovo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-chertanovo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-chertanovo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Бутово
	function NormaUserButovo() {

		$connect_db = pg_connect("host=172.18.17.254 port=5432 dbname=pizza_site17 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaButovoAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "2", "1" => "2", "2" => "2", "3" => "2", "4" => "2", "5" => "3", "6" => "2"];

					return strtr($weekday, $data);
				}

				function NormaButovoPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "2", "2" => "2", "3" => "2", "4" => "2", "5" => "3", "6" => "3",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaButovoAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-butovo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-butovo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-butovo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaButovoPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-butovo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-butovo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-butovo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Академическая
	function NormaUserAkadem() {

		$connect_db = pg_connect("host=172.18.18.4 port=5432 dbname=pizza_site18 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaAkademAM($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "2", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3"];

					return strtr($weekday, $data);
				}

				function NormaAkademPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaAkademAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-akadem{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-akadem{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-akadem{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaAkademPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-akadem{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-akadem{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-akadem{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Ордженикидзе
	function NormaUserOrdjen() {

		$connect_db = pg_connect("host=172.18.19.254 port=5432 dbname=pizza_site19 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaOrdjenAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "4", "2" => "4", "3" => "4", "4" => "4", "5" => "5", "6" => "3"];

					return strtr($weekday, $data);
				}

				function NormaOrdjenPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "4", "1" => "4", "2" => "4", "3" => "4", "4" => "4", "5" => "4", "6" => "4",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaOrdjenAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-ordjen{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-ordjen{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-ordjen{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaOrdjenPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-ordjen{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-ordjen{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-ordjen{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Динамо
	function NormaUserDinamo() {

		$connect_db = pg_connect("host=172.18.20.254 port=5432 dbname=pizza_site20 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaDinamoAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "2", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "2"];

					return strtr($weekday, $data);
				}

				function NormaDinamoPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaDinamoAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-dinamo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-dinamo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-dinamo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaDinamoPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-dinamo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-dinamo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-dinamo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Измайлово
	function NormaUserIzmailovo() {

		$connect_db = pg_connect("host=172.18.21.254 port=5432 dbname=pizza_site21 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaIzmailovoAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "2", "1" => "2", "2" => "2", "3" => "2", "4" => "2", "5" => "2", "6" => "3"];

					return strtr($weekday, $data);
				}

				function NormaIzmailovoPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaIzmailovoAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-izmailovo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-izmailovo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-izmailovo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaIzmailovoPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-izmailovo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-izmailovo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-izmailovo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Ясенево
	function NormaUserYasenevo() {

		$connect_db = pg_connect("host=172.18.22.254 port=5432 dbname=pizza_site22 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaYasenevoAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "1", "1" => "1", "2" => "2", "3" => "2", "4" => "3", "5" => "4", "6" => "3"];

					return strtr($weekday, $data);
				}

				function NormaYasenevoPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "4", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "4", "4" => "4",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaYasenevoAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-yasenevo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-yasenevo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-yasenevo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaYasenevoPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-yasenevo{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-yasenevo{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-yasenevo{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

	//Сверка количества водителей с установленной нормой на филиале Водный Стадион
	function NormaUserVodnik() {

		$connect_db = pg_connect("host=172.18.24.254 port=5432 dbname=pizza_site24 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK) {
			echo "Сервер не доступен!";
			pg_close($connect_db);
		}
		else {
			if(pg_connection_busy($connect_db) === FALSE) {

				$today = date('Y-m-d');
				$weekday = date('w');
				$time = date('H:m:s');

				$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
				$total_user = pg_num_rows($query);

				function NormaVodnikAm($weekday) {

					//Массив для сверки до обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "3"];

					return strtr($weekday, $data);
				}

				function NormaVodnikPM($weekday) {

					//Массив для сверки после обеда
					//0 - Воскресенье
					//1 - Понедельник
					//2 - Вторник
					//3 - Среда
					//4 - Четверг
					//5 - Пятница
					//6 - Суббота
					$data = ["0" => "3", "1" => "3", "2" => "3", "3" => "3", "4" => "3", "5" => "3", "6" => "4",];

					return strtr($weekday, $data);
				}

				if($time <= "18:00:00") {
					$weekday = NormaVodnikAM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-vodnik{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-vodnik{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-vodnik{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}
				else {
					$weekday = NormaVodnikPM($weekday);
					if($weekday > $total_user) {
						echo "<style>.user-norma-red-vodnik{background:#f2dede;}</style>";
						echo $weekday;
					}
					elseif ($weekday < $total_user) {
						echo "<style>.user-norma-green-vodnik{background:#dff0d8;}</style>";
						echo $weekday;
					}
					else {
						echo "<style>.user-norma-orange-vodnik{background:#fcf8e3;}</style>";
						echo $weekday;
					}
				}

				$today = NULL;
				$weekday = NULL;
				$time = NULL;
				$query = NULL;
				$total_user = NULL;

			}
			else {
				echo "Повторите попытку позже!";
				pg_close($connect_db);
			}
		}

	}

}

?>