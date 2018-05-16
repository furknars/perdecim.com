<?php

 		$kadi=$_REQUEST['kadi'];
		include "baglanti.php";
		$query=$db->query("select * from mesajlar WHERE uye_kadi='$kadi'",PDO ::FETCH_ASSOC);
			if($query->rowCount())
			{
				
				foreach ($query as $row) 
				{
					  $uyeSure=$row['uyelik_suresi'];
				}
				
			}

			date_default_timezone_set('Europe/Istanbul');
			$a= date("Y-m-d");
			$b= date("m");
			$yil=date("Y");
			$c=$b;
			if($uyeSure=="3 AY")
			{
				$c=$b+3;
				if ($c>12) 
				{
					$c=$c%12;
				}
			}
			else if ($uyeSure=="6 AY") 
			{
				$c=$b+6;
				if ($c>12) 
				{
					$c=$c%12;
				}
			}
			else
			{
				$yil=$yil+1;
			}
			
			$d= date("".$yil."-".$c."-d");





			$guncelleme = $db->exec("UPDATE uyeler SET durum='T',bas_tarihi='$a',bit_tarihi='$d' WHERE kadi='$kadi'");
			$guncelleme1 = $db->exec("UPDATE mesajlar SET durum='T' WHERE uye_kadi='$kadi'");
			$silme = $db->exec("DELETE FROM mesajlar WHERE durum='T'");


			if($silme)
		{
			 echo '<script type="text/javascript">alert("Üyelik Aktif Edildi");</script> <meta http-equiv="refresh" content="0;URL=yoneticiAnaSayfa.php" />';
		}

?>