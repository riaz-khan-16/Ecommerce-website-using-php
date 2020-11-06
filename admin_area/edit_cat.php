<?php


if(!isset($_SESSION['user_email'])){


    echo "<script>window.open('login.php','_self')</script>";
    
    
    
    
    
    }else{
?>








<?php
include("includes/db.php");

if(isset($_GET['edit_cat'])){

$cat_id=$_GET['edit_cat'];
$get_cat = "select * from categories where category_id='$cat_id'";
$run_cat=mysqli_query($con,$get_cat);

$row_cat=mysqli_fetch_array($run_cat);

$cat_id=$row_cat['category_id'];
$cat_title=$row_cat['category_title'];

}

?>



  

<form action="" method="post">


<b>upadate categorie:</b>
<input type="text" name="new_cat" value="<?php echo  $cat_title ?>"/>
<input type="submit" name="update_cat" value="Update" />




 




</form>

<?php



if (isset($_POST['update_cat'])){

    $update_id=$cat_id;
    include("includes/db.php");

    $new_cat=$_POST['new_cat'];
    
    $update_cat="update categories set category_title ='$new_cat' where category_id='$update_id'";
    
    $run_cat=mysqli_query($con,$update_cat);
    
    if($run_cat){
    
     
    
        echo "<script>alert('Category Has been updated')</script> ";
    
        echo "<script>window.open('index.php?view_cats','_self')</script> ";
    
    }
    


}


?>





<?php }?>