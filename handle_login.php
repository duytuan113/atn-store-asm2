<?php 
   include 'database.php';

         $email = $_POST['email'];
         $password = $_POST['password'];
         // SQL query for check user table in mySQL 
         $sql = "SELECT * FROM admin WHERE email='$email' AND password ='$password' ";
         // Run sql query
         $result = pg_query($conn, $sql);
         $row = pg_fetch_assoc($result); // Tìm cụ thể trên gg
             
         if ($row == 0){
            header('location: sign_in.php');
         }
         else{
            header('location: index.php');
         }
         echo ($username) ;
         echo ($password) ;
?>