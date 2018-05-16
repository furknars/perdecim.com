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
 
	echo "<div >";
	echo '<ul id="menu" >
			 <li><a href="yoneticiAnaSayfa.php">Ana Sayfa</a></li>
	   		 <li><a href="yonUyeler.php">Üyeler</a></li>
			 <li><a href="">Slider Düzenle</a></li>
			 <li><a href="yonMesajlar.php">Mesajlar</a></li>
			 <li><a href="logout.php">Güvenli Çıkış</a></li>
		  </ul>';
	echo "</div>";

?>


<?php

include "baglanti.php";
$Id=$_REQUEST['id'];

		$query=$db->query("select * from uyeler where Id='$Id'",PDO ::FETCH_ASSOC);
			if($query->rowCount())
			{
				
				foreach ($query as $row) 
				{
					 $id= $row['Id'];
					 $isim = $row['isim'];
					 $soyisim = $row['soyisim'];
					 $tcno = $row['tcno'];
					 $mail=$row['mail'];
					 $kadi= $row['kadi'];
					 $sifre = $row['sifre'];
					 $durum = $row['durum'];
				}
			}

?>

<form name="form1" action="uyeIslem.php?id=<?=$Id?>" method="post" class="formm">

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
 <td>Durum</td>

  <td><input type="text" name="durum" value="<?=$durum ?>" DISABLED></td> 


 </tr>

</table>
  <input type="submit" name="update" value="Güncelle" class="subUpdate" ></td><br><br>
  <input type="submit" name="delete" value="Üyeliği Sil" class="subDelete" ></td>

</form>

</div>

</body>


</html>