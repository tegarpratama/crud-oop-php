<?php
require_once 'init.php';

class Employee {

   public $db;
   public $validation;

   public function __construct(){
      $this->db = new Database();
      $this->validation = new Validation();
   }

   public function insertEmployee(){      
      $name = $this->validation->checkName($_POST['name']);
      $gender = $_POST['gender'];
      $email = $this->validation->checkEmail($_POST['email']);
      $phone = $this->validation->checkNum($_POST['phone']);
      $address = $_POST['address'];

      if(($name && $email && $phone) == 0){
         return 0;
         exit;
      }else{
         $query = "INSERT INTO employee VALUES ('', :name, :gender, :email, :phone, :address)";
         $this->db->query($query);
         $this->db->bind('name', $name);
         $this->db->bind('gender', $gender);
         $this->db->bind('email', $email);
         $this->db->bind('phone', $phone);
         $this->db->bind('address', $address);
         $this->db->execute();
         return $this->db->rowCount();
      }
   }

   public function deleteEmployee($id){
      $query = "DELETE FROM employee WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);
      $this->db->execute();
      return $this->db->rowCount();
   }

   public function getEmployee($id){
      $query = "SELECT * FROM employee WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);
      return $this->db->singleResult();
   }

   public function updateEmployee(){
      $name = $this->validation->checkName($_POST['name']);
      $gender = $_POST['gender'];
      $email = $this->validation->checkEmail($_POST['email']);
      $phone = $this->validation->checkNum($_POST['phone']);
      $address = $_POST['address'];
      $id = $_POST['id'];

      if(($name && $email && $phone) == 0){
         return 0;
         exit;
      }else{
         $query = "UPDATE employee SET name = :name, gender = :gender, email = :email, phone = :phone, address = :address WHERE id = :id";
         $this->db->query($query);
         $this->db->bind('name', $name);
         $this->db->bind('gender', $gender);
         $this->db->bind('email', $email);
         $this->db->bind('phone', $phone);
         $this->db->bind('address', $address);
         $this->db->bind('id', $id);
         $this->db->execute();
         return $this->db->rowCount();
      }
   }

   public function searchEmployee(){
      $keyword = $_POST['keyword'];
      $query = "SELECT * FROM employee WHERE name LIKE :keyword OR gender LIKE :keyword OR email LIKE :keyword OR phone LIKE :keyword OR address LIKE :keyword";
      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");
      return $this->db->resultAll();
   }

}