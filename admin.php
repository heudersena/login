<!DOCTYPE html>
<?php
session_start();
$teste = $_SESSION['loginUsuario'];
print_r($teste);

if ( !$_SESSION['loginUsuario'] == true){
	header('location: admin.php');
	exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1><a href="sair.php">sair</a></h1>
<?php
echo '<pre>';
var_dump($_SESSION);
?>
    </body>
</html>
