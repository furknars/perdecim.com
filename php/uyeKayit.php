<meta charset="utf-8">
<?php

	include "baglanti.php";	

	$ad=$_POST['ad'];
	$soyad=$_POST['soyad'];
	$tc=$_POST['tc'];
	$email=$_POST['email'];
	$kAdi=$_POST['kAdi'];
	$sifre=$_POST['sifre1'];
	$sure=$_POST['uyeSure'];


	$kkadsoyad=$_POST['kkadsoyad'];
	$kkno=$_POST['kkno'];
	$ay=$_POST['ay'];
	$yil=$_POST['yil'];
	$kkcvv=$_POST['kkcvv'];
	$cinsiyet=$_POST["gender"];

	$query= $db->prepare("INSERT INTO 	uyeler SET
										isim = ?,
										soyisim = ?,
										tcno = ?,
										mail = ?,
										kadi = ?,
										sifre = ?,
										durum=?,
										uye_sure=?,
										cinsiyet=?");
										$insert = $query->execute(array(
										  "$ad","$soyad", "$tc","$email","$kAdi","$sifre","F","$sure", 			"$cinsiyet"
										));

				

		$query1= $db->prepare("INSERT INTO 	kkbilgileri SET
										isimSoyisim = ?,
										kartNo = ?,
										sktAy = ?,
										sktYil = ?,
										cvc = ?");
										$insert = $query1->execute(array(
										  "$kkadsoyad","$kkno", "$ay","$yil","$kkcvv" 
										));


		$query2= $db->prepare("INSERT INTO 	mesajlar SET
										
										uye_isim = ?,
										uye_soyisim=?,
										uye_kadi = ?,
										uye_kkno = ?,
										sktay = ?,
										sktyil = ?,
										cvc = ?,
										uyelik_suresi=?,
										durum = ?");
										$insert = $query2->execute(array(
										  "$ad","$soyad","$kAdi","$kkno", "$ay","$yil","$kkcvv","$sure","F" 
										));

				    if ( $insert )
					{
					    echo '<script type="text/javascript">alert("Kayıt Başarılı");</script> <meta http-equiv="refresh" content="0;URL=../index.html" />';
					}
	



?>




