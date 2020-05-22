<?php
	include("../config/confg.php");
	@session_start();
	extract($_POST);
	if (isset($submit)){
	 $name_tabel=str_replace(" ", "_", $name_tabel);
	 $sql = "INSERT INTO `control_nav`(`id_nav`, `name_nav`, `icon`, `name_tabel`, `count_tabel`, `date`) VALUES ('','$name_nav','$icon','$name_tabel','$count_tabel',now())";
	 $qry = $mysqli->query($sql);
	 echo "$sql";
	 header("location: ../?menu=add_table&tbl=$name_tabel");
	}
?>