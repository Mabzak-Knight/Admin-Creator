<?php
//koneksi menggunakan mysqli, jujur aja sya masih blum hafal code'y
define("HOST", "localhost"); // Host database
define("USER", "admin"); // Usernama database
define("PASSWORD", "akudankamu"); // Password database
define("DATABASE", "db_admincreator"); // Nama database
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
if($mysqli->connect_error){
	trigger_error('<font color=red>Koneksi ke database gagal: </font>' . $mysqli->connect_error, E_USER_ERROR);	
}
?>