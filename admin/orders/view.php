<?php require("../../config.php");

require_once("../includes/header.php");
?>

<div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All Orders</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PHONE</th>
                    <th scope="col">NOTES</th>
                    <th scope="col">DATA</th>
                    <th scope="col">SERVICE</th>
                    <th scope="col">CITY</th>
                </tr>
                <?php
                
                $data=get_rows('orders');
                
            
                foreach($data as $i)
                {
                    $id_city=$i['city_id'];
                    $id_ser=$i['ser_id'];

                    $sql1="SELECT `cities`.`name_city` FROM `cities`INNER JOIN `orders` ON `cities`.`id_city`=$id_city";
                    $name_city=get_data($sql1);

                    $sql2="SELECT `services`.`name_ser` FROM `services`INNER JOIN `orders` ON `services`.`id_ser`=$id_ser";
                    $name_ser=get_data($sql2);
                    
                    ?>
                <tr class="text-center">
                    <th scope="col"><?=$i['order_id']?></th>
                    <th scope="col"><?=$i['name_order']?></th>
                    <th scope="col"><?=$i['email_order']?></th>
                    <th scope="col"><?=$i['number_phone']?></th>
                    <th scope="col"><?=$i['notes']?></th>
                    <th scope="col"><?=$i['created_at']?></th>
                    <th scope="col"><?=$name_ser['name_ser']?></th>
                    <th scope="col"><?=$name_city['name_city']?></th>
                </tr>
        <?php
        };
                
                ?>
            </thead>
            <tbody>
                
                
            </tbody>












 <?php   require("../includes/footer.php");