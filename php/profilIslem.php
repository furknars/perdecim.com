
<?php
ob_start();
session_start();
if(!isset($_SESSION["login"])){
    header("Location:../html/giris.html.php");
}

include "baglanti.php";

$kadi=$_REQUEST['kadi'];
$isim=$_POST['ad'];
$soyisim=$_POST['soyad'];
$tcno=$_POST['tcno'];
$sifre=$_POST['sifre'];
$durum=$_POST['durum'];

if($_POST["update1"])
	{
			$guncelleme = $db->exec("UPDATE uyeler SET isim='$isim',soyisim='$soyisim',sifre='$sifre'    WHERE kadi='$kadi'");
		
			 echo '<script type="text/javascript">alert("Kayıt Güncellendi");</script> <meta http-equiv="refresh" content="0;URL=profilim.php?kadi='.$kadi.'" />';
		

	}
	


?>