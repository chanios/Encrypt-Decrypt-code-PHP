<?php
require('config.php');
$time_start = getmicrotime();
function getmicrotime() {
   list($usec, $sec) = explode(" ",microtime());
   return ((float)$usec + (float)$sec);
}
$hashl = $Cfg["decrypt"]["HASH_ALGO"];
$string = $_GET['str'];
if(mysql_num_rows(mysql_query("SELECT * FROM `$hashl` WHERE data ='$string'"))>0){
$res=mysql_query("SELECT * FROM `$hashl` WHERE data = '$string'");
$getdata=mysql_fetch_array($res);
$log['output'] = $getdata['hash'];
$time_end = getmicrotime();
$time = $time_end - $time_start;
$log['use'] = $time;
echo json_encode($log);
                exit;
}
$log['input'] = $string;
if($hashl == "md5"){
$output = md5($string);
}
if($hashl == "sha1"){
$output = sha1($string);
}
if($hashl == "base64"){
$output = base64_encode($string);
}
if($Cfg["encrypt"]["save"] == "on"){
if(mysql_num_rows(mysql_query("SELECT * FROM `$hashl` WHERE `data`='$string'"))==0){
mysql_query("INSERT INTO `$hashl` (`data`, `hash`) VALUES ('$string', '$output')");
$log['output'] = $output;
$time_end = getmicrotime();
$time = $time_end - $time_start;
$log['use'] = $time;
echo json_encode($log);
exit;
}}
$log['output'] = $output;
$time_end = getmicrotime();
$time = $time_end - $time_start;
$log['use'] = $time;
echo json_encode($log);
exit;
?>
