<?php
session_start();
$baglanti=mysql_connect("localhost","root","");
if($baglanti==false) {
	die("Bağlantı Kurulamadı ");
}

$vt_sec=mysql_select_db("beltek");
if($vt_sec==false) {
	die("Veritabanı seçilemedi");
}

mysql_set_charset('utf8', $baglanti);


?>