<?php

/**
* 
*/
class GetStatus  {

	//Статус сервера Бескудниково
	function StatusBeskud() {
		$connect_db = pg_connect("host=172.18.1.4 port=5432 dbname=pizza_site6 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Митино
	function StatusMitino() {
		$connect_db = pg_connect("host=172.18.2.254 port=5432 dbname=pizza_site2 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Коломенское
	function StatusKolomen() {
		$connect_db = pg_connect("host=172.18.3.254 port=5432 dbname=pizza_site3 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Крылатское
	function StatusKrylatskoe() {
		$connect_db = pg_connect("host=172.18.4.254 port=5432 dbname=pizza_site4 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Свиблово
	function StatusSviblovo() {
		$connect_db = pg_connect("host=172.18.6.254 port=5432 dbname=pizza_site11 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Строгино
	function StatusStrogino() {
		$connect_db = pg_connect("host=172.18.7.254 port=5432 dbname=pizza_site7 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Кантемировская
	function StatusKantim() {
		$connect_db = pg_connect("host=172.18.8.254 port=5432 dbname=pizza_site8 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Домодедовская
	function StatusDomodedovo() {
		$connect_db = pg_connect("host=172.18.9.254 port=5432 dbname=pizza_site9 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Дубровка
	function StatusDubrovka() {
		$connect_db = pg_connect("host=172.18.10.254 port=5432 dbname=pizza_site10 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Пионерская
	function StatusPionerka() {
		$connect_db = pg_connect("host=172.18.11.254 port=5432 dbname=pizza_site1 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Люберцы
	function StatusLuber() {
		$connect_db = pg_connect("host=172.18.12.3 port=5432 dbname=pizza_site12 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Бибирево
	function StatusBibirevo() {
		$connect_db = pg_connect("host=172.18.13.254 port=5432 dbname=pizza_site13 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Марьино
	function StatusMarino() {
		$connect_db = pg_connect("host=172.18.14.254 port=5432 dbname=pizza_site14 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Перово
	function StatusPerovo() {
		$connect_db = pg_connect("host=172.18.15.254 port=5432 dbname=pizza_site15 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Чертаново
	function StatusChertanovo() {
		$connect_db = pg_connect("host=172.18.16.254 port=5432 dbname=pizza_site16 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Бутово
	function StatusButovo() {
		$connect_db = pg_connect("host=172.18.17.254 port=5432 dbname=pizza_site17 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Академическая
	function StatusAkadem() {
		$connect_db = pg_connect("host=172.18.18.4 port=5432 dbname=pizza_site18 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Ордженикидзе
	function StatusOrdjen() {
		$connect_db = pg_connect("host=172.18.19.254 port=5432 dbname=pizza_site19 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Динамо
	function StatusDinamo() {
		$connect_db = pg_connect("host=172.18.20.254 port=5432 dbname=pizza_site20 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Измайлово
	function StatusIzmailovo() {
		$connect_db = pg_connect("host=172.18.21.254 port=5432 dbname=pizza_site21 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Ясенево
	function StatusYasenevo() {
		$connect_db = pg_connect("host=172.18.22.254 port=5432 dbname=pizza_site22 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

	//Статус сервера Водный Стадион
	function StatusVodnik() {
		$connect_db = pg_connect("host=172.18.24.254 port=5432 dbname=pizza_site24 user=pizzauser password=pizzauser");

	    if(pg_connection_status($connect_db) !== PGSQL_CONNECTION_OK){
	      echo "class=\"danger\"";
	      pg_close($connect_db);
	  	}
	}

}

?>