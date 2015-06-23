<?php require("lib/header.php"); ?>
<?php 

/*Giris kontrol ediyoruz.*/
	if(isset($_GET['kayit'])) {
		$kadi=trim($_GET['kadi']);
		$sifre=trim($_GET['sifre']);/*Gizli (post) gelen sifre alindi. $sifre olarak kullanildi.*/
		$isim=trim($_GET['isim']);
		$soyisim=trim($_GET['soyisim']);
		$dtarih=trim($_GET['dtarih']);
		$dtarih=date("Y-m-d", strtotime($dtarih));
		$gizli_sifre=sha1($sifre); /*sifre gizlendi*/
			
			if(empty($kadi)==false && empty($sifre)==false && empty($isim)==false && empty($soyisim)==false) {
				register($kadi,$gizli_sifre,$isim,$soyisim,$dtarih);/*$gizli_sifre ile degistir. yeni kayit alirken sifre degismeli*/
			}else{
				$hata="Alanlar bos birakilamaz.";
			}
	}

?>
<?php mesaj(@$hata,@$onay); ?> <!-- Hata yada onayin yazilacagi alan bunu if icine al alt alan gozterilemsin -->

<div class="form_elemani">
	<form action="" method="get">
		İsim</br><input type="text" name="isim"></br>
		Soyisim</br><input type="text" name="soyisim"></br>
		Doğum tarihi</br><input type="date" name="dtarih"></br>
		Kullanıcı adı</br><input type="text" name="kadi"></br>
		Şifre</br><input type="password" name="sifre"></br>
		<button type="reset" name="clean" value="temizle">Temizle</button>
		<button type="submit" name="kayit" value="Giriş">Giriş</button>
	</form>

</div>

<?php require("lib/footer.php"); ?>