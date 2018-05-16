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
						    	
						        <th>ADI</th>
						        <th>SOYADI</th>
						        <th>KULLANICI ADI</th>
						        <th>UYELİK SÜRESİ</th>
						        <th>KK NO</th>
						        <th>SKTAY</th>
						        <th>SKTYİL</th>
						        <th>CVC</th>
						        <th>DURUM</th>
						    </tr>
<?php
include "baglanti.php";

		$query=$db->query("select * from mesajlar",PDO ::FETCH_ASSOC);
			if($query->rowCount())
			{
				
				foreach ($query as $row) 
				{
					
					 $isim = $row['uye_isim'];
					 $soyisim = $row['uye_soyisim'];
					 $kadi= $row['uye_kadi'];
					 $sure=$row['uyelik_suresi'];
					 $kkno = $row['uye_kkno'];
					 $sktay= $row['sktay'];
					 $sktyil= $row['sktyil'];
					 $cvc= $row['cvc'];
					 $durum = $row['durum'];
        			
					if ($durum=="F") 
					{
					echo "
						<form action=\"uyeAktifEt.php?kadi=$kadi\" method=\"post\">
							<tr>
								<td>
									<center>$isim</center>
								</td>
								<td>
									<center>$soyisim</center>
								</td>
								<td>
									<center>$kadi</center>
								</td>
								<td>
									<center>$sure</center>
								</td>
								<td>
									<center>$kkno</center>
								</td>
								<td>
									<center>$sktay</center>
								</td>
								<td>
									<center>$sktyil</center>
								</td>
								<td>
									<center>$cvc</center>
								</td>
								<td>
									<center>$durum</center>
								</td>
								<td>
									<center><input  type=\"submit\"  value=\"Üyeliği Aktif Et\"></center>
								</td>
							</tr>
							</form>";
					}

					else
					{
						echo '<script type="text/javascript">alert("Yeni Mesaj Yok");</script> <meta http-equiv="refresh" content="0;URL=yoneticiAnaSayfa.php" />';
					}
						 
				}
					
			}
			else
			{
				echo '<script type="text/javascript">alert("Yeni Mesaj Yok");</script> <meta http-equiv="refresh" content="0;URL=yoneticiAnaSayfa.php" />';
			}


?>
</table>
</div>
</div>
