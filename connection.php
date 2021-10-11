<?php

    $con=new mysqli("localhost","root","","test");
    if(!isset($_SESSION)) 
     { 
         session_start(); 
     }
   
    

    if(mysqli_connect_error()){
        echo"<script>alert('cannot connect to the database');</script>";
        exit();
      }
  
?>