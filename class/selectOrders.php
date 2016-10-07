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

	//Получение текущего числа заказов на филиале Бескудниково
	function GetOrdersBeskud(){
		$connect_db = pg_connect("host=172.18.1.4 port=5432 dbname=pizza_site6 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
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

	//Функция подсчета отигово колличества заказов по всем филиалам
	function GetTotalOrders(){
		echo $this->beskutorder + $this->mitinoorder + $this->kolomenorder + $this->krylatskoeorder + $this->sviblovoorder + $this->stroginoorder + $this->kantimorder + $this->domodedovoorder + $this->dubrovkaorder + $this->pionerkaorder + $this->luberorder + $this->bibirevoorder + $this->marinoorder + $this->perovoorder + $this->chertanovoorder + $this->butovoorder + $this->akademorder + $this->ordjenorder + $this->dinamoorder + $this->izmailovoorder + $this->yasenevoorder + $this->vodnikorder;
	}

}

?>