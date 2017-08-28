<?php
   session_start();
 
  session_destroy();
  	header('location:../index.php');
  /* header('Refresh: 1; URL = ../index.php');*/
?>