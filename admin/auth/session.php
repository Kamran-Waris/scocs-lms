<?php require_once('../../config/config.php'); ?> 
<?php

session_start();

if(!isset($_SESSION['admin_logged_in']))
{
    header("Location: ".$base_url);
}



?>