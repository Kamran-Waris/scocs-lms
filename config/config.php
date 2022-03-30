<?php

$base_url = 'http://localhost/scocs-lms/';

$host_name = 'localhost';
$db_name = 'scocs_lms_db';
$db_username = "root";
$db_password = "";

$conn = new mysqli($host_name,$db_username,$db_password,$db_name);

if(!$conn)
{
	die('Connection Failed : ' . mysqli_connect_error());
}




?>