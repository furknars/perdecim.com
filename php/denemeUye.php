<link rel="stylesheet" type="text/css" href="..\\css\uyelik.css">
<link rel="stylesheet" type="text/css" href="..\\css\animate.css">
<link rel="stylesheet" type="text/css" href="..\\css\kayitol.css">
	<script type="text/javascript" src="..\\js\javascript.js"></script>
	 <meta charset="utf-8">
	<br><br>
	<div  align="center" >
		<img class="animated fadeInUp " src="..\\img\perdecim.png" border="0" >
	</div>
<div class="kare">
<?php
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

<li><a href="logout.php">Güvenli Çıkış</a></li>


</ul>


<?php

include "baglanti.php";
$Id=$_REQUEST['id'];

		$query=$db->query("select * from uyeler where Id='$Id'",PDO ::FETCH_ASSOC);
			if($query->rowCount())
			{
				
				foreach ($query as $row) 
				{
					
					 $isim = $row['isim'];
					 $soyisim = $row['soyisim'];
					 $tcno = $row['tcno'];
					 $kadi= $row['kadi'];
					 $sifre = $row['sifre'];
					 $mail=$row['mail'];
					
				}
			}

?>

<form name="form1" action="profilIslem.php?kadi=<?=$kadi?>" method="post" class="formm1">

<table width="400" height="300" >

 <tr>

  <td>Adı</td>

  <td><input type="text" name="ad" value="<?=$isim?>"></td> 

 </tr>

 <tr>

  <td>Soyadı</td>

  <td><input type="text" name="soyad" value="<?=$soyisim ?>"></td> 

 </tr>

 <tr>

  <td>Tc NO</td>

  <td><input type="text" name="tcno" value="<?=$tcno ?>" DISABLED></td> 

 </tr>
 <tr>

  <td>Email</td>

  <td><input type="text" name="mail" value="<?=$mail ?>" ></td> 

 </tr>

 <tr>

  <td>Kullanıcı Adı</td>

  <td><input type="text" name="kadi" value="<?=$kadi ?>" DISABLED ></td> 

 </tr>

 <tr>

  <td>Şifre</td>

  <td><input type="text" name="sifre" value="<?=$sifre ?>"></td> 

 </tr>

 <tr>

</table>
  <input type="submit" name="update1" value="Güncelle" class="subUpdate" ></td><br><br>
</form>