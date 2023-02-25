<?php require("../../config.php");

require_once("../includes/header.php");

if(isset($_POST['submit']))
{
    $city=$_POST['name'];
    
    if(Is_empty($city))
    {
        if(valid_length($city))
        {
                
            $data="INSERT INTO cities(`name_city`) 
            VALUES ('$city')"; 
            $success_message=db_insert($data);
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
?>
<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New City</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label >Name Of City</label>
                <input type="text" name="name" class="form-control" >
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>

    </div>















 <?php   require("../includes/footer.php");
 ?>