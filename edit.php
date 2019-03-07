<?php
$page_title = 'Update Employee';
require_once 'init.php';

$employee = new Employee();
$data = $employee->getEmployee($_GET['id']);

if(isset($_POST['update'])){
   if($employee->updateEmployee($_POST) > 0){
      Flasher::setFlash('Successfully', 'to added new employee!', 'success');
      header('Location: index.php');
   }else{
      Flasher::setFlash('Failed', 'to added new employee!', 'danger');
      header('Location: index.php');
   }
}
?>

<div class="container">
<h2 class="mt-5">Update Employee</h2>

<div class="row float-right mb-3 mr-1">
   <a class="btn btn-secondary btn-sm" href="index.php">Go Back</a>
</div>

   <form action="" method="post">
      <table class="table table-hover table-bordered mt-4">
         <input type="hidden" name="id" class="form-control" value="<?php echo $data['id']; ?>">
         <tr>
            <th>Name</th>
            <td><input type="text" name="name" class="form-control" value="<?php echo $data['name']; ?>" autocomplete="off" required></td>
         </tr>
         <tr>
            <th>Gender</th>
            <td>
               <select class="custom-select" id="gender" name="gender">
                  <option>Choose gender....</option>
                  <option value="male" <?php if($data['gender'] == 'male'){echo "selected";} ?> >Male</option>
                  <option value="female" <?php if($data['gender'] == 'female'){echo "selected";} ?> >Female</option>
               </select>
            </td>
         </tr>
         <tr>
            <th>Email</th>
            <td><input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>" autocomplete="off" required></td>
         </tr>
         <tr>
            <th>Phone</th>
            <td><input type="number" name="phone" class="form-control" value="<?php echo $data['phone']; ?>" autocomplete="off" required></td>
         </tr>
         <tr>
            <th>Address</th>
            <td><textarea name="address" id="address" class="form-control" autocomplete="off" required><?php echo $data['address']; ?></textarea></td>
         </tr>
         <tr>
            <th></th>
            <td><button type="submit" name="update" class="btn btn-primary">Update</button></td>
         </tr>
      </table>
   </form>
</div>