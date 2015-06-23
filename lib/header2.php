<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Index test</title>
		<link rel="stylesheet" type="text/css" href="style/test_1.css">
		<link rel="stylesheet" type="text/css" href="style/reset_1.css">

	</head>
	<body>
		<div class="kapla"></div>
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
			<div class="menu">
				<ul>
					<li>Anasayfa</li>
					<li>İletişim</li>
					<li>Dükkan Aç</li>
					<li>Siparişe Başla</li>
				</ul>
			</div>
			<div class="giris">
				<form action="" method="post">
					Kullanıcı adı / E-mail<input type="text" autocomplete="off" name="kadi"></br>
					Şifre<br><input type="password" name="sifre"><br>
				
					<button type="submit" value="Giriş" name="giris" class="head_button">Giriş</button>
				</form>

				<a href="kayit.php" class="head_button">Kayıt ol</a>
			</div>
				<div class="pop_menu">Pop Menu</div>
		</div>
<div class="body"> <!-- Body baslangic -->