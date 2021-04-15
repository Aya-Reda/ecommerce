<?php 
include '../shared/nav.php';
include '../generalPhp/connectDatabase.php';
include '../generalPhp/testMessage.php';

if(isset($_POST['addoffer'])){
    $name= $_POST['name'];
    $productid=$_POST['productid'];
    $sectionid=$_POST['sectionid'];
    
  
  
    $insert="INSERT INTO `offers` VALUES (NULL , '$name', '$productid' ,'$sectionid' )";
    $i_run= mysqli_query($conn,$insert);
    // testMessage($i_run);


  
   
  
  }

  $upname="";
  $product="";
  $section=""; 

  $update=false;

   if(isset($_GET['edit'])){
    $id =  $_GET['edit'];
    $edit = "SELECT * FROM `offers` WHERE id = $id";
    $e_run = mysqli_query($conn, $edit);
    $row=mysqli_fetch_assoc($e_run);
    $upname=$row['name'];
    $product=$row['productid'];
    $section=$row['sectionid'];
    $update=true;
}
  if(isset($_POST['update'])){
    $name=$_POST['name'];
    $productid=$_POST['productid'];
    $sectionid=$_POST['sectionid'];
    
    $overwrite = "UPDATE `offers` SET name = '$name', productid = '$productid' , sectionid = '$sectionid' WHERE ID = $id ";
    $o_run=mysqli_query($conn,$overwrite);
    header("location:/ecommerce/offers/listOffer.php/");

  }
?>

<div class=container col-4 mt-4>
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">offer</label>
    <input type="text" name="name" value="<?php echo $upname ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">productID</label>
    <input type="number" name="productid"  value="<?php echo $product ?>"  class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">sectionID</label>
    <input type="number" name="sectionid"  value="<?php echo $section ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <?php if($update){
 ?>
 <button class="btn btn-dark" name="update">update data </button>
<?php  }else { ?>

  <button type="submit" name="addoffer" class="btn btn-primary">Add Offer</button>
 <?php } ?>
</form>
</div>