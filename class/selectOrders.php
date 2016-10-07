<?php

/*
*	Класс SelectOrders нужен для выборки и подсчета колличества заказов на каждом филиале
*	
*	Описание работы функции
*	При вызове функции происходит соединение с БД по туннелю. Поссле идет проверка свободно ли соединение с БД.
*	После происходит выборка из таблицы orders по полю orders_id с указанием интервала "за сегодня".
*
*/

class SelectOrders{

	//Блок свойств класса SelectOrders
  	//Блок нужен для метода (функции) GetTotalOrders()
	private $beskutorder;
	private $mitinoorder;
	private $kolomenorder;
	private $krylatskoeorder;
	private $sviblovoorder;
	private $stroginoorder;
	private $kantimorder;
	private $domodedovoorder;
	private $dubrovkaorder;
	private $pionerkaorder;
	private $luberorder;
	private $bibirevoorder;
	private $marinoorder;
	private $perovoorder;
	private $chertanovoorder;
	private $butovoorder;
	private $akademorder;
	private $ordjenorder;
	private $dinamoorder;
	private $izmailovoorder;
	private $yasenevoorder;
	private $vodnikorder;

	//Блок нужен для метода (функции) GetTotalOrdersZal()
 	private $beskud_zal;
	private $mitino_zal;
	private $kolomen_zal;
	private $krylatskoe_zal;
	private $sviblovo_zal;
	private $strogino_zal;
	private $kantim_zal;
	private $domodedovo_zal;
	private $dubrovka_zal;
	private $pionerka_zal;
	private $luber_zal;
	private $bibirevo_zal;
	private $marino_zal;
	private $perovo_zal;
	private $chertanovo_zal;
	private $butovo_zal;
	private $akadem_zal;
	private $ordjen_zal;
	private $dinamo_zal;
	private $izmailovo_zal;
	private $yasenevo_zal;
	private $vodnik_zal;

	//Блок нужен для метода (функции) GetTotalOrdersDostavka()
	private $beskud_dostavka;
	private $mitino_dostavka;
	private $kolomen_dostavka;
	private $krylatskoe_dostavka;
	private $sviblovo_dostavka;
	private $strogino_dostavka;
	private $kantim_dostavka;
	private $domodedovo_dostavka;
	private $dubrovka_dostavka;
	private $pionerka_dostavka;
	private $luber_dostavka;
	private $bibirevo_dostavka;
	private $marino_dostavka;
	private $perovo_dostavka;
	private $chertanovo_dostavka;
	private $butovo_dostavka;
	private $akadem_dostavka;
	private $ordjen_dostavka;
	private $dinamo_dostavka;
	private $izmailovo_dostavka;
	private $yasenevo_dostavka;
	private $vodnik_dostavka;

	//Получение текущего числа заказов на филиале Бескудниково
	function GetOrdersBeskud(){
		$connect_db = pg_connect("host=172.18.1.4 port=5432 dbname=pizza_site6 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->beskudorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->beskutorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Митино
	function GetOrdersMitino(){
		$connect_db = pg_connect("host=172.18.2.254 port=5432 dbname=pizza_site2 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->mitinoorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->mitinoorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Коломенское
	function GetOrdersKolomen(){
		$connect_db = pg_connect("host=172.18.3.254 port=5432 dbname=pizza_site3 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->kolomenorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->kolomenorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Крылатское
	function GetOrdersKrylatskoe(){
		$connect_db = pg_connect("host=172.18.4.254 port=5432 dbname=pizza_site4 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->krylatskoeorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->krylatskoeorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Свиблово
	function GetOrdersSviblovo(){
		$connect_db = pg_connect("host=172.18.6.254 port=5432 dbname=pizza_site11 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->sviblovoorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->sviblovoorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Строгино
	function GetOrdersStrogino(){
		$connect_db = pg_connect("host=172.18.7.254 port=5432 dbname=pizza_site7 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->stroginoorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->stroginoorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Кантемировская
	function GetOrdersKantim(){
		$connect_db = pg_connect("host=172.18.8.254 port=5432 dbname=pizza_site8 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->kantimorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->kantimorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Домодедовская
	function GetOrdersDomodedovo(){
		$connect_db = pg_connect("host=172.18.9.254 port=5432 dbname=pizza_site9 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->domodedovoorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->domodedovoorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Дубровка
	function GetOrdersDubrovka(){
		$connect_db = pg_connect("host=172.18.10.254 port=5432 dbname=pizza_site10 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->dubrovkaorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->dubrovkaorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Пионерская
	function GetOrdersPionerka(){
		$connect_db = pg_connect("host=172.18.11.254 port=5432 dbname=pizza_site1 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->pionerkaorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->pionerkaorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Люберцы
	function GetOrdersLuber(){
		$connect_db = pg_connect("host=172.18.12.3 port=5432 dbname=pizza_site12 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->luberorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->luberorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Бибирево
	function GetOrdersBibirevo(){
		$connect_db = pg_connect("host=172.18.13.254 port=5432 dbname=pizza_site13 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->bibirevoorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->bibirevoorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Марьино
	function GetOrdersMarino(){
		$connect_db = pg_connect("host=172.18.14.254 port=5432 dbname=pizza_site14 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->marinoorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->marinoorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Перово
	function GetOrdersPerovo(){
		$connect_db = pg_connect("host=172.18.15.254 port=5432 dbname=pizza_site15 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->perovoorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->perovoorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Чертаново
	function GetOrdersChertanovo(){
		$connect_db = pg_connect("host=172.18.16.254 port=5432 dbname=pizza_site16 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->chertanovoorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->chertanovoorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Бутово
	function GetOrdersButovo(){
		$connect_db = pg_connect("host=172.18.17.254 port=5432 dbname=pizza_site17 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->butovoorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->butovoorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Академическая
	function GetOrdersAkadem(){
		$connect_db = pg_connect("host=172.18.18.4 port=5432 dbname=pizza_site18 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->akademorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->akademorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Ордженикидзе
	function GetOrdersOrdjen(){
		$connect_db = pg_connect("host=172.18.19.254 port=5432 dbname=pizza_site19 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->ordjenorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->ordjenorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Динамо
	function GetOrdersDinamo(){
		$connect_db = pg_connect("host=172.18.20.254 port=5432 dbname=pizza_site20 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->dinamoorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->dinamoorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Измайлово
	function GetOrdersIzmailovo(){
		$connect_db = pg_connect("host=172.18.21.254 port=5432 dbname=pizza_site21 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->izmailovoorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->izmailovoorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Ясенево
	function GetOrdersYasenevo(){
		$connect_db = pg_connect("host=172.18.22.254 port=5432 dbname=pizza_site22 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->yasenevoorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->yasenevoorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего числа заказов на филиале Водный Стадион
	function GetOrdersVodnik(){
		$connect_db = pg_connect("host=172.18.24.254 port=5432 dbname=pizza_site24 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			$this->vodnikorder = '0';
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT orders_id FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_orders = pg_num_rows($query);

	   		 	$this->vodnikorder = $total_orders;

	   		 	echo $total_orders;

	   		 	$total_orders = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

  //Получение текущих заказов в зале на филиале Бескудниково
  function GetOrdersBeskudZal(){
    $connect_db = pg_connect("host=172.18.1.4 port=5432 dbname=pizza_site6 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
    	echo "Сервер не доступен!";
		$this->beskud_zal = '0';
    	pg_close($connect_db);
      
    }
    else{
        if(pg_connection_busy($connect_db) === FALSE) {
        
          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='6')");
          
          $zal = pg_num_rows($query);

          $this->beskud_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);
      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Митино
  function GetOrdersMitinoZal(){
    $connect_db = pg_connect("host=172.18.2.254 port=5432 dbname=pizza_site2 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->mitino_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='2')");
          
          $zal = pg_num_rows($query);

          $this->mitino_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
         
      }
    }
  }

  //Получение текущих заказов в зале на филиале Коломенское
  function GetOrdersKolomenZal(){
    $connect_db = pg_connect("host=172.18.3.254 port=5432 dbname=pizza_site3 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->kolomen_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='3')");
          
          $zal = pg_num_rows($query);

          $this->kolomen_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Крылатское
  function GetOrdersKrylatskoeZal(){
    $connect_db = pg_connect("host=172.18.4.254 port=5432 dbname=pizza_site4 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->krylatskoe_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='4')");
          
          $zal = pg_num_rows($query);

          $this->krylatskoe_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Свиблово
  function GetOrdersSviblovoZal(){
    $connect_db = pg_connect("host=172.18.6.254 port=5432 dbname=pizza_site11 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->sviblovo_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='11')");
          
          $zal = pg_num_rows($query);

          $this->sviblovo_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Строгино
  function GetOrdersStroginoZal(){
    $connect_db = pg_connect("host=172.18.7.254 port=5432 dbname=pizza_site7 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->strogino_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='7')");
          
          $zal = pg_num_rows($query);

          $this->strogino_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Кантемировская
  function GetOrdersKantimZal(){
    $connect_db = pg_connect("host=172.18.8.254 port=5432 dbname=pizza_site8 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->kantim_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='8')");
          
          $zal = pg_num_rows($query);

          $this->kantim_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Домодедовская
  function GetOrdersDomodedovoZal(){
    $connect_db = pg_connect("host=172.18.9.254 port=5432 dbname=pizza_site9 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->domodedovo_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='9')");
          
          $zal = pg_num_rows($query);

          $this->domodedovo_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в заде на филиале Дубровка
  function GetOrdersDubrovkaZal(){
    $connect_db = pg_connect("host=172.18.10.254 port=5432 dbname=pizza_site10 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->dubrovka_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='10')");
          
          $zal = pg_num_rows($query);

          $this->dubrovka_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Пионерская
  function GetOrdersPionerkaZal(){
    $connect_db = pg_connect("host=172.18.11.254 port=5432 dbname=pizza_site1 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->pionerka_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='1')");
          
          $zal = pg_num_rows($query);

          $this->pionerka_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Люберцы
  function GetOrdersLuberZal(){
    $connect_db = pg_connect("host=172.18.12.3 port=5432 dbname=pizza_site12 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->luber_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='12')");
          
          $zal = pg_num_rows($query);

          $this->luber_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Бибирево
  function GetOrdersBibirevoZal(){
    $connect_db = pg_connect("host=172.18.13.254 port=5432 dbname=pizza_site13 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->bibirevo_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='13')");
          
          $zal = pg_num_rows($query);

          $this->bibirevo_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Марьино
  function GetOrdersMarinoZal(){
    $connect_db = pg_connect("host=172.18.14.254 port=5432 dbname=pizza_site14 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->marino_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='14')");
          
          $zal = pg_num_rows($query);

          $this->marino_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Перово
  function GetOrdersPerovoZal(){
    $connect_db = pg_connect("host=172.18.15.254 port=5432 dbname=pizza_site15 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->perovo_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='15')");
          
          $zal = pg_num_rows($query);

          $this->perovo_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Чертаново
  function GetOrdersChertanovoZal(){
    $connect_db = pg_connect("host=172.18.16.254 port=5432 dbname=pizza_site16 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->chertanovo_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='16')");
          
          $zal = pg_num_rows($query);

          $this->chertanovo_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Бутово
  function GetOrdersButovoZal(){
    $connect_db = pg_connect("host=172.18.17.254 port=5432 dbname=pizza_site17 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->butovo_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='17')");
          
          $zal = pg_num_rows($query);

          $this->butovo_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Академическая
  function GetOrdersAkademZal(){
    $connect_db = pg_connect("host=172.18.18.4 port=5432 dbname=pizza_site18 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->izmailovo_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='18')");
          
          $zal = pg_num_rows($query);

          $this->akadem_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Ордженикидзе
  function GetOrdersOrdjenZal(){
    $connect_db = pg_connect("host=172.18.19.254 port=5432 dbname=pizza_site19 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->ordjen_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='19')");
          
          $zal = pg_num_rows($query);

          $this->ordjen_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Динамо
  function GetOrdersDinamoZal(){
    $connect_db = pg_connect("host=172.18.20.254 port=5432 dbname=pizza_site20 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->dinamo_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='20')");
          
          $zal = pg_num_rows($query);

          $this->dinamo_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Измайлово
  function GetOrdersIzmailovoZal(){
    $connect_db = pg_connect("host=172.18.21.254 port=5432 dbname=pizza_site21 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->izmailovo_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='21')");
          
          $zal = pg_num_rows($query);

          $this->izmailovo_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Ясенево
  function GetOrdersYasenevoZal(){
    $connect_db = pg_connect("host=172.18.22.254 port=5432 dbname=pizza_site22 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->yasenevo_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='22')");
          
          $zal = pg_num_rows($query);

          $this->yasenevo_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов в зале на филиале Водный Стадион
  function GetOrdersVodnikZal(){
    $connect_db = pg_connect("host=172.18.24.254 port=5432 dbname=pizza_site24 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->vodnik_zal = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='24')");
          
          $zal = pg_num_rows($query);

          $this->vodnik_zal = $zal;

          if($zal === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $zal;
          }

          $zal = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Бескудниково
  function GetOrdersBeskudDostavka(){
    $connect_db = pg_connect("host=172.18.1.4 port=5432 dbname=pizza_site6 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->beskud_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
        if(pg_connection_busy($connect_db) === FALSE) {
        
          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (6))");
          
          $dostavka = pg_num_rows($query);

          $this->beskud_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);
      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Митино
  function GetOrdersMitinoDostavka(){
    $connect_db = pg_connect("host=172.18.2.254 port=5432 dbname=pizza_site2 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->mitino_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (2))");
          
          $dostavka = pg_num_rows($query);

          $this->mitino_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
         
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Коломенское
  function GetOrdersKolomenDostavka(){
    $connect_db = pg_connect("host=172.18.3.254 port=5432 dbname=pizza_site3 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->kolomen_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (3))");
          
          $dostavka = pg_num_rows($query);

          $this->kolomen_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Крылатское
  function GetOrdersKrylatskoeDostavka(){
    $connect_db = pg_connect("host=172.18.4.254 port=5432 dbname=pizza_site4 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->krylatskoe_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (4))");
          
          $dostavka = pg_num_rows($query);

          $this->krylatskoe_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Свиблово
  function GetOrdersSviblovoDostavka(){
    $connect_db = pg_connect("host=172.18.6.254 port=5432 dbname=pizza_site11 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->sviblovo_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (11))");
          
          $dostavka = pg_num_rows($query);

          $this->sviblovo_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Строгино
  function GetOrdersStroginoDostavka(){
    $connect_db = pg_connect("host=172.18.7.254 port=5432 dbname=pizza_site7 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->strogino_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone  NOT IN (7))");
          
          $dostavka = pg_num_rows($query);

          $this->strogino_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Кантемировская
  function GetOrdersKantimDostavka(){
    $connect_db = pg_connect("host=172.18.8.254 port=5432 dbname=pizza_site8 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->kantim_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (8))");
          
          $dostavka = pg_num_rows($query);

          $this->kantim_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Домодедовская
  function GetOrdersDomodedovoDostavka(){
    $connect_db = pg_connect("host=172.18.9.254 port=5432 dbname=pizza_site9 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->domodedovo_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (9))");
          
          $dostavka = pg_num_rows($query);

          $this->domodedovo_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Дубровка
  function GetOrdersDubrovkaDostavka(){
    $connect_db = pg_connect("host=172.18.10.254 port=5432 dbname=pizza_site10 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->dubrovka_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (10))");
          
          $dostavka = pg_num_rows($query);

          $this->dubrovka_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Пионерская
  function GetOrdersPionerkaDostavka(){
    $connect_db = pg_connect("host=172.18.11.254 port=5432 dbname=pizza_site1 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->pionerka_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone  NOT IN (1))");
          
          $dostavka = pg_num_rows($query);

          $this->pionerka_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Люберцы
  function GetOrdersLuberDostavka(){
    $connect_db = pg_connect("host=172.18.12.3 port=5432 dbname=pizza_site12 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->luber_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (12))");
          
          $dostavka = pg_num_rows($query);

          $this->luber_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Бибирево
  function GetOrdersBibirevoDostavka(){
    $connect_db = pg_connect("host=172.18.13.254 port=5432 dbname=pizza_site13 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->bibirevo_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (13))");
          
          $dostavka = pg_num_rows($query);

          $this->bibirevo_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Марьино
  function GetOrdersMarinoDostavka(){
    $connect_db = pg_connect("host=172.18.14.254 port=5432 dbname=pizza_site14 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->marino_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (14))");
          
          $dostavka = pg_num_rows($query);

          $this->marino_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Перово
  function GetOrdersPerovoDostavka(){
    $connect_db = pg_connect("host=172.18.15.254 port=5432 dbname=pizza_site15 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->perovo_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (15))");
          
          $dostavka = pg_num_rows($query);

          $this->perovo_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Чертаново
  function GetOrdersChertanovoDostavka(){
    $connect_db = pg_connect("host=172.18.16.254 port=5432 dbname=pizza_site16 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->chertanovo_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (16))");
          
          $dostavka = pg_num_rows($query);

          $this->chertanovo_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Бутово
  function GetOrdersbutovoDostavka(){
    $connect_db = pg_connect("host=172.18.17.254 port=5432 dbname=pizza_site17 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->butovo_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (17))");
          
          $dostavka = pg_num_rows($query);

          $this->butovo_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Академическая
  function GetOrdersAkademDostavka(){
    $connect_db = pg_connect("host=172.18.18.4 port=5432 dbname=pizza_site18 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->akadem_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN(18))");
          
          $dostavka = pg_num_rows($query);

          $this->akadem_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Ордженикидзе
  function GetOrdersOrdjenDostavka(){
    $connect_db = pg_connect("host=172.18.19.254 port=5432 dbname=pizza_site19 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->ordjen_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (19))");
          
          $dostavka = pg_num_rows($query);

          $this->ordjen_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Динамо
  function GetOrdersDinamoDostavka(){
    $connect_db = pg_connect("host=172.18.20.254 port=5432 dbname=pizza_site20 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->dinamo_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (20))");
          
          $dostavka = pg_num_rows($query);

          $this->dinamo_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Измайлово
  function GetOrdersIzmailovoDostavka(){
    $connect_db = pg_connect("host=172.18.21.254 port=5432 dbname=pizza_site21 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->izmailovo_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (21))");
          
          $dostavka = pg_num_rows($query);

          $this->izmailovo_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставкиа на филиале Ясенево
  function GetOrdersYasenevoDostavka(){
    $connect_db = pg_connect("host=172.18.22.254 port=5432 dbname=pizza_site22 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->yasenevo_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (22))");
          
          $dostavka = pg_num_rows($query);

          $this->yasenevo_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Получение текущих заказов с доставки на филиале Водный Стадион
  function GetOrdersVodnikDostavka(){
    $connect_db = pg_connect("host=172.18.24.254 port=5432 dbname=pizza_site24 user=pizzauser password=pizzauser connect_timeout=5");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->vodnik_dostavka = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT orders_id FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone NOT IN (24))");
          
          $dostavka = pg_num_rows($query);

          $this->vodnik_dostavka = $dostavka;

          if($dostavka === NULL){
            echo "За сегодня заказов нет";
          }
          else{
            echo $dostavka;
          }

          $dostavka = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

  //Функция подсчета итоговой суммы в зале по всем филиалам
  function GetTotalOrdersZal(){
    $total_orders_zal = $this->beskud_zal + $this->mitino_zal + $this->kolomen_zal + $this->krylatskoe_zal + $this->sviblovo_zal + $this->strogino_zal + $this->kantim_zal + $this->domodedovo_zal + $this->dubrovka_zal + $this->pionerka_zal + $this->luber_zal + $this->bibirevo_zal + $this->marino_zal + $this->perovo_zal + $this->chertanovo_zal + $this->butovo_zal + $this->akadem_zal + $this->ordjen_zal + $this->dinamo_zal + $this->izmailovo_zal + $this->yasenevo_zal + $this->vodnik_zal;

    echo $total_orders_zal;
  }

  //Функция подсчета итоговой суммы с доставки по всем филиалам
  function GetTotalOrdersDostavka(){
    $total_orders_dostavka = $this->beskud_dostavka + $this->mitino_dostavka + $this->kolomen_dostavka + $this->krylatskoe_dostavka + $this->sviblovo_dostavka + $this->strogino_dostavka + $this->kantim_dostavka + $this->domodedovo_dostavka + $this->dubrovka_dostavka + $this->pionerka_dostavka + $this->luber_dostavka + $this->bibirevo_dostavka + $this->marino_dostavka + $this->perovo_dostavka + $this->chertanovo_dostavka + $this->butovo_dostavka + $this->akadem_dostavka + $this->ordjen_dostavka + $this->dinamo_dostavka + $this->izmailovo_dostavka + $this->yasenevo_dostavka + $this->vodnik_dostavka;

    echo $total_orders_dostavka;
  }

	//Функция подсчета отигово колличества заказов по всем филиалам
	function GetTotalOrders(){
		echo $this->beskutorder + $this->mitinoorder + $this->kolomenorder + $this->krylatskoeorder + $this->sviblovoorder + $this->stroginoorder + $this->kantimorder + $this->domodedovoorder + $this->dubrovkaorder + $this->pionerkaorder + $this->luberorder + $this->bibirevoorder + $this->marinoorder + $this->perovoorder + $this->chertanovoorder + $this->butovoorder + $this->akademorder + $this->ordjenorder + $this->dinamoorder + $this->izmailovoorder + $this->yasenevoorder + $this->vodnikorder;
	}

}

?>