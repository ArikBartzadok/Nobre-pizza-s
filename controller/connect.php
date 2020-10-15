<?php 
$serv = "localhost";
$user = "root";
$pass = "";
$db = "db_pizzaria_nobre";

$con = mysqli_connect($serv, $user, $pass, $db);
if(!$con) {
	die("Falha na conexão com o banco de dados." . mysqli_connect_error());
}
?>