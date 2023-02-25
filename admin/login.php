
<?php
require_once("../config.php");
if(isset($_SESSION['id'])){
    header("location:".BURLA."/index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css" >

    <title>Dashboard | Login</title>
</head>
<body>
    <?php
    
    if(isset($_POST['submit'])){
            $email=$_POST['email'];
            $password=$_POST['password'];

            if(Is_empty($email) & Is_empty($password)){
                if(valid_email($email)){
                    $data=get_row('admin','email_admin',$email);
                    
                    if($data)
                    {

                        if($password ==$data['password'])
                        {
                            $_SESSION['id']=$data['id_admin'];
                            $_SESSION['email']=$data['email_admin'];
                            $_SESSION['password']=$data['password'];
                        
                            header("location:".BURLA."/index.php");
                        }else
                        {
                            $error_message="Please Fill Valid password ";
                        }
                    }else
                    {
                        $error_message="THIS EMAIL NOT EXIST ";
                    }
                    
                }else{
                    $error_message="Please Fill Valid Email ";
                }
            }
            else
            {
                $error_message="Please Fill ALL Fields";
            }
    }

   
    
    ?>
        <?php require(BD."/functions/message.php");?>

        <div class="cont-login d-flex align-items-center justify-content-around">
    
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="border p-5" >
                <div class="row">
                    
                    
                
                    <div class="col-sm-12  ">
                        <h3 class="text-center p-3 text-white">Login</h3>
                    </div>
                    <div class="col-sm-6 offset-sm-3 ">
                        <div class="form-group">
                            <label >Email </label>
                            <input type="text" name="email" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label >Password </label>
                            <input type="password" name="password" class="form-control" >
                        </div>

                        <div class="form-group">
                           
                            <input type="submit" value="Submit"name="submit" class="form-control btn btn-success"   >
                        </div>
                        <a style="width:100%;font-weight:bold;" class="btn btn-warning" href="<?=BURL?>" role="button">HOME</a>
                    </div>
                </div>
                
            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo ASSETS; ?>/js/jquery-3.4.1.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/popper.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/bootstrap.min.js" ></script>
