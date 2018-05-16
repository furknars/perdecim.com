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
else 
{
	echo "<div >";
	echo '<ul id="menu" >
			 <li><a href="yoneticiAnaSayfa.php">Ana Sayfa</a></li>
	   		 <li><a href="yonUyeler.php">Üyeler</a></li>
			 <li><a href="yonMesajlar.php">İstekler</a></li>
			 <li><a href="iletisimmesaj.php">Mesajlar</a></li>
			 <li><a href="logout.php">Güvenli Çıkış</a></li>
		  </ul>';
	echo "</div>";
}

?>

<div class="tablo" >
<table width='800' height="250" bgcolor='white'>
						    <tr bgcolor="#e2e2e2">
						    	<th>ID</th>
						        <th>ADI</th>
						        <th>SOYADI</th>
						        <th>TCNO</th>
						        <th>KULLANICI ADI</th>
						        <th>SİFRE</th>
						        <th>DURUM</th>
						    </tr>
<?php
include "baglanti.php";

		$query=$db->query("select * from uyeler",PDO ::FETCH_ASSOC);
			if($query->rowCount())
			{
				
				foreach ($query as $row) 
				{
					 $id= $row['Id'];
					 $isim = $row['isim'];
					 $soyisim = $row['soyisim'];
					 $tcno = $row['tcno'];
					 $kadi= $row['kadi'];
					 $sifre = $row['sifre'];
					 $durum = $row['durum'];
        			

					echo "
						<form action=\"deneme.php?id=$id\" method=\"post\">
							<tr>
								<td>
									<center>$id</center>
								</td>
								<td>
									<center>$isim</center>
								</td>
								<td>
									<center>$soyisim</center>
								</td>
								<td>
									<center>$tcno</center>
								</td>
								<td>
									<center>$kadi</center>
								</td>
								<td>
									<center>$sifre</center>
								</td>
								<td>
									<center>$durum</center>
								</td>
								<td>
									<center><input  type=\"submit\"  value=\"Düzenle\"></center>
								</td>
							</tr>
							</form>";


						 
				}
			}

?>
</table>
</div>
</div>