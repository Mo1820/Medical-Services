<?php require("../../config.php");

require_once("../includes/header.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $data=get_row('cities','id_city',$id);
    if(!$data){header("location:".BURLA);}
    $city_id=$data['id_city'];
}else{
    header("location:".BURLA);
}

?>
<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New City</h3>
        <form method="post" action="<?= BURLA."/cities/update.php"; ?>">
            <div class="form-group">
                <label >Name Of City</label>
                <input type="text" name="name" class="form-control" value="<?=$data['name_city'];?>" >
                <input type="hidden" name="city_id" class="form-control"  value="<?= $city_id ;?>">
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>

    </div>
