
<link rel="stylesheet" type="text/css" href="..\\css\uyelik.css">
	<link rel="stylesheet" type="text/css" href="..\\css\animate.css">
	<link rel="stylesheet" type="text/css" href="..\\css\kayitol.css">
	 <meta charset="utf-8">
	<br><br>
	<div  align="center" >
		<img class="animated fadeInUp " src="..\\img\perdecim.png" border="0" >
	</div>
<div class="kare">

<?php

ob_start();
session_start();
if(!isset($_SESSION["login1"])){
    header("Location:../html/giris.html");
}

include "baglanti.php";
$id=$_GET['id'];
$isim=$_POST['ad'];
$soyisim=$_POST['soyad'];
$tcno=$_POST['tcno'];
$kadi=$_POST['kadi'];
$sifre=$_POST['sifre'];
$durum=$_POST['durum'];

	echo "<div >";
	echo '<ul id="menu" >
	   		 <li><a href="yonUyeler.php">Üyeler </a></li>
			 <li><a href="">ARS</a></li>
			 <li><a href="yonMesajlar.php">İstekler</a></li>
			 <li><a href="iletisimmesaj.php">Mesajlar</a></li>
			 <li><a href="logout.php">Güvenli Çıkış</a></li>
		  </ul>';
	echo "</div>";

	if($_POST["update"])
	{
			$guncelleme = $db->exec("UPDATE uyeler SET isim='$isim',soyisim='$soyisim',sifre='$sifre',durum='$durum' WHERE Id='$id'");
			if($guncelleme)
		{
			 echo '<script type="text/javascript">alert("Kayıt Güncellendi");</script> <meta http-equiv="refresh" content="0;URL=yonUyeler.php" />';
		}

	}
	if($_POST["delete"])
	{
		$silme = $db->exec("DELETE FROM üyeler WHERE Id='$id'");
		if($silme)
		{
			 echo '<script type="text/javascript">alert("Kayıt Silindi");</script> <meta http-equiv="refresh" content="0;URL=yonUyeler.php" />';;
		}

	}
		
	
			

     
?>


