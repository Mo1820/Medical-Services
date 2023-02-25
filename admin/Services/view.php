<?php require("../../config.php");

require_once("../includes/header.php");
?>

<div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All Services</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                $data=get_rows('services');
            
                foreach($data as $row)
                {
                ?>

                <tr class="text-center">
                    <th scope="col"><?= $row['id_ser']?></th>
                    <th scope="col"><?= $row['name_ser']?></th>

                <td class="text-center">
                        <a href="<?= BURLA."/Services/edit.php?id=".$row['id_ser']?>" class="btn btn-info">Edit</a>
                        <a href="<?= BURLA."/Services/delete.php?id=".$row['id_ser']?>"class="btn btn-danger delete" >Delete</a>
                    </td>
                </tr>
                <?php };?>
                
            </tbody>



            <?php   require("../includes/footer.php");