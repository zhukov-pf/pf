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
	//Блок нужен для метода (функции) GetTotalSum()
	private $beskuduser;
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
		$connect_db = pg_connect("host=172.18.1.4 port=5432 dbname=pizza_site6 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
		}
		else{
			if(pg_connection_busy($connect_db) === FALSE) {
	 			
	 			$today = date('Y-m-d');

	   		 	$query = pg_query("SELECT user_name FROM users WHERE rabota=true AND date_end_zakaz BETWEEN '$today 00:00:00' AND '$today 23:59:59'");
	 
	   		 	$total_user = pg_num_rows($query);

	   		 	$this->beskuduser = $total_user;

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
		$connect_db = pg_connect("host=172.18.2.254 port=5432 dbname=pizza_site2 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.3.254 port=5432 dbname=pizza_site3 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.4.254 port=5432 dbname=pizza_site4 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.6.254 port=5432 dbname=pizza_site11 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.7.254 port=5432 dbname=pizza_site7 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.8.254 port=5432 dbname=pizza_site8 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.9.254 port=5432 dbname=pizza_site9 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.10.254 port=5432 dbname=pizza_site10 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.11.254 port=5432 dbname=pizza_site1 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.12.3 port=5432 dbname=pizza_site12 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.13.254 port=5432 dbname=pizza_site13 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.14.254 port=5432 dbname=pizza_site14 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.15.254 port=5432 dbname=pizza_site15 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.16.254 port=5432 dbname=pizza_site16 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.17.254 port=5432 dbname=pizza_site17 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.18.4 port=5432 dbname=pizza_site18 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.19.254 port=5432 dbname=pizza_site19 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.20.254 port=5432 dbname=pizza_site20 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.21.254 port=5432 dbname=pizza_site21 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.22.254 port=5432 dbname=pizza_site22 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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
		$connect_db = pg_connect("host=172.18.24.254 port=5432 dbname=pizza_site24 user=pizzauser password=pizzauser");

		if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
			echo "Сервер не доступен!";
			pg_close($connect_db);
			
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

	//Проверка нормы водителей на филиале Бескудниково
	function NormaUserBeskud(){

		$weekday = date('w');
		$time = date('H:m:s');
		$beskud = $this->beskuduser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaBeskudAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaBeskudPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaBeskudAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $beskud){
				echo "<style>.user-norma-green-beskud{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-beskud{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaBeskudPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $beskud){
				echo "<style>.user-norma-green-beskud{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-beskud{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Митино
	function NormaUserMitino(){

		$weekday = date('w');
		$time = date('H:m:s');
		$mitino = $this->mitinouser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaMitinoAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaMitinoPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaMitinoAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $mitino){
				echo "<style>.user-norma-green-mitino{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-mitino{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaMitinoPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $mitino){
				echo "<style>.user-norma-green-mitino{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-mitino{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Коломенское
	function NormaUserKolomen(){

		$weekday = date('w');
		$time = date('H:m:s');
		$kolomen = $this->kolomenuser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaKolomenAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaKolomenPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaKolomenAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $kolomen){
				echo "<style>.user-norma-green-kolomen{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-kolomen{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaKolomenPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $kolomen){
				echo "<style>.user-norma-green-kolomen{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-kolomen{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Крылатское
	function NormaUserKrylatskoe(){

		$weekday = date('w');
		$time = date('H:m:s');
		$krylatskoe = $this->krylatskoeuser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaKrylatskoeAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaKrylatskoePM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaBeskudAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $krylatskoe){
				echo "<style>.user-norma-green-krylatskoe{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-krylatskoe{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaBeskudPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $krylatskoe){
				echo "<style>.user-norma-green-krylatskoe{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-krylatskoe{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Свиблово
	function NormaUserSviblovo(){

		$weekday = date('w');
		$time = date('H:m:s');
		$sviblovo = $this->sviblovouser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaSviblovoAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaSviblovoPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaSviblovoAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $sviblovo){
				echo "<style>.user-norma-green-sviblovo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-sviblovo{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaSviblovoPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $sviblovo){
				echo "<style>.user-norma-green-sviblovo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-sviblovo{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Строгино
	function NormaUserStrogino(){

		$weekday = date('w');
		$time = date('H:m:s');
		$strogino = $this->stroginouser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaStroginoAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaStroginoPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaStroginoAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $strogino){
				echo "<style>.user-norma-green-strogino{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-strogino{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaStroginoPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $strogino){
				echo "<style>.user-norma-green-strogino{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-strogino{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Кантемировская
	function NormaUserKantim(){

		$weekday = date('w');
		$time = date('H:m:s');
		$kantim = $this->kantimuser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaKantimAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaKantimPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaKantimAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $kantim){
				echo "<style>.user-norma-green-kantim{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-kantim{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaKantimPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $kantim){
				echo "<style>.user-norma-green-kantim{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-kantim{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Домодедовская
	function NormaUserDomodedovo(){

		$weekday = date('w');
		$time = date('H:m:s');
		$domodedovo = $this->domodedovouser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaDomodedovoAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaDomodedovoPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaDomodedovoAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $domodedovo){
				echo "<style>.user-norma-green-domodedovo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-domodedovo{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaDomodedovoPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $domodedovo){
				echo "<style>.user-norma-green-domodedovo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-domodedovo{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Дубровка
	function NormaUserDubrovka(){

		$weekday = date('w');
		$time = date('H:m:s');
		$dubrovka = $this->dubrovkauser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaDubrovkaAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaDubrovkaPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaDubrovkaAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $dubrovka){
				echo "<style>.user-norma-green-dubrovka{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-dubrovka{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaDubrovkaPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $dubrovka){
				echo "<style>.user-norma-green-dubrovka{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-dubrovka{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Пионерская
	function NormaUserPionerka(){

		$weekday = date('w');
		$time = date('H:m:s');
		$pionerka = $this->pionerkauser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaPionerkaAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaPionerkaPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaPionerkaAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $pionerka){
				echo "<style>.user-norma-green-pionerka{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-pionerka{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaPionerkaPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $pionerka){
				echo "<style>.user-norma-green-pionerka{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-pionerka{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Люберцы
	function NormaUserLuber(){

		$weekday = date('w');
		$time = date('H:m:s');
		$luber = $this->luberuser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaLuberAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaLuberPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaLuberAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $luber){
				echo "<style>.user-norma-green-luber{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-luber{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaLuberPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $luber){
				echo "<style>.user-norma-green-luber{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-luber{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Бибирево
	function NormaUserBibirevo(){

		$weekday = date('w');
		$time = date('H:m:s');
		$bibirevo = $this->bibirevouser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaBibirevoAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaBibirevoPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaBibirevoAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $bibirevo){
				echo "<style>.user-norma-green-bibirevo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-bibirevo{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaBibirevoPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $bibirevo){
				echo "<style>.user-norma-green-bibirevo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-bibirevo{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Марьино
	function NormaUserMarino(){

		$weekday = date('w');
		$time = date('H:m:s');
		$marino = $this->marinouser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaMarinoAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaMarinoPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaMarinoAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $marino){
				echo "<style>.user-norma-green-marino{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-marino{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaMarinoPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $marino){
				echo "<style>.user-norma-green-marino{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-marino{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Перово
	function NormaUserPerovo(){

		$weekday = date('w');
		$time = date('H:m:s');
		$perovo = $this->perovouser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaPerovoAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaPerovoPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaPerovoAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $perovo){
				echo "<style>.user-norma-green-perovo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-perovo{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaPerovoPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $perovo){
				echo "<style>.user-norma-green-perovo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-perovo{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Чертаново
	function NormaUserChertanovo(){

		$weekday = date('w');
		$time = date('H:m:s');
		$chertanovo = $this->chertanovouser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaChertanovoAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaChertanovoPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaChertanovoAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $chertanovo){
				echo "<style>.user-norma-green-chertanovo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-chertanovo{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaChertanovoPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $chertanovo){
				echo "<style>.user-norma-green-chertanovo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-chertanovo{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Бутово
	function NormaUserButovo(){

		$weekday = date('w');
		$time = date('H:m:s');
		$butovo = $this->butovouser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaButovoAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaButovoPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaButovoAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $butovo){
				echo "<style>.user-norma-green-butovo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-butovo{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaButovoPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $butovo){
				echo "<style>.user-norma-green-butovo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-butovo{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Академическая
	function NormaUserAkadem(){

		$weekday = date('w');
		$time = date('H:m:s');
		$akadem = $this->akademuser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaAkademAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaAkademPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaAkademAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $akadem){
				echo "<style>.user-norma-green-akadem{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-akadem{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaAkademPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $akadem){
				echo "<style>.user-norma-green-akadem{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-akadem{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Ордженикидзе
	function NormaUserOrdjen(){

		$weekday = date('w');
		$time = date('H:m:s');
		$ordjen = $this->ordjenuser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaOrdjenAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaOrdjenPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaOrdjenAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $ordjen){
				echo "<style>.user-norma-green-ordjen{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-ordjen{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaOrdjenPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $ordjen){
				echo "<style>.user-norma-green-ordjen{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-ordjen{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Динамо
	function NormaUserDinamo(){

		$weekday = date('w');
		$time = date('H:m:s');
		$dinamo = $this->dinamouser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaDinamoAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaDinamoPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaDinamoAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $dinamo){
				echo "<style>.user-norma-green-dinamo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-dinamo{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaDinamoPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $dinamo){
				echo "<style>.user-norma-green-dinamo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-dinamo{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Измайлово
	function NormaUserIzmailovo(){

		$weekday = date('w');
		$time = date('H:m:s');
		$izmailovo = $this->izmailovouser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaIzmailovoAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaIzmailovoPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaIzmailovoAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $izmailovo){
				echo "<style>.user-norma-green-izmailovo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-izmailovo{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaIzmailovoPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $izmailovo){
				echo "<style>.user-norma-green-izmailovo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-izmailovo{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Ясенево
	function NormaUserYasenevo(){

		$weekday = date('w');
		$time = date('H:m:s');
		$yasenevo = $this->yasenevouser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaYasenevoAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaYasenevoPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaYasenevoAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $yasenevo){
				echo "<style>.user-norma-green-yasenevo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-yasenevo{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaYasenevoPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $yasenevo){
				echo "<style>.user-norma-green-yasenevo{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-yasenevo{background:red;}</style>";
				echo $weekday;
			}
		}
	}

	//Проверка нормы водителей на филиале Водный Стадион
	function NormaUserVodnik(){

		$weekday = date('w');
		$time = date('H:m:s');
		$vodnik = $this->vodnikuser;

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день до обеда
		function NormaVodnikAM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает Субботу.
			$data = [
				"0" => "1",
				"1" => "1",
				"2" => "2",
				"3" => "2",
				"4" => "3",
				"5" => "4",
				"6" => "3",
			];

			return strtr($weekday, $data);

		}

		//Метод преобразования (выборки) номера дня недели в количество водителей в этот день после обеда
		function NormaVodnikPM($weekday){

			//Массив с которым будет идти сверка.
			//Индекс 0 обозначает Воскресенье, а индекс 6 обозначает субботу.
			$data = [
				"0" => "3",
				"1" => "3",
				"2" => "4",
				"3" => "3",
				"4" => "0",
				"5" => "2",
				"6" => "1",
			];

			return strtr($weekday, $data);

		}

		//Условия выборки массива данных нормыв водителей для разного времени
		if($time <= "12:00:00") {
			$weekday = NormaVodnikAM($weekday);

			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $vodnik){
				echo "<style>.user-norma-green-vodnik{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-vodnik{background:red;}</style>";
				echo $weekday;
			}
		}
		else {
			$weekday = NormaVodnikPM($weekday);
			//Сверка нормы водителей и текущего числа водителей зарегистрированых в Pizzacom
			if($weekday == $vodnik){
				echo "<style>.user-norma-green-vodnik{background:green;}</style>";
				echo $weekday;
			}
			else {
				echo "<style>.user-norma-red-vodnik{background:red;}</style>";
				echo $weekday;
			}
		}
	}


	//Функция подсчета колличества водителей по всем филиалам
	function GetTotalUsers(){
		echo $this->beskuduser + $this->mitinouser + $this->kolomenuser + $this->krylatskoeuser + $this->sviblovouser + $this->stroginouser + $this->kantimuser + $this->domodedovouser + $this->dubrovkauser + $this->pionerkauser + $this->luberuser + $this->bibirevouser + $this->marinouser + $this->perovouser + $this->chertanovouser + $this->butovouser + $this->akademuser + $this->ordjenuser + $this->dinamouser + $this->izmailovouser + $this->yasenevouser + $this->vodnikuser;
	}

}