<?php

require_once '../../config/config.php';

session_start();

if(isset($_SESSION['teacher_logged_in']))
{
    session_destroy();
    header("Location: ".$base_url);
}

?>