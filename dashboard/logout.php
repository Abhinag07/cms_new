<?php
session_start();
session_unset();
session_destroy();
header('location: login');
/* if(isset($_SERVER['HTTP_REFERER'])) {
    header('Location: '.$_SERVER['HTTP_REFERER']);  
   } else {
    header('Location: index');  
   }
   exit; */
?>