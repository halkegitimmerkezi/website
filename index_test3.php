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
<?php mesaj(@$onay,@$hata); ?><!-- hata yada onay fonksiyonlarin icinde calismasi icin. -->

	<div>
		<form id="user" method="POST" action="<?php echo basename($_SERVER["SCRIPT_FILENAME"]); ?>">
			Kullanici adi :<input type="text" id="kadi" name="kadi"></br>
			Kullanici sifre : <input type="text" id="sifre" name="sifre"></br>
			<input type="submit" value="gonder" name="giris"> 
		</form>
	</div>
<?php require("lib/footer.php"); ?>