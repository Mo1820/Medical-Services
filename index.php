<?php 
require_once("config.php");
require_once("include/header.php");

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone'];
    $service=$_POST['Service'];
    $city=$_POST['city'];
    $message=$_POST['message'];
    // to get id of city selected
    $city_data=get_row('cities','name_city',$city);
    $city_id=$city_data['id_city'];
     // to get id of service selected
    $ser_data=get_row('services','name_ser',$service);
    $ser_id=$ser_data['id_ser'];

    $sql="INSERT INTO `orders`(`name_order`,`email_order`,`number_phone`,`notes`,`ser_id`,`city_id`)
    VALUES('$name','$email',$number,'$message',$ser_id,$city_id)";
    
    $success_message=db_insert($sql);
}
require(BD."/functions/message.php");

?>
<body style="background-image:url(assets/images/bg-1.jpg)">
    

<div class="container">
    <!-- <div class=" text-center mt-5 ">
        <h1 >Bootstrap Contact Form</h1>
            
        
    </div> -->
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
        
                <div class = "container">
                <form method="post" action="<?= $_SERVER['PHP_SELF'];?>" >

                

                <div class="controls">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_name">Name*</label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your name *" required="required" data-error="Firstname is required.">
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_email">Email*</label>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_need">Choose Service*</label>
                                <select id="form_need" name="Service" class="form-control" required="required" data-error="Please specify your need.">
                                    <option value="" selected disabled>--Select Your Services--</option>
                                    <?php 
                                    $data=get_rows('services');
                                    foreach($data as $i){
                                        ?>
                                        <option><?= $i['name_ser']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_need">Choose City*</label>
                                <select id="form_need" name="city" class="form-control" required="required" data-error="Please specify your need.">
                                    <option value="" selected disabled>--Select Your city--</option>
                                    <?php 
                                    $data=get_rows('cities');
                                    foreach($data as $i){
                                        ?>
                                        <option ><?= $i['name_city']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_email">Phone*</label>
                                <input id="form_email" type="text" name="phone" class="form-control" placeholder="Please enter your phone *" required="required" data-error="Valid email is required.">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_message">Notes </label>
                                <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea
                                    >
                                </div>

                            </div>


                        <div class="col-md-12">
                            
                            <input type="submit" name="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Send Message" >
                        
                    </div>
            
                    </div>


            </div>
            </form>
            </div>
                </div>


        </div>
            <!-- /.8 -->

    </div>
    <!-- /.row-->

    </div>
</div>

</body>


<?php
require_once("include/footer.php");
?>