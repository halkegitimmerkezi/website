<?php require("lib/header.php"); ?>
<!-- 
<div class="element" style="background-image: url(img/product/urun_1.jpg);">
	 <span class="elementBaslik">URUN 1</span>
	<div class="elementInfo">ahmet</div>
	<div class="elementFiyat">15<img src="img/tl.png" class="elementtl"></div>
</div>
 -->

<?php
/*urun($padi,$pimg,$pinf,$price);*/
/*urun("urun 1","1","Buda urun iste","25");*/

$sql="SELECT * FROM product";
$sorgu = mysql_query($sql);
	while($satir=mysql_fetch_array($sorgu)) {
		    $esyalar[$satir['id']]=$satir;
	}
?>

<?php foreach ($esyalar as $esya) : ?>
<?php urun($esya['padi'],$esya['pimg'],$esya['pinf'],$esya['price']); ?>  
<?php endforeach; ?>
<!-- urun yazdirma bitti..... -->

<!-- Urun ekle -->
<?php
	if(isset($_POST['ekle'])) {
		$urunid=trim($_POST['urunid']);
		
		if(empty($urunid)==false) {
			$sql="SELECT * FROM sepet WHERE pid='{$urunid}' ";
			$sonuc=mysql_query($sql);
			$sayisi=mysql_num_rows($sonuc);
				if($sayisi==0) {
					sepeteekle($urunid);
				}else {
						$hata="Bu urun sepete daha önceden eklenmiştir.";
				}
		}else {
			$hata="Lütfen yazar ve yayını seçiniz.!";
		}
	}
?>

<!-- urun ekle bitti -->

<!-- Urun sil -->
<?php
$sql="SELECT * FROM sepet";
$sorgu = mysql_query($sql);
	while($satir=mysql_fetch_array($sorgu)) {
		    $esyalar[$satir['id']]=$satir;
	}
?>

<?php foreach ($esyalar as $esya) : ?>
<?php sepet($esya['padi'],$esya['pimg'],$esya['price'],$esya['id']); ?>  
<?php endforeach; ?>

<?php
if (isset($_GET['sil'])) {
		$urunid= $_GET['sil'];
		urunsil($urunid);
	}	
?>
<!-- urun sil bitti. -->
<?php require("lib/footer.php"); ?>