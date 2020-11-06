
<?php


if(!isset($_SESSION['user_email'])){


    echo "<script>window.open('login.php','_self')</script>";
    
    
    
    
    
    }else{
?>









<?php
include("includes/db.php");

if(isset($_GET['edit_brand'])){

$brand_id=$_GET['edit_brand'];
$get_brand="select * from brand where brand_id='$brand_id'";
$run_brand=mysqli_query($con,$get_brand);

$row_brand=mysqli_fetch_array($run_brand);

$brand_id=$row_brand['brand_id'];
$brand_title=$row_brand['brand_title'];

}

?>



  

<form action="" method="post">


<b>upadate Brands:</b>
<input type="text" name="new_brand" value="<?php echo  $brand_title ?>"/>
<input type="submit" name="update_brand" value="Update" />




 




</form>

<?php



if (isset($_POST['update_brand'])){

    $update_id=$brand_id;
    include("includes/db.php");

    $new_brand=$_POST['new_brand'];
    
    $update_brand="update brand set brand_title ='$new_brand' where brand_id='$update_id'";
    
    $run_brand=mysqli_query($con,$update_brand);
    
    if($run_brand){
    
     
    
        echo "<script>alert('brand Has been updated')</script> ";
    
        echo "<script>window.open('index.php?view_brands','_self')</script> ";
    
    }
    


}


?>



<?php }?>



