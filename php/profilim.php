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

<li><a href="logout.php?kadi=<?=$kadi?>">Güvenli Çıkış</a></li>


</ul>

<div class="tablo1" >
<table width='800' height="100" bgcolor='white'>
						    <tr bgcolor="#e2e2e2">	
						        <th>ADI</th>
						        <th>SOYADI</th>
						        <th>TCNO</th>
						        <th>KULLANICI ADI</th>
						        <th>SİFRE</th>
						    </tr>
<?php
include "baglanti.php";

		$query=$db->query("select * from uyeler where kadi='$kadi'",PDO ::FETCH_ASSOC);
			if($query->rowCount())
			{
				
				foreach ($query as $row) 
				{
					 $id=$row['Id'];
					 $isim = $row['isim'];
					 $soyisim = $row['soyisim'];
					 $tcno = $row['tcno'];
					 $kadi= $row['kadi'];
					 $sifre = $row['sifre'];
					 
        			

					echo "
						<form action=\"denemeUye.php?id=$id&&kadi=$kadi\" method=\"post\">
							<tr>
								
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
									<center><input  type=\"submit\"  value=\"Düzenle\"></center>
								</td>
							</tr>
							</form>";


						 
				}
			}

?>
</table>
</div>


