
<?php


if(!isset($_SESSION['user_email'])){


    echo "<script>window.open('login.php','_self')</script>";
    
    
    
    
    
    }else{
?>



<form action="" method="post">


<b>Insert New Brand:</b>
<input type="text" name="new_brand"/>
<input type="submit" name="add_brand" value="Add Brand" />




 




</>

<?php



if (isset($_POST['add_brand'])){


    include("includes/db.php");

    $new_brand=$_POST['new_brand'];
    
    $insert_brand="insert into brand (brand_title) values('$new_brand')";
    
    $run_brand=mysqli_query($con,$insert_brand);
    
    if($run_brand){
    
     
    
        echo "<script>alert('A new Brand Has been added')</script> ";
    
        echo "<script>window.open('index.php?view_brands','_self')</script> ";
    
    }
    


}


?>






<?php }?>