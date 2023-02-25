
<?php
ob_start();
 require("../../config.php");

require_once("../includes/header.php");


if(isset($_GET['id']))
{
    $data=delete_data('cities','id_city',$_GET['id']);
    $success_message=$data;
    header("refresh:2;url=".BURLA."/cities/view.php");

}

require(BD."/functions/message.php");
ob_end_flush();
?>
