

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>
<body>
    

<?php echo @ $_GET['not_admin'];
?>
<?php echo @ $_GET['Logged_Out'];
?>

<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name="login" >Submit</button>
</form>







</body>
</html>


<?php
session_start();

include("includes/db.php");


if(isset($_POST['login'])) {

    $email = $_POST['email'];
    $pass = $_POST['password'];

     $sel_user="select * from admin where user_email='$email' AND user_pass='$pass'";
    $run_user=mysqli_query($con, $sel_user);
       $check_user=mysqli_num_rows($run_user);

       if($check_user==0){

        echo "<script>alert('Email or Password is wrong')</script>";

       }else{

           $_SESSION['user_email']=$email;
           
            echo "<script>window.open('index.php','_self')</script>";
          

       }

}




?>