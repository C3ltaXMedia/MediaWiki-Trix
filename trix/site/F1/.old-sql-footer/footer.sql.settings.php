
<?php ############################### DB Einbinden ################################


/*

	Zum senden der daten in die DB

*/


# DB Angaben
$mysqlhost="localhost"; // MySQL-Host angeben
$mysqluser="root"; // MySQL-User angeben
$mysqlpwd="vaxuramohoke"; // Passwort angeben
$mysqldb="WikiSkinDB"; // Gewuenschte Datenbank angeben

# Verbinde dich mit Datenbank, anhand der Angaben
$connection=mysql_connect($mysqlhost, $mysqluser, $mysqlpwd) or 
	die ("Verbindungsversuch fehlgeschlagen");

     
# Verbinde mit DB
mysql_select_db($mysqldb, $connection) or 
	die("Konnte die Datenbank nich waehlen!");

     
# Wähle Tabellen aus DB in Variable $footer1
$footer1 = "SELECT 
				id, 
				link1, text1, 
				link2, text2, 
				link3, text3, 
				link4, text4, 
				link5, text5, 
				link6, text6, 
				ueberschrift
			FROM 
				trix_skin_footer 
			WHERE 
				id = '1'
			";

//Übergebe an Variable Footer1
$trix_Skin_footerquery = mysql_query($footer1) or 
die("Error: Anfrage an DBTabelle \"trix_skin_footer\" nicht erfolgreich! Bitte Installiere die Datenbank um das Design nutzen zu können!");



######################## Wähle Tabellen aus DB in Variable $footer2
$footer2 = "SELECT 
				id, 
				link1, text1, 
				link2, text2, 
				link3, text3, 
				link4, text4, 
				link5, text5, 
				link6, text6, 
				ueberschrift
			FROM 
				trix_skin_footer 
			WHERE 
				id = '2'
			";
			
//Übergebe an Variable Footer2
$trix_Skin_footer2query = mysql_query($footer2) or 
die("Error: Anfrage an DBTabelle \"trix_skin_footer\" nicht erfolgreich! Bitte Installiere die Datenbank um das Design nutzen zu können!");



######################## Wähle Tabellen aus DB in Variable $footer3
$footer3 = "SELECT 
				id, 
				link1, text1, 
				link2, text2, 
				link3, text3, 
				link4, text4, 
				link5, text5, 
				link6, text6, 
				ueberschrift
			FROM 
				trix_skin_footer 
			WHERE 
				id = '3'
			";
			
//Übergebe an Variable Footer3
$trix_Skin_footer3query = mysql_query($footer3) or 
die("Error: Anfrage an DBTabelle \"trix_skin_footer\" nicht erfolgreich! Bitte Installiere die Datenbank um das Design nutzen zu können!");



######################## Wähle Tabellen aus DB in Variable $footer4
$footer4 = "SELECT 
				id, 
				link1, text1, 
				link2, text2, 
				link3, text3, 
				link4, text4, 
				link5, text5, 
				link6, text6, 
				ueberschrift
			FROM 
				trix_skin_footer 
			WHERE 
				id = '4'
			";
			
//Übergebe an Variable Footer4
$trix_Skin_footer4query = mysql_query($footer4) or 
die("Error: Anfrage an DBTabelle \"trix_skin_footer\" nicht erfolgreich! Bitte Installiere die Datenbank um das Design nutzen zu können!");

?>