<?php 
function mesaj($hata=0,$onay=0){
	if(empty($onay)==false) {

		echo "<div class=\"onay\">{$onay}</div>";/*class lardaki hatayi sonra duzelt*/
	}else if(empty($hata)==false) {
		echo "<div class=\"hata\">{$hata}</div>";
	}
}


function yonlendir($url=""){/*yonlendirme icin kullandik.*/
	header("Location: {$url}");
}

function send_pass($kadi){
	$sql="SELECT * FROM user 
		      WHERE kadi='{$kadi}' LIMIT 1";
	$sorgu = mysql_query($sql);/*sql satirini sorgulattik*/
	/*Buraya mail yolllanmasi icin yonergeleri yaz...*/
}

function yetki_kontrol () { /* hersayfanin basinda kontrol edilmeli.*/
	if(isset($_SESSION['k_bilgi'])==false) {
    yonlendir("login.php");
	}
}

function login($kadi="",$sifre=""){/*login islemi fonksiyn ile kontrol ediyoruz.*/
		$sql="SELECT * FROM user 
		      WHERE kadi='{$kadi}' AND sifre='{$sifre}' LIMIT 1";
		$sorgu = mysql_query($sql);/*sql satirini sorgulattik*/
		$sayisi=mysql_num_rows($sorgu); /*eger deger donerse var oldugunu anlariz ve sayisi gelir.*/
		$k_bilgi=mysql_fetch_assoc($sorgu); /*ilk satiri bize getirmesini soyledik.*/
		//echo $k_bilgi['adi'];
		//echo $sayisi;

		if($sayisi==1) {
			if($k_bilgi['aktif']==1) { /*veri tabaninda k_bilgisi tablosundan aktif kismini kontrol ediyoruz.*/
				$_SESSION['k_bilgi']=$k_bilgi;
				echo $_SESSION['k_bilgi']['on'];
				$_SESSION['k_bilgi']['on']=1;
				yonlendir("index.php");
			}else {
				mesaj($hata="Kullanıcı pasif haldedir");
			}
			
		}else {
			mesaj($hata="Kullanıcı adı veya parola yanlış!");
		}
}

function register($kadi="",$sifre="",$isim="",$soyisim="",$dtarih=""){
	$sql="SELECT * FROM user WHERE kadi='{$kadi}' LIMIT 1";

	$sonuc=mysql_query($sql);
	$sayisi=mysql_num_rows($sonuc);
		if($sayisi==0) {
			$sql="INSERT INTO user(kadi,sifre,isim,soyisim,dtarih)  VALUES('$kadi','$sifre','$isim','$soyisim','$dtarih')";
			$sonuc=mysql_query($sql);
			$sayisi=mysql_affected_rows();

			if($sayisi==1) {
				mesaj($onay="Kayıt Başarılı");
			}else {
				mesaj($hata="Sistemde bir problem yaşandı. Yöneticiyle görüşünüz");
			}

		}else {
			mesaj($hata="Bu yayın sisteme daha önceden eklenmiştir.");
		}
}

function forget($kadi,$isim,$soyisim,$forget1,$forget2){
		$sql="SELECT * FROM user 
		      WHERE kadi='{$kadi}' AND (isim='{$isim}' AND soyisim='{$soyisim}')  LIMIT 1";

		$sorgu = mysql_query($sql);/*sql satirini sorgulattik*/
		$sayisi=mysql_num_rows($sorgu); /*eger deger donerse var oldugunu anlariz ve sayisi gelir.*/
		$k_bilgi=mysql_fetch_assoc($sorgu); /*ilk satiri bize getirmesini soyledik.*/

		if($sayisi==1) {
			if($k_bilgi['sifre']==$forget1) { /*veri tabaninda k_bilgisi tablosundan aktif kismini kontrol ediyoruz.*/
				mesaj($onay="Sifre = {$forget1}");
			}elseif ( $k_bilgi['sifre']==$forget2) {
				mesaj($onay="Sifre = {$forget2}");
			}else{
				send_pass($kadi);
				mesaj($hata="Sifre tahminleriniz uyusmadi."."</br>"." Kullanıcı Sifresi mail adresine Yollandi");
			}
			
		}else {
			mesaj($hata="Kullanıcı Sisteme Kayitli Degil !!!");
		}
}

function urun($padi,$pimg,$pinf,$price){
	echo "<div class=\"element\" style=\"background-image: url(img/product/urun_$pimg.jpg);\">";
	echo "<span class=\"elementBaslik\">$padi</span>";
	echo "<div class=\"elementInfo\">$pinf</div>";
	echo "<div class=\"elementFiyat\">$price<img src=\"img/tl.png\" class=\"elementtl\"></div>";
	echo "</div>";
}

function sepet($padi,$pimg,$price,$pid){

/*sil butonu*/
/*
echo "<a href=\"";
echo basename($_SERVER['PHP_SELF'])."?sil=".$pid."\" title=\"Delete\"><img src=\"img/ico/trashcan_gray.png\" alt=\"sil\"></a>";
*/
}
function urunsil($urunid){
		$sql="DELETE FROM sepet WHERE id='{$urunid}' LIMIT 1";
		$sonuc=mysql_query($sql);
		$sayisi=mysql_affected_rows();
		if($sayisi==1) {
			$onay="Kayıt başarılı bir şekilde silindi";
		}elseif($sayisi==0 && $sonuc==true) {
			$hata="İstenilen kayıt bulunamıyor";
		}
}
function sepeteekle($urunid){
		$sql="INSERT INTO sepet (pid) VALUES ('$urunid')";
		$sonuc=mysql_query($sql);
		$sayisi=mysql_affected_rows();

		if($sayisi==1) {
			$onay="Kayıt Başarılı";
		}else {
			$hata="Sistemde bir problem yaşandı. Yöneticiyle görüşünüz";
		}
}
?>