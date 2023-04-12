<?php
	function conexion(){
	$host = "host=containers-us-west-20.railway.app";
	$port = "port=6240";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=a73HBOqvuIhlsVKssZJp";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>