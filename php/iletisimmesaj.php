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
<table width='910' height="80" bgcolor='white'>
						    <tr bgcolor="#e2e2e2">
						        <th>Email</th>
						        <th>Telefon No</th>
						        <th>Konu</th>
						        <th>Açıklama</th> 
						    </tr>
<?php
include "baglanti.php";

		$query=$db->query("select * from iletisim",PDO ::FETCH_ASSOC);
			if($query->rowCount())
			{
				
				foreach ($query as $row) 
				{
					 $id =$row['Id'];
					 $email = $row['email'];
					 $tel = $row['tel'];
					 $konu= $row['konu'];
					 $aciklama=$row['aciklama'];
					 
					echo "
						<form action=\"islem.php?id=$id\" method=\"post\">
							<tr>
								<td>
									<center>$email</center>
								</td>
								<td>
									<center>$tel</center>
								</td>
								<td>
									<center>$konu</center>
								</td>
								<td>
									<center>$aciklama</center>
								</td>
								
								<td>
									<center><input name=\"subMesSil\"  type=\"submit\"  value=\"Mesajı Sil\"></center>
								</td>
							</tr>
							</form>";
				
				}
			}
			else
			{
				echo '<script type="text/javascript">alert("Yeni Mesaj Yok");</script> <meta http-equiv="refresh" content="0;URL=yoneticiAnaSayfa.php" />';
			}


?>
</table>
</div>