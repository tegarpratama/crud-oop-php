<?php
$page_title = 'Add New Employee';
require_once 'init.php';

$employee = new Employee();

if(isset($_POST['submit'])){
   if($employee->insertEmployee($_POST) > 0){
      Flasher::setFlash('Successfully', 'to added new employee!', 'success');
      header('Location: index.php');
   }else{
      Flasher::setFlash('Failed', 'to added new employee!', 'danger');
      header('Location: index.php');
   }
}
?>

<div class="container">
<h2 class="mt-5">Create New Employee</h2>

<div class="row float-right mb-3 mr-1">
   <a class="btn btn-secondary btn-sm" href="index.php">Go Back</a>
</div>

   <form action="" method="post">
      <table class="table table-hover table-bordered mt-4">
         <tr>
            <th>Name</th>
            <td><input type="text" name="name" class="form-control" autocomplete="off" required></td>
         </tr>
         <tr>
            <th>Gender</th>
            <td>
               <select class="custom-select" id="gender" name="gender">
                  <option>Choose gender....</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
               </select>
            </td>
         </tr>
         <tr>
            <th>Email</th>
            <td><input type="email" name="email" class="form-control" autocomplete="off" required></td>
         </tr>
         <tr>
            <th>Phone</th>
            <td><input type="number" name="phone" class="form-control" autocomplete="off" required></td>
         </tr>
         <tr>
            <th>Address</th>
            <td><textarea name="address" id="address" class="form-control" autocomplete="off" required></textarea></td>
         </tr>
         <tr>
            <th></th>
            <td><button type="submit" name="submit" class="btn btn-primary">Create</button></td>
         </tr>
      </table>
   </form>
</div>
