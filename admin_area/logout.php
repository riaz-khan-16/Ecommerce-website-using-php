<?php

session_start();
session_destroy();




echo "<script>window.open('login.php?Logged_Out=You Have Logged Out','_self')</script>";




?>