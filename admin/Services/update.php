<?php
ob_start();
require("../../config.php");

include("../includes/header.php");


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $id=$_POST['service_id'];
    if(Is_empty($name))
    {
        if(valid_length($name))
        {
                
            $sql="UPDATE `services` SET `name_ser`='$name' Where `id_ser`='$id'";
            $success_message=db_update($sql);
            header("refresh:2;url=".BURLA."/Services/view.php");
        }
        else{
            $error_message="PLEASE FILL A VALID SERVICE ";
        }
    }
    else
    {
        $error_message="PLEASE FILL A FELID ";
    }
    
        
        
}

require(BD."/functions/message.php");
ob_end_flush();
?>
