<?php

class Validation {

   public function testInput($data){
      $result = trim($data);
      $result = htmlspecialchars($result);
      $result = stripslashes($result);
      return $result;
   }

   public function checkName($name){
      $name = $this->testInput($name);
      if(preg_match("/^[a-zA-Z ]*$/", $name)){
         return $name;
      }else{
         return 0;
      }
   }

   public function checkNum($num){
      if(is_numeric($num)){
         return $num;
      }else{
         return 0;
      }
   }

   public function checkEmail($email){
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
         return $email;
      }else{
         return 0;
      }
   }
}