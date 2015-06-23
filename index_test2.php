<?php require("lib/contact.php"); ?>
<?php require("lib/function.php"); ?>
<?php 

/*Giris kontrol ediyoruz.*/
	if(isset($_POST['giris'])) {
		$kadi=trim($_POST['kadi']);
		$sifre=trim($_POST['sifre']);/*Gizli (post) gelen sifre alindi. $sifre olarak kullanildi.*/
		$gizli_sifre=sha1($sifre); /*sifre gizlendi*/
		login($kadi,$sifre);/*$gizli_sifre ile degistir. yeni kayit alirken sifre degismeli*/
		}else {
			$hata="Kullanıcı adı veya şifre boş bırakılamaz!";
	}


?>
<?php require("lib/header.php"); ?>
<?php hata(@$onay,@$hata); ?><!-- hata yada onay fonksiyonlarin icinde calismasi icin. -->

	
<?php require("lib/footer.php"); ?>