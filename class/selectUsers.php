<?php

/*
*	Класс SelectUsers нужен для выборки и подсчета колличества водителей на каждом филиале
*	
*	Описание работы функции
*	При вызове функции происходит соединение с БД по туннелю. Поссле идет проверка свободно ли соединение с БД.
*	После происходит выборка из таблицы users по полю user_name с указанием интервала "за сегодня" и статусом "на работе".
*
*/

class SelectUsers{

	//Блок свойств класса SelectCash
	//Блок нужен для метода (функции) GetTotalUsers()
	private $beskutuser;
	private $mitinouser;
	private $kolomenuser;
	private $krylatskoeuser;
	private $sviblovouser;
	private $stroginouser;
	private $kantimuser;
	private $domodedovouser;
	private $dubrovkauser;
	private $pionerkauser;
	private $luberuser;
	private $bibirevouser;
	private $marinouser;
	private $perovouser;
	private $chertanovouser;
	private $butovouser;
	private $akademuser;
	private $ordjenuser;
	private $dinamouser;
	private $izmailovouser;
	private $yasenevouser;
	private $vodnikuser;

	//Получение текущего колличества водителей на филиале Бескудниково
	function GetUsersBeskud(){
		$connect_db = pg_connect("host=172.18.1.4 port=5432 dbname=pizza_site6 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->beskutuser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-beskud{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Митино
	function GetUsersMitino(){
		$connect_db = pg_connect("host=172.18.2.254 port=5432 dbname=pizza_site2 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->mitinouser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-mitino{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Коломенское
	function GetUsersKolomen(){
		$connect_db = pg_connect("host=172.18.3.254 port=5432 dbname=pizza_site3 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->kolomenuser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-kolomen{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Крылатское
	function GetUsersKrylatskoe(){
		$connect_db = pg_connect("host=172.18.4.254 port=5432 dbname=pizza_site4 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->кrylatskoeuser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-kolomen{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Свиблово
	function GetUsersSviblovo(){
		$connect_db = pg_connect("host=172.18.6.254 port=5432 dbname=pizza_site11 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->sviblovouser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-sviblovo{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Строгино
	function GetUsersStrogino(){
		$connect_db = pg_connect("host=172.18.7.254 port=5432 dbname=pizza_site7 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->stroginouser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-strogino{background:red;}</style>';
	   		 		$total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Кантемировская
	function GetUsersKantim(){
		$connect_db = pg_connect("host=172.18.8.254 port=5432 dbname=pizza_site8 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->kantimuser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-kantim{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Домодедовская
	function GetUsersDomodedovo(){
		$connect_db = pg_connect("host=172.18.9.254 port=5432 dbname=pizza_site9 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->domodedovouser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-domodedovo{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Дубровка
	function GetUsersDubrovka(){
		$connect_db = pg_connect("host=172.18.10.254 port=5432 dbname=pizza_site10 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->dubrovkauser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-dubrovka{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Пионерская
	function GetUsersPionerka(){
		$connect_db = pg_connect("host=172.18.11.254 port=5432 dbname=pizza_site1 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->pionerkauser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-pionerka{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Люберцы
	function GetUsersLuber(){
		$connect_db = pg_connect("host=172.18.12.3 port=5432 dbname=pizza_site12 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->luberuser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-luber{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Бибирево
	function GetUsersBibirevo(){
		$connect_db = pg_connect("host=172.18.13.254 port=5432 dbname=pizza_site13 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->bibirevouser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-bibirevo{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Марьино
	function GetUsersMarino(){
		$connect_db = pg_connect("host=172.18.14.254 port=5432 dbname=pizza_site14 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->marinouser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-marino{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Перово
	function GetUsersPerovo(){
		$connect_db = pg_connect("host=172.18.15.254 port=5432 dbname=pizza_site15 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->perovouser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-perovo{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Чертаново
	function GetUsersChertanovo(){
		$connect_db = pg_connect("host=172.18.16.254 port=5432 dbname=pizza_site16 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->chertanovouser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-chertanovo{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Бутово
	function GetUsersButovo(){
		$connect_db = pg_connect("host=172.18.17.254 port=5432 dbname=pizza_site17 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->butovouser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-butovo{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Академическая
	function GetUsersAkadem(){
		$connect_db = pg_connect("host=172.18.18.4 port=5432 dbname=pizza_site18 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->akademuser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-akadem{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Ордженикидзе
	function GetUsersOrdjen(){
		$connect_db = pg_connect("host=172.18.19.254 port=5432 dbname=pizza_site19 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->ordjenuser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-ordjen{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Динамо
	function GetUsersDinamo(){
		$connect_db = pg_connect("host=172.18.20.254 port=5432 dbname=pizza_site20 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->dinamouser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-dinamo{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Измайлово
	function GetUsersIzmailovo(){
		$connect_db = pg_connect("host=172.18.21.254 port=5432 dbname=pizza_site21 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->izmailovouser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-izmailovo{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Ясенево
	function GetUsersYasenevo(){
		$connect_db = pg_connect("host=172.18.22.254 port=5432 dbname=pizza_site22 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->yasenevouser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-yasenevo{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Получение текущего колличества водителей на филиале Водный Стадион
	function GetUsersVodnik(){
		$connect_db = pg_connect("host=172.18.24.254 port=5432 dbname=pizza_site24 user=pizzauser password=pizzauser connect_timeout=5");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->vodnikuser = $total_user;

	   		 	if($total_user == "1"){
	   		 		echo '<style>.user-red-vodnik{background:red;}</style>';
	   		 		echo $total_user;	
	   		 	}
	   		 	else{
	   		 		echo $total_user;
	   		 	}

	   		 	$total_user = NULL;

	   		 	pg_close($connect_db);
			} 
			else {
	    		echo "Соединение с базой данных занято! Повторите попытку позже";
	   			pg_close($connect_db);
	   			
			}
		}
	}

	//Функция подсчета колличества водителей по всем филиалам
	function GetTotalUsers(){
		echo $this->beskutuser + $this->mitinouser + $this->kolomenuser + $this->кrylatskoeuser + $this->sviblovouser + $this->stroginouser + $this->kantimuser + $this->domodedovouser + $this->dubrovkauser + $this->pionerkauser + $this->luberuser + $this->bibirevouser + $this->marinouser + $this->perovouser + $this->chertanovouser + $this->butovouser + $this->akademuser + $this->ordjenuser + $this->dinamouser + $this->izmailovouser + $this->yasenevouser + $this->vodnikuser;
	}

}

?>