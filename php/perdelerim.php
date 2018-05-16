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




</div>