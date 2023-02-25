
<?php
ob_start();
require("../../config.php");

include("../includes/header.php");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $id=$_POST['city_id'];
    
    if(Is_empty($name))
    {
        if(valid_length($name))
        {
                
            $sql="UPDATE `cities` SET `name_city`='$name' Where `id_city`='$id'";
            $success_message=db_update($sql);
            header("refresh:2;url=".BURLA."/cities/view.php");
        }
        else{
            $error_message="PLEASE FILL A VALID CITY ";
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
