<?php require("lib/contact.php"); ?>
<?php require("lib/function.php"); ?>
<?php 

/*Giris kontrol ediyoruz.*/
	if(isset($_POST['giris'])) {
		$kadi=trim($_POST['kadi']);
		$sifre=trim($_POST['sifre']);/*Gizli (post) gelen sifre alindi. $sifre olarak kullanildi.*/
		$gizli_sifre=sha1($sifre); /*sifre gizlendi*/
			if(empty($kadi)==false && empty($sifre)==false) {
				login($kadi,$gizli_sifre);/*$gizli_sifre ile degistir. yeni kayit alirken sifre degismeli*/
			}else {
				mesaj($hata="Kullanıcı adı veya şifre boş bırakılamaz!");
			}
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo basename($_SERVER['PHP_SELF']);?></title>
		<link rel="stylesheet" type="text/css" href="style/test_1.css">
		<link rel="stylesheet" type="text/css" href="style/reset_1.css">

	</head>
	<body>
		<div class="kapla"></div>
		<div class="kapla2"></div>
		<div class="kapla3">
			<div class="giris_alani">
				<div class="giris"> 
					<ul>
						<li><a href="register.php" class="head_button">Kayıt ol</a></li>
						<li><a href="login.php" class="head_button">Giriş yap</a>
							<div class="giris_yap">
								<form action="" method="post">
									Kullanıcı adı</br><input type="text" autocomplete="off" name="kadi"></br>
									Şifre</br><input type="password" name="sifre"></br>
									<a class="turuncu_yazi" href="forget.php">Şifremi unuttum</a>
									<button type="submit" name="giris" value="Giriş">Giriş</button>
								</form>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="header">
			<div class="logo"><img src="img/logo_iki2.png" width="115px" height="115px"></div>
			<div class="input">
					

					<!-- arama bölümü başlangıç -->
						 <div id="aramaFormu">
							<form action="" method="get">
								<input type="text" name="s" id="s" onblur="if (value =='') {value = 'Aradığını hemen bul...'}" onfocus="if (value == 'Aradığını hemen bul...') {value =''}" type="text" value="Aradığını hemen bul..." />
							<button type="submit" id="search" value="ara"></button>
							</form>
						</div>
					<!-- arama bölümü bitiş -->
			</div>

			
			<div class="pop_menu">Pop Menu</div>
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php">Anasayfa</a></li>
				<li><a href="contact.php">İletişim</a></li>
				<li><a href="#">Dükkan aç</a></li>
				<li><a href="#">Siparişe başla</a></li>
			</ul>
		</div>

	<div class="body">
