<?php

$conn=new mysqli("localhost","root","","inf756_compu_c")or die("Conexión Fallida ".$conn->connect_error);

if(!isset($_SESSION)){
	session_start();
}
?>
