<!DOCTYPE html>

<?php
include("includes/db.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="insert_product.css">
</head>
<body>
    
    <h1 class="heading">Insert Your Product</h1>


<form action="insert_product.php" method="POST" enctype="multipart/form-data">



<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Product Id</th>
      <td><input type="text" name="product_id"></td>
      
    </tr>
    <tr>
      <th scope="row">Product Category</th>
      <td> 
       <select name="product_cat" id="">
          <option value="">Select A Category</option>
<?php
$get_cats="select * from categories ";
$run_cats=mysqli_query($con,$get_cats);


while($row_cats=mysqli_fetch_array($run_cats)){

    $cat_id=$row_cats['category_id'];
    $cat_title=$row_cats['category_title'];

    echo "<option value='$cat_id'>$cat_title </option>";
}

?>


      </select>
    
    </td>
      
    </tr>
    <tr>
      <th scope="row">Product Brand</th>
      <td >
    
    <select name="product_brand" id="">
              <option value="">Select A Brand</option>
                     <?php
                     
                     global $con;
  
  $get_brands="select * from brand ";
  $run_brands=mysqli_query($con,$get_brands);
  
  
  while($row_brands=mysqli_fetch_array($run_brands)){
  
      $brand_id=$row_brands['brand_id'];
      $brand_title=$row_brands['brand_title'];
  
      echo "<option value='$brand_id'>$brand_title </option>";
  
  
  
  }
                     ?>

    </select>
    
    
    
    
    </td>
      
    </tr>

    <tr>
      <th scope="row">Product Title</th>
      <td ><input type="text" name="product_title"></td>
      
    </tr>
    <tr>
      <th scope="row">Product Price</th>
      <td ><input type="text" name="product_price"></td>
      
    </tr>


    <tr>
      <th scope="row">Product Description</th>
      <td ><input type="text" name="product_desc"></td>
      
    </tr>
    <tr>
      <th scope="row">Product Image</th>
      <td ><input type="file" name="product_image"></td>
      
    </tr>

    <tr>
      <th scope="row">Product Keywords</th>
      <td ><input type="text" name="product_keywords"></td>
      
    </tr>
    <tr>
      <th scope="row">Submit</th>
      <td ><input type="submit" name="insert_post"></td>
      
    </tr>
  </tbody>
</table>









</form>







</body>
</html>


<?php


if(isset($_POST['insert_post'])){

// getting text data
    $product_id=$_POST['product_id'];
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

 $insert_product="insert into products(product_id, product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords) values ('$product_id','$product_cat','$product_brand', '$product_title','$product_price','$product_desc','$product_image','$product_keywords')";

  


$insert_pro=mysqli_query($con,$insert_product);
if($insert_pro){



    echo "<script> alert('Product has been inserted');</script>";


    echo "<script>  window.open('index.php?insert_product','_self');  </script>";
}

}






?>