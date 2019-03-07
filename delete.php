<?php
$page_title = 'Delete Employee';
require_once 'init.php';

$employee = new Employee();

if(isset($_POST['submit'])){
   if($employee->deleteEmployee($_GET['id']) > 0){
      Flasher::setFlash('Successfully', 'to deleted employee!', 'success');
         header('Location: index.php');
      }else{
         Flasher::setFlash('Failed', 'to deleted employee!', 'danger');
         header('Location: index.php');
   }
}

?>

<?php if(isset($_GET['id'])) : ?>
<div class="container">
   <h2 class="mt-5">Delete Employee</h2>
   <hr>
   
   <div class="alert alert-danger" role="alert">
      Are you sure to delete ?
   </div>
   
   <form action="" method="post">
      <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
      <button name="submit" type="submit" class="btn btn-danger">Yes</button>
      <a href="index.php" class="btn btn-secondary">No</a>
   </form>
</div>
<?php endif; ?>

