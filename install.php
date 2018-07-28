<?
session_start();
$Nfg['install']['name'] = "Encrypt & Decrypt system";
$Nfg['install']['verion'] = "1.0";
$Nfg['install']['by'] = "chan022";
$name = $Nfg['install']['name'];
?>
<!doctype html>
<html>
<head>
<title>INSTALL <?php echo $Nfg['install']['name']; ?> : INSTALL'S AGREEMENT</title>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<!-- right click -->
<script>
            var menuDisplayed = false;
            var menuBox = null;
            
            window.addEventListener("contextmenu", function() {
			if(!document.getElementById('copyer')==null){
			document.getElementById('copyer').remove();
			}
			if(document.getElementById('copyer')==null){
			selection = window.getSelection(),
            pagelink = '',
            copytext = selection + pagelink,
            newdiv = document.createElement('div');
			newdiv.id = 'copyer';
			newdiv.style.position = 'absolute';
			newdiv.style.left = '-99999px';
			document.body.appendChild(newdiv);
			newdiv.innerHTML = copytext;
			}
                var left = arguments[0].clientX;
                var top = arguments[0].clientY;
                menuBox = window.document.querySelector(".menu");
                menuBox.style.left = left + "px";
                menuBox.style.top = top + "px";
                menuBox.style.display = "block";
				menuBox.style.animation = "sweepmenu .5s ease-in-out";
                
                arguments[0].preventDefault();
					menuDisplayed = true;
            }, false);
            
            window.addEventListener("click", function() {
                if(menuDisplayed == true){
					menuDisplayed = false;
					window.setTimeout(function () {
						document.getElementById('copyer').remove();
					}, 100);
					menuBox.style.animation = "sweepmenud .5s ease-in-out";
					window.setTimeout(function () {
						menuBox.style.display = "none"; 
					}, 500);
                    
                }
            }, true);
			    function copyy() {
        copyer = document.getElementById("copyer");
window.getSelection().selectAllChildren(copyer);
		document.execCommand('copy');
        window.setTimeout(function () {
            document.getElementById('copyer').remove();
        }, 100);
    }
        </script>
<style>
	@keyframes sweepmenu {
  0%    {opacity: 0; width: 1px}
  100%  {opacity: 1; width: 200px}
}
	@keyframes sweepmenud {
  0%    {display: block; opacity: 1; width: 200px}
  100%  {display: block; opacity: 0; width: 1;px}
}
            .menu
            {
                width: 200px;
                box-shadow: 3px 3px 5px #888888;
                border-style: solid;
                border-width: 1px;
                border-color: rgba(28,28,28,0.9);
                border-radius: 2px;
                padding-left: 5px;
                padding-right: 5px;
                padding-top: 3px;
                padding-bottom: 3px;
                position: fixed;
                display: none;
				overflow: hidden;
				background: rgba(28,28,28,0.9);
				z-index: 999999999999990;
            }
            
            .menu-item
            {
				color: #ffffff;
				text-shadow: 0 0 2px rgba(0,0,0,.5);
                height: 20px;
				overflow: hidden;
				z-index: 9999999999999900;
            }
            
            .menu-item:hover
            {
                background-color: rgba(100,100,100,0.9);
                cursor: pointer;
            }
	* {
    transition: -webkit-filter 0.5s cubic-bezier(0.65, 0.05, 0.36, 1),width 0.5s cubic-bezier(0.65, 0.05, 0.36, 1) background-color 0.5s cubic-bezier(0.65, 0.05, 0.36, 1),
	color 0.5s cubic-bezier(0.65, 0.05, 0.36, 1);
    will-change: -webkit-filter, width, background-color, color;
}
</style>
        <div class="menu">
			<div onclick="copyy();" class="menu-item">Copy</div>
			<hr>
            <a href="https://www.youtube.com/results?search_query=chan022bots"><div class="menu-item">Search On Youtube</div></a>
            <hr>
            <a href="https://www.google.co.th/?q=chan022bots"><div class="menu-item">Search On Google</div></a>
            <hr>
            <div class="menu-item">@chan022YT</div>
        </div>
<!-- End right click -->
<br>
<div class="container whitebg borderrad shadow">
<form method="post" name="mainform" action="" class="form-horizontal">
<input type="hidden" name="act" value="">
<fieldset>
<legend>
<h1>INSTALL</h1>
</legend>
</fieldset>
<table align="center" width="850">
<?
if($error != "")
{
	echo "<tr><td>";
	echo $error;
	echo "</td></tr></table>";
	exit();
}
if(!isset($_POST['act']) || $_POST['act'] == '')
{
?>
<tr>
<td>
<br>
<div class="hero-unit"><h1><font color="#33ccff"><?php echo $Nfg['install']['name'];?></font> Ver <?php echo $Nfg['install']['verion']; ?></h1>
<div style="font-size: 1px;" align="right">by <?php echo $Nfg['install']['by'];?></div></div>
<br>
<div class="well" align="center">
<b>Welcome to <?php echo $Nfg['install']['name']; ?> Version <?php echo $Nfg['install']['verion']; ?></b>
<br>
<br>
</div>
<br>
<div align="right"><input class="btn btn-success" type="button" value="Next" onclick="mainform.act.value='install1';mainform.submit();"></div>
</div>
<font size="1" color="#b6b6b6">install system by <?php echo $Nfg['install']['by'];?></font>
</td>
</tr>
<tr>
<td colspan="6"></td>
</tr>
</table>
</form>
</div>
<br>
</body>
</html>
<?
	exit();
}
if($_POST['act'] == 'install1')
{
?>
<tr>
<td>
<br>
<div class="hero-unit"><h1><font color="#33ccff"><?php echo $Nfg['install']['name'];?></font> Ver <?php echo $Nfg['install']['verion']; ?></h1>
<div style="font-size: 1px;" align="right">by <?php echo $Nfg['install']['by'];?></div></div>
<br>
<div class="well">Step 1 : <b>Encrypt and Decrypt Setting</b>
<br>
<br>
<label class="control-label">use </label><div class="controls"><input type="radio" name="hash" value="md5">md5 <input type="radio" name="hash" value="sha1">sha1 <input type="radio" name="hash" value="base64">base64 <p class="help-block">hash to encrypt and decrypt.</p></div>
<br>
<div><b>Decrypt</b>
<br>
<br>
<label class="control-label">decrypt save mode:</label><div class="controls"><input type="radio" name="decrypt_save" value="all">all <input type="radio" name="decrypt_save" value="some">Some <input type="radio" name="decrypt_save" value="off">off <p class="help-block">all = Save all Temp in database Best result on High storage capacity.<br>
some = Save result Temp in database Best result on low storage capacity.<br>
off = Don't save
<br>
<br>
		</p></div>
<label class="control-label">decrypt charset:</label><div class="controls"><input type="checkbox" name="a-z" value="a-z">a-z<p class="help-block">decrypt will crack with abcdefghijklmnopqrstuvwxyz letter<br></p><input type="checkbox"  name="A-Z" value="A-Z">A-Z<p class="help-block">decrypt will crack with ABCDEFGHIJKLMNOPQRSTUVWXYZ letter<br></p>
<input type="checkbox"  name="Number" value="Number">Number<p class="help-block">decrypt will crack with 0123456789 letter<br></p></div>
<br>
<label class="control-label">decrypt password max length:</label><div class="controls"><input type="text" name="decrypt_MAX_LENGTH" value="8"><p class="help-block">to crack password not in database<br></p></div>
<br>
<label class="control-label">decrypt time limit:</label><div class="controls"><input type="text" name="decrypt_time_limit" value="30"> In second<p class="help-block">how long to stop cracking password<br></p></div>
<br>
<div><b>Encrypt</b>
<br>
<br>
<label class="control-label">Encrypt save mode:</label><div class="controls"><input type="radio" name="encrypt_save" value="on">on <input type="radio" name="encrypt_save" value="off">off <p class="help-block">Save Encrypt data in database.<br></p></div>
<br>
<br>
</div>
<br>
<div align="right">
<input class="btn btn-success" type="button" value="Home" onclick="mainform.act.value='';mainform.submit();">
<input class="btn btn-success" type="button" value="Next" onclick="mainform.act.value='install2';mainform.submit();"></div>
</div>
<font size="1" color="#b6b6b6">install system by <?php echo $Nfg['install']['by'];?></font>
</td>
</tr>
<tr>
<td colspan="6"></td>
</tr>
</table>
</form>
</div>
<br>
</body>
</html>
<?
	exit();
}
if($_POST['act'] == 'install2')
{
	$_SESSION["decrypt_charset"] = "";
if($_POST['a-z'])
	{
	$_SESSION["decrypt_charset"] = $_SESSION["decrypt_charset"]."abcdefghijklmnopqrstuvwxyz";
}
if($_POST['A-Z'])
	{
	$_SESSION["decrypt_charset"] = $_SESSION["decrypt_charset"]."ABCDEFGHIJKLMNOPQRSTUVWXYZ";
}
if($_POST['Number'])
	{
	$_SESSION["decrypt_charset"] = $_SESSION["decrypt_charset"]."0123456789";
}
	$_SESSION["decrypt_time_limit"] = $_POST["decrypt_time_limit"];
	$_SESSION["encrypt_save"] = $_POST["encrypt_save"];
	$_SESSION["decrypt_MAX_LENGTH"] = $_POST["decrypt_MAX_LENGTH"];
	$_SESSION["hash"] = $_POST["hash"];
	$_SESSION["decrypt_save"] = $_POST["decrypt_save"];
	session_write_close();
?>
<tr>
<td>
<br>
<div class="hero-unit"><h1><font color="#33ccff"><?php echo $Nfg['install']['name'];?></font> Ver <?php echo $Nfg['install']['verion']; ?></h1>
<div style="font-size: 1px;" align="right">by <?php echo $Nfg['install']['by'];?></div></div>
<br>
<div class="well">Step 2 : <b>MySQL DATABASE Setting</b>
<br>
<br>
<label class="control-label">Host :</label><div class="controls"><input type="text" name="sql_host" value="localhost"><p class="help-block">Tip: Don't change it. :D</p></div>
<br>
<label class="control-label">Mysql Username :</label><div class="controls"><input type="text" name="sql_user" value="root"><p class="help-block">Mysql Username</p></div>
<br>
<label class="control-label">Mysql Password :</label><div class="controls"><input type="text" name="sql_pass" value="root"><p class="help-block">Mysql password</p></div>
<br>
<label class="control-label">Database :</label><div class="controls"><input type="text" name="sql_db" value="passwordl"><p class="help-block">to store Encrypt data</p></div>
</div>
<br>
<div align="right">
<input class="btn btn-success" type="button" value="Home" onclick="mainform.act.value='';mainform.submit();">
<input class="btn btn-success" type="button" value="Next" onclick="mainform.act.value='install3';mainform.submit();"></div>
</div>
<font size="1" color="#b6b6b6">install system by <?php echo $Nfg['install']['by'];?></font>
</td>
</tr>
<tr>
<td colspan="6"></td>
</tr>
</table>
</form>
</div>
<br>
</body>
</html>
<?
	exit();
}
if($_POST['act'] == 'install3')
{
	$_SESSION["host"] = $_POST["sql_host"];
	$_SESSION["sql_user"] = $_POST["sql_user"];
	$_SESSION["sql_pass"] = $_POST["sql_pass"];
	$_SESSION["sql_db"] = $_POST["sql_db"];
	session_write_close();
?>
<tr>
<td>
<br>
<div class="hero-unit"><h1><font color="#33ccff"><?php echo $Nfg['install']['name'];?></font> Ver <?php echo $Nfg['install']['verion']; ?></h1>
<div style="font-size: 1px;" align="right">by <?php echo $Nfg['install']['by'];?></div></div>
<br>
<div class="well">Step 3 : <b>Check Setting</b>
<br>
<br>
<div><b>hash</b> : <input type="text" value="<?=$_SESSION["hash"];?>" disabled="disabled"></div>
<br>
<div><b>decrypt save mode</b> : <input type="text" value="<?=$_SESSION["decrypt_save"];?>" disabled="disabled"></div>
<br>
<div><b>decrypt charset</b> : <input type="text" value="<?=$_SESSION["decrypt_charset"];?>" disabled="disabled"></div>
<br>
<div><b>decrypt password max length</b> : <input type="text" value="<?=$_SESSION["decrypt_MAX_LENGTH"];?>" disabled="disabled"></div>
<br>
<div><b>decrypt time limit</b> : <input type="text" value="<?=$_SESSION["decrypt_time_limit"];?>" disabled="disabled"></div>
<br>
<div><b>Encrypt save mode</b> : <input type="text" value="<?=$_SESSION["encrypt_save"];?>" disabled="disabled"></div>
<br>
<div><b>Host</b> : <input type="text" value="<?=$_SESSION["host"];?>" disabled="disabled"></div>
<br>
<div><b>MySQL Username</b> : <input type="text" value="<?=$_SESSION["sql_user"];?>" disabled="disabled"></div>
<br>
<div><b>MySQL Password</b> : <input type="text" value="<?=$_SESSION["sql_pass"];?>" disabled="disabled"></div>
<br>
</div>
<br>
<div align="right">
<input class="btn btn-success" type="button" value="Home" onclick="mainform.act.value='';mainform.submit();">
<input class="btn btn-success" type="button" value="INSTALL!" onclick="mainform.act.value='installp';mainform.submit();"></div>
</div>
<font size="1" color="#b6b6b6">install system by <?php echo $Nfg['install']['by'];?></font>
</td>
</tr>
<tr>
<td colspan="6"></td>
</tr>
</table>
</form>
</div>
<br>
</body>
</html>
<?
	exit();
}

if($_POST['act'] == 'installp')
{	
// Turn off output buffering
ini_set('output_buffering', 'off');
//Flush (send) the output buffer and turn off output buffering
//ob_end_flush();
while (@ob_end_flush());
         
// Implicitly flush the buffer(s)
ini_set('implicit_flush', true);
ob_implicit_flush(true);
echo '<style>
#install-area                      { height: 300px; overflow: auto; border: 1px solid #666; padding: 20px; background: white; }
#install-area span                 { color: white; background: #333; padding: 4px 8px; -moz-border-radius: 5px; -webkit-border-radius: 8px; margin: 0 5px 0 0; }
#install-area p                    { padding: 8px 0; border-bottom: 1px solid #ccc;ease-in-out;}
</style>';
ob_flush();
flush();
?>
<div class="well">Step 4 : <b>Installing....</b>
<?php
	echo '<div id="install-area">';
	echo '<p>Creating config file</p>';
	ob_flush();
	flush();
	$strFileName = "config.php";
	$objFopen = fopen($strFileName, 'w');
	$strText1 = "<?
	set_time_limit(".$_SESSION["decrypt_time_limit"]."); //set time limit in sec
// ENCODE SETTING
	\$Cfg[\"hash\"] = \"".$_SESSION["hash"]."\";
// DATABASE SETTING
	\$Cfg[\"mysql\"][\"host\"] = \"".$_SESSION["host"]."\"; //Tip: Don't change it. :D
	\$Cfg[\"mysql\"][\"user\"] = \"".$_SESSION["sql_user"]."\"; // mysql username
	\$Cfg[\"mysql\"][\"pass\"] = \"".$_SESSION["sql_pass"]."\"; // mysql password
	\$Cfg[\"mysql\"][\"db\"] = \"".$_SESSION["sql_db"]."\"; //database to store
//=================================================
// Decrypt SETTING
	\$Cfg[\"decrypt\"][\"save\"] = \"".$_SESSION["decrypt_save"]."\";
		//all = Save all Temp in database Best result on High storage capacity.
		//some = Save result Temp in database Best result on low storage capacity.
		//off = Don't save
	\$Cfg[\"decrypt\"][\"charset\"] = \"".$_SESSION["decrypt_charset"]."\";
	\$Cfg[\"decrypt\"][\"PASSWORD_MAX_LENGTH\"] = \"".$_SESSION["decrypt_MAX_LENGTH"]."\";
	\$Cfg[\"decrypt\"][\"HASH_ALGO\"] = \$Cfg[\"hash\"];
//================================================
// Encrypt SETTING
	\$Cfg[\"encrypt\"][\"save\"] = \"".$_SESSION["encrypt_save"]."\"; 
		//on = save encrypt data in database 
		//off = don't save
//Don't edit This below
//=================================================
\$db = \$Cfg[\"mysql\"][\"db\"];
\$hashl = \$Cfg[\"decrypt\"][\"HASH_ALGO\"];
mysql_connect(\$Cfg[\"mysql\"][\"host\"],\$Cfg[\"mysql\"][\"user\"],\$Cfg[\"mysql\"][\"pass\"]);
mysql_select_db(\$db);
?>

";
	ob_flush();
	flush();
	fwrite($objFopen, $strText1);
	if($objFopen)
	{
		echo "<p><font color='#339900'>Create config file success.</font></p>";
	}
	else
	{
		echo "<p><font color='#ff0000'>Create config file fail.</font></p>";
	}
	ob_flush();
	flush();
	fclose($objFopen);
	echo '<p>Connecting to mysql</p>';
	ob_flush();
	flush();
	$objQuery = mysql_connect($_SESSION["sql_host"],$_SESSION["sql_user"],$_SESSION["sql_pass"]);
		if($objQuery)
		{
			echo "<p><font color='#339900'>Connect to mysql '".$_SESSION["host"]."' success.</font></p>";
			$count++;
		}
		if(!$objQuery)
		{
			echo "<p><font color='#ff0000'>Connect to mysql '".$_SESSION["host"]."' fail.</font></p>";
		}
	ob_flush();
	flush();
	echo '<p>Creating DATABASE</p>';
	ob_flush();
	flush();
	$objQuery = mysql_query("CREATE DATABASE IF NOT EXISTS `".$_SESSION["sql_db"]."` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;");
		if($objQuery)
		{
			echo "<p><font color='#339900'>Create database '".$_SESSION["sql_db"]."' success.</font></p>";
			$count++;
		}
		if(!$objQuery)
		{
			echo "<p><font color='#ff0000'>Create database '".$_SESSION["sql_db"]."' fail.</font></p>";
		}
	ob_flush();
	flush();
	mysql_select_db($_SESSION["sql_db"]);
	echo "<p>Creating Table '".$_SESSION["hash"]."'</p>";
	ob_flush();
	flush();
	$objQuery = mysql_query("CREATE TABLE IF NOT EXISTS `".$_SESSION["hash"]."` (
  `data` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
		if($objQuery)
		{
			echo "<p><font color='#339900'>Create table '".$_SESSION["hash"]."' success.</font></p>";
			$count++;
		}
		if(!$objQuery)
		{
			echo "<p><font color='#ff0000'>Create table '".$_SESSION["hash"]."' fail.</font></p>";
		}
	ob_flush();
	flush();
?>
<?
	echo $error;
?>
install complete!
</div>
<br>
</div>
<br>
<div align="right">
<input class="btn btn-success" type="button" value="Next" onclick="window.location = './index.php'"></div>
</div>
<font size="1" color="#b6b6b6">install system by <?php echo $Nfg['install']['by'];?></font>
</td>
</tr>
<tr>
<td colspan="6"></td>
</tr>
</table>
</form>
</div>
<br>
</body>
</html>
</div>
<?php
exit();
}
?>