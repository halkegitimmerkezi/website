<?php require("lib/header.php"); ?>

<?php 

/*Giris kontrol ediyoruz.*/
	if(isset($_GET['fsend'])) {
		$kadi=trim($_GET['kadi']);
		$isim=trim($_GET['isim']);
		$soyisim=trim($_GET['soyisim']);
		$forget1=trim($_GET['forget1']);
		$forget2=trim($_GET['forget2']);
		
		if(empty($kadi)==false && empty($forget1)==false && empty($isim)==false && empty($soyisim)==false) {
				forget($kadi,$isim,$soyisim,$forget1,$forget2);/*$gizli_sifre ile degistir. yeni kayit alirken sifre degismeli*/
			}else{
				$hata="Alanlar bos birakilamaz.";
			}
	}

?>
<?php mesaj(@$hata,@$onay); ?>
<div class="giris_hata">
	<form action="" method="GET">
		Kullanıcı adı</br><input type="text" autocomplete="off" name="kadi"></br>
		Isim</br><input type="text" name="isim"></br>
		Soyisim</br><input type="text" name="soyisim"></br></br>
		Son hatirlanan Sifre 1</br><input type="text" name="forget1"></br>
		Son hatirlanan Sifre 2</br><input type="text" name="forget2"></br>
		<button type="submit" name="fsend" value="Bilgileri Gonder">Bilgileri Gonder</button>
	</form>
</div>

<?php require("lib/footer.php"); ?>