<?php
   session_start();
 
  session_destroy();
  	header('location:../index');
  /* header('Refresh: 1; URL = ../index.php');*/
?>