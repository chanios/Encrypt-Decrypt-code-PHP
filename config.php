<?
	set_time_limit(30); //set time limit in sec
// ENCODE SETTING
	$Cfg["hash"] = "md5";
// DATABASE SETTING
	$Cfg["mysql"]["host"] = "localhost"; //Tip: Don't change it. :D
	$Cfg["mysql"]["user"] = "root"; // mysql username
	$Cfg["mysql"]["pass"] = "1234boss"; // mysql password
	$Cfg["mysql"]["db"] = "passwordl"; //database to store
//=================================================
// Decrypt SETTING
	$Cfg["decrypt"]["save"] = "all";
		//all = Save all Temp in database Best result on High storage capacity.
		//some = Save result Temp in database Best result on low storage capacity.
		//off = Don't save
	$Cfg["decrypt"]["charset"] = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$Cfg["decrypt"]["PASSWORD_MAX_LENGTH"] = "8";
	$Cfg["decrypt"]["HASH_ALGO"] = $Cfg["hash"];
//================================================
// Encrypt SETTING
	$Cfg["encrypt"]["save"] = "on"; 
		//on = save encrypt data in database 
		//off = don't save
//Don't edit This below
//=================================================
$db = $Cfg["mysql"]["db"];
$hashl = $Cfg["decrypt"]["HASH_ALGO"];
mysql_connect($Cfg["mysql"]["host"],$Cfg["mysql"]["user"],$Cfg["mysql"]["pass"]);
mysql_select_db($db);
?>
