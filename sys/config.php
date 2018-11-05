<?php
//链接数据库
$host = '134.175.80.128';
$username = 'root';
$password = '123456778';
$port = '3306';
$database = 'zvuldrill';
$dbc = mysqli_connect($host, $username, $password, $database);
if (!$dbc)
{
	die('Could not connect: ' . mysql_error());
}

//启用session
session_start();

//根目录
$basedir = '/ZVulDrill'; 

//载入函数库
include_once('lib.php');
?>
