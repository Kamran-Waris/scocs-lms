<?php

require_once '../../config/config.php';

session_start();

if(isset($_SESSION['admin_logged_in']))
{
    session_destroy();
    header("Location: ".$base_url);
}

?>