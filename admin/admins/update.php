<?php

ob_start();
require_once("../../config.php");
require_once("../includes/header.php");



if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $id=$_POST['id_admin'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    if(Is_empty($name) & Is_empty($email) & Is_empty($password)){
        if(valid_email($email))
        {
            if(valid_length($password))
            {
                $sql="UPDATE  `admin` SET `name_admin`='$name',`email_admin`='$email',`password`='$password' WHERE `id_admin`='$id'";
                $success_message=db_update($sql);
                header("refresh:2;url=".BURLA."/admins/view.php");


            }else
            {
                $error_message="PLEASE FILL VALID STRONG PASSWORD";

            }
        }else
        {
            $error_message="PLEASE FILL VALID EMAIL";

        }

    }else
    {
        $error_message="PLEASE FILL  FELIDS";
    }

}




require(BD."/functions/message.php");
ob_end_flush();

?>
