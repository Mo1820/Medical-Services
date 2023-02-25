<?php require("../../config.php");

require_once("../includes/header.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $data=get_row('Services','id_ser',$id);
    if(!$data){header("location:".BURLA);}
    $service_id=$data['id_ser'];
    
}else{
    header("location:".BURLA);
}

?>
<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Service</h3>
        <form method="post" action="<?= BURLA."/Services/update.php"; ?>">
            <div class="form-group">
                <label >Name Of City</label>
                <input type="text" name="name" class="form-control" value="<?=$data['name_ser'];?>" >
                <input type="hidden" name="service_id" class="form-control"  value="<?= $service_id ;?>">
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>

    </div>
