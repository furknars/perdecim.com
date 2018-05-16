	<link rel="stylesheet" type="text/css" href="..\\css\uyelik.css">
	<link rel="stylesheet" type="text/css" href="..\\css\kayitol.css">
	<link rel="stylesheet" type="text/css" href="..\\css\animate.css">
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
<img src="../img/pen3.jpg" width="800" >
<?php
	include "baglanti.php";
	$query = $db->query("SELECT * FROM resimler where kadi='$kadi' ", PDO::FETCH_ASSOC);
						if ( $query->rowCount() )
						{
    		 				foreach( $query as $row )
    		 				{  	 
    		 					echo '<div class="resimm">						
    	 						<img src="'.$row["resim"].'" width="100%">
    	 						</div>';			
         					}
   		 				}
   		 				


?>

<form  action="resim.php?kadi=<?=$kadi?>" method="post" enctype="multipart/form-data">
		<input class="sub" type="file"   name="resim"><br><br>
		<input class="sub1" type="submit" name="gonder" value="Perde Giydir">

	</form>

</div>