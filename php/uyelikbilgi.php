<link rel="stylesheet" type="text/css" href="..\\css\uyelik.css">
	<link rel="stylesheet" type="text/css" href="..\\css\animate.css">
	<script type="text/javascript" src="..\\js\javascript.js"></script>
	 <meta charset="utf-8">
	<br><br>
	<div  align="center" >
		<img class="animated fadeInUp " src="..\\img\perdecim.png" border="0" >
	</div>
<div class="kare">
<?php
$ad=$_REQUEST['ad'];
$cinsiyet=$_REQUEST['cinsiyet'];
$kadi=$_REQUEST['kadi'];
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:../html/giris.html.php");
}

?>

<ul id="menu" class="menu">


<?php 

		echo "
		<li><a href='uyeAnaSayfa.php?kadi=$kadi'>Ana Sayfa </a></li>
		<li><a href='profilim.php?kadi=$kadi'>Profilim </a></li>
		<li><a href='perdelerim.php?kadi=$kadi'>Perdelerim </a></li>
		<li><a href='perdeyansit.php?kadi=$kadi'>Perde Yansıt </a></li>
		<li><a href='uyelikbilgi.php?kadi=$kadi'>Üyelik Bilgilerim </a></li>
		";
?>

<li><a href="logout.php?kadi=<?=$kadi?>">Güvenli Çıkış</a></li>


</ul>
<?php
include "baglanti.php";
date_default_timezone_set('Europe/Istanbul');
	$query=$db->query("select * from uyeler where kadi='".$kadi."'",PDO ::FETCH_ASSOC);
			if($query->rowCount())
			{
				
				foreach ($query as $row) 
				{
					$soyad=$row['soyisim'];
					$ad=$row['isim'];
					$bas=$row['bas_tarihi'];
					$son=$row['bit_tarihi'];
					$a= date("Y-m-d");
					$ilktarihstr=strtotime($a);
					$sontarihstr=strtotime($son);
					$fark=($sontarihstr-$ilktarihstr)/86400;
					  
				}
			}
			echo'<center class="uyeSayfaBaslik1">Sayın '.$ad.' '.$soyad.'  ;</center>';
			echo'<center class="uyeSayfaBaslik2">Üyelik Başlangıç Tarihiniz : '.$bas.'  </center>';
			echo'<center class="uyeSayfaBaslik2">Üyelik Bitiş Tarihiniz : '.$son.' </center>';
			echo'<center class="uyeSayfaBaslik3">Son '.$fark.' gün ! </center>';




?>

</div>