<?php 
include '../shared/nav.php';
include '../generalPhp/connectDatabase.php';
include '../generalPhp/testMessage.php';

$select = "SELECT * FROM `offers`";
$s_run = mysqli_query($conn, $select);

if(isset($_GET['delete'])){
    $id =  $_GET['delete'];
    $delete = "DELETE FROM `offers` WHERE id = $id";
    $d_run = mysqli_query($conn, $delete);
    header("location: /ecommerce/offers/listoffer.php/listoffer.php");
}


?>

<table class="table table-striped table-dark"  >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">offer</th>
      <th scope="col">productID</th>
      <th scope="col">sectionID</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  
    <?php
        foreach($s_run as $data){
        ?>
    <tr>
            <td><?php echo $data['id']?></td>
            <td><?php echo $data['name']?></td>
            <td><?php echo $data['productid']?></td>
            <td><?php echo $data['sectionid']?></td>
            <td><a class="btn btn-danger" name="delete" href="listoffer.php?delete=<?php echo $data['id']?>">delete</a></td>
            <td><a class="btn btn-success" name="edit" href="/ecommerce/offers/addOffer.php/?edit=<?php echo $data['id']?>">update</a></td>
        
            

            <?php  }?>
      
    </tr>
  </tbody>
</table>