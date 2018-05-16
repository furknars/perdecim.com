	
	<link rel="stylesheet" type="text/css" href="..\\css\uyelik.css">
	<link rel="stylesheet" type="text/css" href="..\\css\animate.css">
	 <meta charset="utf-8">
	<br><br>
	<div class="yoneticiBody">
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
	$sayac=0;
	$sayac1=0;
	$sayac2=0;
	include "baglanti.php";
	echo "<div >";
	echo '<ul id="menu" >
			 <li><a href="yoneticiAnaSayfa.php">Ana Sayfa</a></li>
	   		 <li><a href="yonUyeler.php">Üyeler</a></li>
			 <li><a href="yonMesajlar.php">İstekler</a></li>
			 <li><a href="iletisimmesaj.php">Mesajlar</a></li>
			 <li><a href="logout.php">Güvenli Çıkış</a></li>
		  </ul>';
	echo "</div>";

?>
	<div class="arkaplan">
		</div>
<?php

	$query=$db->query("select * from mesajlar",PDO ::FETCH_ASSOC);
			if($query->rowCount())
			{
				foreach ($query as $row) 
				{
					$sayac++;
				}
				echo'<div class="sekil1">
						<h3 class="mesaciklama"> '.$sayac.' adet üyelik isteğiniz var.</h3>
					 </div>';
			}
			else
			{
				echo'<div class="sekil">
						<h3 class="mesaciklama">Yeni üyelik isteği yok.</h3>

					 </div>';
			}

			
	$query1=$db->query("select * from uyeler where durum='T'",PDO ::FETCH_ASSOC);
			if($query1->rowCount())
			{
				foreach ($query1 as $row) 
				{
					$sayac1++;
				}
				echo'<div class="sekil12">
						<h3 class="mesaciklama">Toplam '.$sayac1.' adet aktif üye bulunmaktadır.</h3>
					 </div>';
			}
			

}

$query2=$db->query("select * from iletisim",PDO ::FETCH_ASSOC);
			if($query2->rowCount())
			{
				foreach ($query2 as $row) 
				{
					$sayac2++;
				}
				echo'<div class"son">
						<h3 class="son"> '.$sayac2.' adet mesajınız  var.</h3>
					 </div>';
			}
			else
			{
				echo'<div class="son">
						<h3 >Yeni mesajınız yok.</h3>

					 </div>';
			}

?>


<h1 class="yonbas">YÖNETİCİ PANELİ</h1>



</div>



</div>