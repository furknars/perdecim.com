<meta charset="utf-8">
<?php

	include "baglanti.php";	

	$email=$_POST['email'];
	$tel=$_POST['telNo'];
	$konu=$_POST['konu'];
	$aciklama=$_POST['message'];


	$query= $db->prepare("INSERT INTO 	iletisim SET
										email = ?,
										tel = ?,
										konu = ?,
										aciklama = ?");
										$insert = $query->execute(array(
										  "$email","$tel","$konu","$aciklama"
										));

				    if ( $insert )
					{
					    echo '<script type="text/javascript">alert("Mesajınız Gönderildi");</script> <meta http-equiv="refresh" content="0;URL=../index.html" />';
					}
	



?>

