<?php
require_once("../config.php");


$logout=session_destroy();

if($logout)
{
    header("location:".BURLA."/login.php");
}










?>