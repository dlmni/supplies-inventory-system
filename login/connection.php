<?php

$dbhost = "localhost";
$dbuser = "group_11_SAD";
$dbpass = "12345678";
$dbname = "db_inventory";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}