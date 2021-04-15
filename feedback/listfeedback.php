<?php 
include '../shared/nav.php';
include '../generalPhp/connectDatabase.php';
include '../generalPhp/testMessage.php';

$select = "SELECT * FROM `feedback`";
$s_run = mysqli_query($conn, $select);
if(isset($_GET['delete'])){
  $id =  $_GET['delete'];
  $delete = "DELETE FROM `feedback` WHERE id = $id";
  $d_run = mysqli_query($conn, $delete);
  header("location: /ecommerce/feedback/listfeedback.php/listfeedback.php");
}

?>


<table class="table table-striped table-dark"  >
  <thead>
    <tr>
      
      <th scope="col">id</th>
      <th scope="col">customerId</th>
      <th scope="col">employeeId</th>
      <th scope="col">productId</th>
      <th scope="col">description</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
        foreach($s_run as $data){
        ?>
    
            <td><?php echo $data['id']?></td>
            <td><?php echo $data['customerid']?></td>
            <td><?php echo $data['employeeid']?></td>
            <td><?php echo $data['productid']?></td>
            <td><?php echo $data['decription']?></td>
            <td><a class="btn btn-danger" name="delete" href="listfeedback.php?delete=<?php echo $data['id']?>">delete</a></td>
            
        

            <?php  }?>
      
    </tr>
  </tbody>
</table>
