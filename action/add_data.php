<?php
include("../config/confg.php");
extract($_POST);
extract($_GET);

 $sql = "SELECT COLUMN_NAME,DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='db_admincreator' and TABLE_NAME='$tabel_name'";
 $qry = $mysqli->query($sql);
 $n=0;
 while($datar = $qry->fetch_array()){
 	$name[$n]=$datar['COLUMN_NAME'];
 	$n++;
 }

 $sql="INSERT INTO `$tabel_name` (";

 for ($i=0; $i < $jumlah; $i++) {
 	$koma="";
 	if($i!==0){$koma=",";}
 	$sql=$sql."$koma`$name[$i]`";
 }

$sql=$sql.") VALUES ("; 

 for ($i=0; $i < $jumlah; $i++) {
 	$koma="";
	if($i!==0){$koma=",";}
 	$sql=$sql."$koma'$form_data[$i]'";
 }

 $sql=$sql.");"; 

 	echo "$sql";
 $qry = $mysqli->query($sql);
 if ($qry){
 	echo "<br>Berhasil";
 	header("location: ../?menu=$idm");
 }else{
 	echo "<br>Gagal";
 	header("location: ../?menu=$idm&alert=Data gagal ditambahkan!");
 }

?>