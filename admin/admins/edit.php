<?php

ob_start();
require_once("../../config.php");
require_once("../includes/header.php");



if(isset($_GET['id']))
{
    $data=get_row('admin','id_admin',$_GET['id']);
    if(!$data){header("location:".BURLA);}

}else
{
    header("location:".BURLA);
}




ob_end_flush();

?>


<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Admin</h3>
        <form method="post" action="<?=BURLA."/admins/update.php"?>">
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" value="<?=$data['name_admin']?>" class="form-control" >
                <input type="hidden" name="id_admin" value="<?=$data['id_admin']?>" class="form-control" >
            </div>

            <div class="form-group">
                <label >Email </label>
                <input type="text" name="email"  value="<?=$data['email_admin']?>" class="form-control" >
            </div>

            <div class="form-group">
                <label >Password </label>
                <input type="password" name="password" value="<?=$data['password']?>" class="form-control" >
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>

<?php require_once("../includes/footer.php");?>