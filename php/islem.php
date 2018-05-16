<meta charset="utf-8">
<?php

	if($_POST['uyegiris'])
	{
		include "baglanti.php";
		ob_start();
		session_start();
		 
		$kadi = $_POST['kadi'];
		$sifre = $_POST['sifre'];
		$durum="T";
		 
		$query=$db->query("select * from uyeler where kadi='".$kadi."'and sifre='".$sifre."' and durum='".$durum."'",PDO ::FETCH_ASSOC);
			if($query->rowCount())
			{
				
				foreach ($query as $row) 
				{
					    
					    $_SESSION["login"] = "true";
					    $_SESSION["user"] = $kadi;
					    $_SESSION["pass"] = $sifre;
					    header("Location:uyeAnaSayfa.php?kadi=$kadi");

				}
				
			}
		 
		else {
		    if($kadi=="" or $sifre=="") {
		       echo '<script type="text/javascript">alert("Kullanıcı Adı Ve Şifreyi Boş Bırakmayınız");</script> <meta http-equiv="refresh" content="0;URL=../html/giris.html" />';
		    }
		    else {
		        echo '<script type="text/javascript">alert("Kullanıcı Adı Veya Şifre Yanlış");</script> <meta http-equiv="refresh" content="0;URL=../html/giris.html" />';
		    }
		}
		 
		ob_end_flush();
	}


	if($_POST['yongiris'])
	{
		include "baglanti.php";	
		ob_start();
		session_start();
		 
		$admin = $_POST['kadi'];
		$sifre = $_POST['sifre'];
		
		 
		$query=$db->query("select * from yoneticibilgi where admin='".$admin."'and sifre='".$sifre."'",PDO ::FETCH_ASSOC);
			if($query->rowCount())
			{
				
				foreach ($query as $row) 
				{
					    
					    $_SESSION["login1"] = "true";
					    $_SESSION["user"] = $admin;
					    $_SESSION["pass"] = $sifre;
					    header("Location:yoneticiAnaSayfa.php");
				}
				
			}
		 
		else {
		    if($kadi=="" or $sifre=="") {
		        echo '<script type="text/javascript">alert("Kullanıcı Adı Ve Şifreyi Boş Bırakmayınız");</script> <meta http-equiv="refresh" content="0;URL=../html/giris.html" />';
		    }
		    else {
		        echo '<script type="text/javascript">alert("Kullanıcı Adı Veya Şifre Yanlış");</script> <meta http-equiv="refresh" content="0;URL=../html/giris.html" />';
		    }
		}
		 
		ob_end_flush();
		}
	if($_POST['subMesSil'])
	{
		include "baglanti.php";
		$id=$_REQUEST['id'];
		$silme = $db->exec("DELETE FROM iletisim WHERE Id='$id'");
		if($silme)
		{
			 echo '<script type="text/javascript">alert("Mesaj Silindi");</script> <meta http-equiv="refresh" content="0;URL=iletisimmesaj.php" />';;
		}
		
	}

?>


		
