<?php

include("conexion.php");

$email = $_POST['email'];

$password = $_POST['password'];

$sql = "UPDATE usuarios_login
SET password_user = ?
WHERE email = ?";

$params = array($password, $email);

$stmt = sqlsrv_query($conn, $sql, $params);

if($stmt){

    echo "OK";

}else{

    die(print_r(sqlsrv_errors(), true));

}

?>