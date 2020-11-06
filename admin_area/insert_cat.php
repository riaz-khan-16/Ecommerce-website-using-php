

<?php


if(!isset($_SESSION['user_email'])){


    echo "<script>window.open('login.php','_self')</script>";
    
    
    
    
    
    }else{
?>







<form action="" method="post">


<b>Insert New Category:</b>
<input type="text" name="new_cat"/>
<input type="submit" name="add_cat" value="Add Category" />




 




</form>

<?php



if (isset($_POST['add_cat'])){


    include("includes/db.php");

    $new_cat=$_POST['new_cat'];
    
    $insert_cat="insert into categories (category_title) values('$new_cat')";
    
    $run_cat=mysqli_query($con,$insert_cat);
    
    if($run_cat){
    
     
    
        echo "<script>alert('A new Category Has been added')</script> ";
    
        echo "<script>window.open('index.php?view_cats','_self')</script> ";
    
    }
    


}


?>
<?php
    }
    ?>