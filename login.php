<?php require("lib/header.php"); ?>

<div class="giris_hata">
	<form action="" method="POST">
			Kullanıcı adı</br><input type="text" autocomplete="off" name="kadi"></br>
			Şifre</br><input type="password" name="sifre"></br>
			<a class="turuncu_yazi" href="#" name="forget">Şifremi unuttum</a>
			<button type="submit" name="giris" value="Giriş">Giriş</button>
		</form>
</div>

<?php require("lib/footer.php"); ?>