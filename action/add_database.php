<?php
include("../config/confg.php");
extract($_POST);

 echo "$sqlcode";
 $sql=str_replace("/n", "", $sqlcode);
 $qry = $mysqli->query($sql);
 if ($qry){
 echo "Berhasil";
 header("location: ../?menu=navigation");
 }else{
 echo "Gagal";
 }

?>