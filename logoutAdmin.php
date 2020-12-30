<?php
   session_start();
   unset($_SESSION["adminID"]);
   unset($_SESSION["password"]);
   
   header('Refresh: 2; URL = loginAdmin.php');
?>