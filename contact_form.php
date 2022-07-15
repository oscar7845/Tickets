<?php

   $connection = mysqli_connect('localhost','root','','contact_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $lastname = $_POST['lastname'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $age = $_POST['age'];
      $dateofbirth = $_POST['dateofbirth'];
      $text = $_POST['text'];

      $request = " insert into contact_form(name, lastname, phone, address, age, dateofbirth, text) values('$name','$lastname','$phone','$address','$age','$dateofbirth','$text') ";
      mysqli_query($connection, $request);

      header('location:contact.php');

   }else{
      echo 'something went wrong please try again!';
   }

?>