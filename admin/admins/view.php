<?php require("../../config.php");

require_once("../includes/header.php");
?>

<div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All Cities</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                
        <?php
        $data=get_rows('admin');
        foreach($data as $i){
    ?>
        <tr class="text-center">
                    <th scope="col"><?=$i['id_admin']?></th>
                    <th scope="col"><?=$i['name_admin']?></th>
                    <th scope="col"><?=$i['email_admin']?></th>
                    <td class="text-center">
                        <a href="<?=BURLA."/admins/edit.php?id=".$i['id_admin']?>" class="btn btn-info">Edit</a>
                        <a href="<?=BURLA."/admins/delete.php?id=".$i['id_admin']?>"class="btn btn-danger delete" >Delete</a>
                    </td>
                </tr>

       <?php };
        ?>
                
            </tbody>












 <?php   require("../includes/footer.php");