<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<?php
			$kadi=$_REQUEST['kadi'];
			
			include "baglanti.php";
			$silme = $db->exec("delete from resimler where kadi='$kadi'");


		if ($_POST) 
		{
			if ($_FILES["resim"]["size"]<1024*1024)
		    {
				
					$aciklama=$_POST["aciklama"];
					$dosya_adi=$_FILES["resim"]["name"];
					$uret=array("as","rt","ty","yu","fg");
					$uzanti=substr($dosya_adi,-4,4);
					$sayi_tut=rand(1,10000);
					$yeni_ad="../images/".$uret[rand(0,4)].$sayi_tut.$uzanti;
					if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad))
					{
						

						$sorgu=mysql_query("insert into resimler(resim,kadi) values('$yeni_ad','$kadi')");
						if ($sorgu)
						{
							echo "<center>Resim Kayıt Edildi</center>";
						}
						else
						{
							echo "<center>Resim Kayıt Edilemedi!</center>";
						}

					}

			}
			else
			{
				echo "<center>Dosya Boyutu 1 Mb'ı Geçemez</center>";
			}
		}
			echo '<script type="text/javascript">alert("Perde Giydirildi");</script> <meta http-equiv="refresh" content="0;URL=perdeyansit.php?kadi='.$kadi.'" />';
	?>




</body>
</html>