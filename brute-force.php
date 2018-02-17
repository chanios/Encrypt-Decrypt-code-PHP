<?php
$time_start = getmicrotime();
require('config.php');
$db = $Cfg["mysql"]["db"];
$hashl = $Cfg["decrypt"]["HASH_ALGO"];
function getmicrotime() {
   list($usec, $sec) = explode(" ",microtime());
   return ((float)$usec + (float)$sec);
}
$hash_password = $_GET['md5'];
if(mysql_num_rows(mysql_query("SELECT * FROM `$hashl` WHERE hash ='$hash_password'"))>0){
$res=mysql_query("SELECT * FROM `$hashl` WHERE hash = '$hash_password'");
$getdata=mysql_fetch_array($res);
				$log['hash'] = $hash_password;
                $log['output'] = $getdata['data'];
                $time_end = getmicrotime();
                $time = $time_end - $time_start;
                $log['use'] = $time;
				echo json_encode($log);
                exit;
}
if(mysql_num_rows(mysql_query("SELECT * FROM `$hashl` WHERE hash ='$hash_password'"))==0){
// algorithm of hash
// see http://php.net/hash_algos for available algorithms
define('HASH_ALGO', $hashl);
if($hashl == "base64"){
  define('HASH_ALGO', "base64_decode");
}
// max length of password to try
define('PASSWORD_MAX_LENGTH', $Cfg["decrypt"]["PASSWORD_MAX_LENGTH"]);

$charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456879';
//$charset .= '0123456789';
//$charset .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//$charset .= '~`!@#$%^&*()-_\/\'";:,.+=<>? ';
$str_length = strlen($charset);
// Get MD5 checksum from command line

$save = $Cfg["decrypt"]["save"];
function check($password)
{
        global $save, $save;
        global $hash_password, $time_start;
        if($save == "all") {
        if(mysql_num_rows(mysql_query("SELECT * FROM `$hashl` WHERE `hash` ='$password'"))==0){
			$md555 = hash(HASH_ALGO, $password);
			mysql_query("INSERT INTO `md5` (`data`, `hash`) VALUES ('$password', '$md555')");
    }
  }
        if (hash(HASH_ALGO, $password) == $hash_password) {
          if($save == "some") {
          if(mysql_num_rows(mysql_query("SELECT * FROM `$hashl` WHERE `hash` ='$password'"))==0){
  			mysql_query("INSERT INTO `md5` (`data`, `hash`) VALUES ('$password', '$hash_password')");
      }
    }
				$log['input'] = $hash_password;
                $log['output'] = $password;
                $time_end = getmicrotime();
                $time = $time_end - $time_start;
                $log['use'] = $time;
				echo json_encode($log);
                exit;
        }
}


function recurse($width, $position, $base_string)
{
        global $charset, $str_length;

        for ($i = 0; $i < $str_length; ++$i) {
                if ($position  < $width - 1) {
                        recurse($width, $position + 1, $base_string . $charset[$i]);
                }
                check($base_string . $charset[$i]);
        }
}

for ($i = 1; $i < PASSWORD_MAX_LENGTH + 1; ++$i) {
        $time_check = getmicrotime();
        $time = $time_check - $time_start;
        recurse($i, 0, '');
}

}
?>
