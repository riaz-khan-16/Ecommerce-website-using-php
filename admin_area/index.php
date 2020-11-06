<?php


session_start();
if(!isset($_SESSION['user_email'])){


echo "<script>window.open('login.php','_self')</script>";





}else{

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is your admin panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/responsive.css">



</head>
<body>

<div class="container main" >
    <div class="row">

            <div class="col-md-8 left">

             <h1>Hi Galib Khan It is your Admin panel</h1>

               <div>

               <?php
                   if(isset($_GET['insert_product'])){

                        include("insert_product.php");

                   }

                   if(isset($_GET['view_products'])){

                    include("view_products.php");

                    }


                    if(isset($_GET['edit_pro'])){

                        include("edit_pro.php");
    
                        }

                    if(isset($_GET['insert_cat'])){

                            include("insert_cat.php");
        
                         }

                      
                         
                         if(isset($_GET['view_cats'])){

                            include("view_cats.php");
        
                         }

                         if(isset($_GET['edit_cats'])){

                            include("edit_cats.php");
        
                         }


                         if(isset($_GET['insert_brand'])){

                            include("insert_brand.php");
        
                         }

                         if(isset($_GET['view_brands'])){

                            include("view_brands.php");
        
                         }

                         if(isset($_GET['edit_brands'])){

                            include("edit_brands.php");
        
                         }
                         
               
               
               ?>
               </div>


            </div>

            <div class="col-md-4 right">
                <h5>Edit Content</h5>
                      <ul>
                              <li><a href="index.php?insert_product"> Insert New Product</a></li>
                              <li> <a href="index.php?view_products"> View All Products</a></li>  
                              <li> <a href="index.php?insert_cat"> Insert New Category</a></li> 
                              <li> <a href="index.php?view_cats"> View All Categories </a></li>
                              <li> <a href="index.php?insert_brand"> Insert New Brand</a></li>
                              <li> <a href="index.php?view_brands"> View All Brands</a></li>
                              <li> <a href="index.php?view_customers"> View Customers</a></li>
                              <li>  <a href="index.php?view_orders"> View Orders</a></li>
                              <li>  <a href="logout.php?logout"> Admin LogOut</a></li>
                              
                     
                     
                     
                     
                     
                    
                      </ul>
                     

            </div>



    </div>
</div>
    







</body>
</html>

<?php
}

?>