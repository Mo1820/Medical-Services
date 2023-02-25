<?php
require_once("../../config.php");
require_once("../includes/header.php");




        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['password'];

            if(Is_empty($name) & Is_empty($email) & Is_empty($password)){
                if(valid_email($email))
                {
                        
                    $data="INSERT INTO admin(`name_admin`, `email_admin`, `password`) 
                    VALUES ('$name', '$email','$password')"; 
                    $success_message=db_insert($data);
                }
                else{
                    $error_message="PLease Fill valid Email";
                }
            }
            else{
                $error_message="PLease Fill All fields";

            }

        }

        require(BD."/functions/message.php");








?>


<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Admin</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <label >Email </label>
                <input type="text" name="email"  class="form-control" >
            </div>

            <div class="form-group">
                <label >Password </label>
                <input type="password" name="password" class="form-control" >
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>

<?php require_once("../includes/footer.php");?>