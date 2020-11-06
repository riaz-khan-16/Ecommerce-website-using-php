


<?php


if(!isset($_SESSION['user_email'])){


    echo "<script>window.open('login.php','_self')</script>";
    
    
    
    
    
    }else{
?>








<!DOCTYPE html>

<?php
include("includes/db.php");


if(isset($_GET['edit_pro'])){


    $get_id=$_GET['edit_pro'];

    $get_pro="select * from products where product_id='$get_id'";
    $run_pro=mysqli_query($con,$get_pro);
    $i=0;


    $row_pro=mysqli_fetch_array($run_pro);
          
     $pro_title=$row_pro['product_title'];
     $pro_id=$row_pro['product_id'];
 
     $pro_image=$row_pro['product_image'];
     $pro_price=$row_pro['product_price'];
     $pro_cat=$row_pro['product_cat'];
     $pro_brand=$row_pro['product_brand'];
     $pro_desc=$row_pro['product_desc'];
     $pro_keywords=$row_pro['product_keywords'];

        
    //  $get_cat="select * from categories where category_id='$pro_cat'";
    //  $run_cat=mysqli_query($con,$get_cat);
    //  $row_cat=mysqli_fetch_array($run_cat);
    //  $cat_title=$row_cat['category_title'];


    //  $get_brand="select * from brands where brand_id='$pro_brand'";
    //  $run_brand=mysqli_query($con,$get_brand);
    //  $row_brand=mysqli_fetch_array($run_brand);
    //  $brand_title=$row_brand['brand_title'];




}


?>








<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="insert_product.css">
</head>
<body>
    
    <h1 class="heading">Update Product</h1>


<form action="" method="post" enctype="multipart/form-data">



<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Edit & Upadate Product </th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Product Id</th>
      <td><input type="text" name="product_id" value="<?php  echo $pro_id;?>"></td>
      
    </tr>
    <tr>
      <th scope="row">Product Category</th>
      <td> 
       <select name="product_cat" id="">
          <option value=""></option>
<?php
$get_cats="select * from categories ";
$run_cats=mysqli_query($con,$get_cats);


while($row_cats=mysqli_fetch_array($run_cats)){

    $cat_id=$row_cats['category_id'];
    $cat_title=$row_cats['category_title'];

    echo "<option>$cat_title </option>";
}

?>


      </select>
    
    </td>
      
    </tr>
    <tr>
      <th scope="row">Product Brand</th>
      <td >
    
    <select name="product_brand" id="">
              <option value=""></option>
                     <?php
                     
                     global $con;
  
  $get_brands="select * from brand ";
  $run_brands=mysqli_query($con,$get_brands);
  
  
  while($row_brands=mysqli_fetch_array($run_brands)){
  
      $brand_id=$row_brands['brand_id'];
      $brand_title=$row_brands['brand_title'];
  
      echo "<option>$brand_title </option>";
  
  
  
  }
                     ?>

    </select>
    
    
    
    
    </td>
      
    </tr>

    <tr>
      <th scope="row">Product Title</th>
      <td ><input type="text" name="product_title" value="<?php  echo $pro_title;?>"></td>
      
    </tr>
    <tr>
      <th scope="row">Product Price</th>
      <td ><input type="text" name="product_price" value="<?php  echo $pro_price;?>"></td>
      
    </tr>


    <tr>
      <th scope="row">Product Description</th>
      <td ><input type="text" name="product_desc" value="<?php  echo $pro_desc;?>"></td>
      
    </tr>
    <tr>
      <th scope="row">Product Image</th>
      <td ><input type="file" name="product_image" value="<?php  echo $pro_image;?>"><img src="product_images/<?php echo $pro_image; ?>"  style="height:50px; width:50px;" alt=""></td>
      
    </tr>

    <tr>
      <th scope="row">Product Keywords</th>
      <td ><input type="text" name="product_keywords" value="<?php  echo $pro_keywords;?>"></td>
      
    </tr>
    <tr>
      <th scope="row">Submit</th>
      <td ><input type="submit" name="update_product" value="Update"></td>
      
    </tr>
  </tbody>
</table>









</form>







</body>
</html>


<?php


if(isset($_POST['update_product'])){

// getting text data
    $update_id=$product_id;
    $product_cat=$_POST['product_cat'];
    $product_brand=$_POST['product_brand'];
    $product_title=$_POST['product_title'];
    $product_price=$_POST['product_price'];
    $product_desc=$_POST['product_desc'];
    $product_keywords=$_POST['product_keywords'];

//    getting image

$product_image=$_FILES['product_image']['name'];
$product_image_tmp=$_FILES['product_image']['tmp_name'];
move_uploaded_file($product_image_tmp,"product_images/$product_image");


 $update_product="update products set product_cat='$product_cat',product_brand='$product_brand', product_title='$product_title', product_price='$product_price',product_desc='$product_desc', product_image='$product_image',product_keywords='$product_keywords' where product_id='$product_id'";


$run_pro=mysqli_query($con,$update_product);
if($run_pro){



    echo "<script> alert('Product has been Updated');</script>";


    echo "<script>  window.open('index.php?view_products','_self');  </script>";
}

}






?>







<?php }   ?>