<?php
$page_title = 'Read Employee';
require_once 'init.php';

$employee = new Employee();
$data = $employee->getEmployee($_GET['id']);

?>
<div class="container">
   <h2 class="mt-5">Detail about <?php echo $data['name']; ?></h2>

   <div class="row float-right mb-3 mr-1">
      <a class="btn btn-secondary btn-sm" href="index.php">Go Back</a>
   </div>

   <table class="table table-bordered table-hover mt-4">
      <tr>
         <th>Name</th>
         <td><?php echo $data['name']; ?></td>
      </tr>
      <tr>
         <th>Gender</th>
         <td><?php echo $data['gender']; ?></td>
      </tr>
      <tr>
         <th>Email</th>
         <td><?php echo $data['email']; ?></td>
      </tr>
      <tr>
         <th>Phone</th>
         <td><?php echo $data['phone']; ?></td>
      </tr>
      <tr>
         <th>Address</th>
         <td><?php echo $data['address']; ?></td>
      </tr>
   </table>
</div>