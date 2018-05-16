

<?php


	$servername = "localhost";
	$username = "arsofware_arsofware";
	$password = "furkan";
	$dbname = "arsofware_perdecimcom";

	try 
		{
     	$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		} 
	catch ( PDOException $e )
		{
    		 print $e->getMessage();
		}


		$baglan=mysql_connect($servername,$username,$password)or die("MYSQL Bağlantısı Sağlanamadı");
		mysql_select_db($dbname ,$baglan) or die("Veritabanı Bağlantısı Sağlanamadı") ;
?>
