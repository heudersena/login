<?php

session_start(); 
unset($_SESSION["loginUsuario"]); 
session_destroy(); 
header("Location: index.php");
?>