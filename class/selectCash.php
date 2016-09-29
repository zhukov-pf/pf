<?php

/*
*	Класс SelectCash нужен для выборки и подсчета выручки на каждом филиале
*	
*	Описание работы функции
*	При вызове функции происходит соединение с БД по туннелю. Поссле идет проверка свободно ли соединение с БД.
*	После происходит выборка из таблицы orders по полю price с указанием интервала "за сегодня".
*
*/

class SelectCash{

  //Блок свойств класса SelectCash
  //Блок нужен для метода (функции) GetTotalSum()
  private $beskudcash;
  private $mitinocash;
  private $kolomencash;
  private $krylatskoecash;
  private $sviblovocash;
  private $stroginocash;
  private $kantimcash;
  private $domodedovocash;
  private $dubrovkacash;
  private $pionerkacash;
  private $lubercash;
  private $bibirevocash;
  private $marinocash;
  private $perovocash;
  private $chertanovocash;
  private $butovocash;
  private $akademcash;
  private $ordjencash;
  private $dinamocash;
  private $izmailovocash;
  private $yasenevocash;
  private $vodnikcash;

/*
*
* Получение всей выручки
*
*/

	//Получение текущей выручки на филиале Бескудниково
	function GetTotalCashBeskud(){
		$connect_db = pg_connect("host=172.18.1.4 port=5432 dbname=pizza_site6 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->beskudcash = '0';
      pg_close($connect_db);
      
    }
    else{
        if(pg_connection_busy($connect_db) === FALSE) {
        
          $today = date('Y-m-d');

          $query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
          
          $total_cash = pg_fetch_object($query)->total;

          $this->beskudcash = $this->beskud_dostavka = $total_cash;
           

          $query = pg_query("SELECT SUM(price) AS zal FROM orders WHERE (cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59') AND (customer_phone='6')");
          
          pg_fetch_object($query)->zal;

          if($total_cash === NULL){
            echo "За сегодня выручки нет";
          }
          else{
            echo number_format($total_cash, 0, '', ' ');
          }

          $total_cash = NULL;

          pg_close($connect_db);
      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
	}

	//Получение текущей выручки на филиале Митино
	function GetTotalCashMitino(){
		$connect_db = pg_connect("host=172.18.2.254 port=5432 dbname=pizza_site2 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->mitinocash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  			  $today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
     		 	$total_cash = pg_fetch_object($query)->total;

          $this->mitinocash = $total_cash;

     		 	if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
     		 
  		}
    }
	}

	//Получение текущей выручки на филиале Коломенское
	function GetTotalCashKolomen(){
		$connect_db = pg_connect("host=172.18.3.254 port=5432 dbname=pizza_site3 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->kolomencash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  			  $today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->kolomencash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

  //Получение текущей выручки на филиале Крылатское
  function GetTotalCashKrylatskoe(){
    $connect_db = pg_connect("host=172.18.4.254 port=5432 dbname=pizza_site4 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->krylatskoecash = '0';
      pg_close($connect_db);
      
    }
    else{
      if(pg_connection_busy($connect_db) === FALSE) {

          $today = date('Y-m-d');

          $query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
          $total_cash = pg_fetch_object($query)->total;

          $this->krylatskoecash = $total_cash;

          if($total_cash === NULL){
            echo "За сегодня выручки нет";
          }
          else{
            echo number_format($total_cash, 0, '', ' ');
          }

          $total_cash = NULL;

          pg_close($connect_db);

      } 
      else {
          echo "Соединение с базой данных занято! Повторите попытку позже";
          pg_close($connect_db);
          
      }
    }
  }

	//Получение текущей выручки на филиале Свиблово
	function GetTotalCashSviblovo(){
		$connect_db = pg_connect("host=172.18.6.254 port=5432 dbname=pizza_site11 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->sviblovocash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

  		    $query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
  		    $total_cash = pg_fetch_object($query)->total;

          $this->sviblovocash = $total_cash;

  		    if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
     		 	echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Строгино
	function GetTotalCashStrogino(){
		$connect_db = pg_connect("host=172.18.7.254 port=5432 dbname=pizza_site7 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->stroginocash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->stroginocash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Кантемировская
	function GetTotalCashKantim(){
		$connect_db = pg_connect("host=172.18.8.254 port=5432 dbname=pizza_site8 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->kantimcash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->kantimcash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Домодедовская
	function GetTotalCashDomodedovo(){
		$connect_db = pg_connect("host=172.18.9.254 port=5432 dbname=pizza_site9 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->domodedovocash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->domodedovocash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Дубровка
	function GetTotalCashDubrovka(){
		$connect_db = pg_connect("host=172.18.10.254 port=5432 dbname=pizza_site10 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->dubrovkacash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->dubrovkacash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
     		 	pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Пионерская
	function GetTotalCashPionerka(){
		$connect_db = pg_connect("host=172.18.11.254 port=5432 dbname=pizza_site1 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->pionerkacash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->pionerkacash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Люберцы
	function GetTotalCashLuber(){
		$connect_db = pg_connect("host=172.18.12.3 port=5432 dbname=pizza_site12 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->lubercash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->lubercash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Бибирево
	function GetTotalCashBibirevo(){
		$connect_db = pg_connect("host=172.18.13.254 port=5432 dbname=pizza_site13 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->bibirevocash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->bibirevocash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Марьино
	function GetTotalCashMarino(){
		$connect_db = pg_connect("host=172.18.14.254 port=5432 dbname=pizza_site14 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->marinocash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->marinocash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Перово
	function GetTotalCashPerovo(){
		$connect_db = pg_connect("host=172.18.15.254 port=5432 dbname=pizza_site15 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->perovocash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

  		    $query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
  		    $total_cash = pg_fetch_object($query)->total;

          $this->perovocash = $total_cash;

  		    if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

  		    pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Чертаново
	function GetTotalCashChertanovo(){
		$connect_db = pg_connect("host=172.18.16.254 port=5432 dbname=pizza_site16 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->chertanovocash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->chertanovocash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

      		pg_close($connect_db);

  		} 
  		else {
     		 	echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Бутово
	function GetTotalCashButovo(){
		$connect_db = pg_connect("host=172.18.17.254 port=5432 dbname=pizza_site17 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->butovocash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->butovocash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Академическая
	function GetTotalCashAkadem(){
		$connect_db = pg_connect("host=172.18.18.4 port=5432 dbname=pizza_site18 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->akademcash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->akademcash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Ордженикидзе
	function GetTotalCashOrdjen(){
		$connect_db = pg_connect("host=172.18.19.254 port=5432 dbname=pizza_site19 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->ordjencash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->ordjencash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Динамо
	function GetTotalCashDinamo(){
		$connect_db = pg_connect("host=172.18.20.254 port=5432 dbname=pizza_site20 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->dinamocash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->dinamocash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Измайлово
	function GetTotalCashIzmailovo(){
		$connect_db = pg_connect("host=172.18.21.254 port=5432 dbname=pizza_site21 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->izmailovocash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->izmailovocash = $total_cash;

      		if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

     		 	pg_close($connect_db);

  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Ясенево
	function GetTotalCashYasenevo(){
		$connect_db = pg_connect("host=172.18.22.254 port=5432 dbname=pizza_site22 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->yasenevocash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->yasenevocash = $total_cash;

     		 	if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

      		pg_close($connect_db);
  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

	//Получение текущей выручки на филиале Водный Стадион
	function GetTotalCashVodnik(){
		$connect_db = pg_connect("host=172.18.24.254 port=5432 dbname=pizza_site24 user=pizzauser password=pizzauser");

    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
      echo "Сервер не доступен!";
      $this->vodnikcash = '0';
      pg_close($connect_db);
      
    }
    else{
  		if(pg_connection_busy($connect_db) === FALSE) {

  		  	$today = date('Y-m-d');

      		$query = pg_query("SELECT SUM(price) AS total FROM orders WHERE cash_time BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
   
      		$total_cash = pg_fetch_object($query)->total;

          $this->vodnikcash = $total_cash;

     		 	if($total_cash === NULL){
     		 		echo "За сегодня выручки нет";
     		 	}
     		 	else{
     		 		echo number_format($total_cash, 0, '', ' ');
     		 	}

          $total_cash = NULL;

      		pg_close($connect_db);
  		} 
  		else {
      		echo "Соединение с базой данных занято! Повторите попытку позже";
      		pg_close($connect_db);
      		
  		}
    }
	}

  //Функция подсчета итоговой суммы по всем филиалам
  function GetTotalSum(){
    $total_cash_sum =  $this->beskudcash + $this->mitinocash + $this->kolomencash + $this->krylatskoecash + $this->sviblovocash + $this->stroginocash + $this->kantimcash + $this->domodedovocash + $this->dubrovkacash + $this->pionerkacash + $this->lubercash + $this->bibirevocash + $this->marinocash + $this->perovocash + $this->chertanovocash + $this->butovocash + $this->akademcash + $this->ordjencash + $this->dinamocash + $this->izmailovocash + $this->yasenevocash + $this->vodnikcash;

    echo number_format($total_cash_sum, 0, '', ' '); 
  }

}

?>