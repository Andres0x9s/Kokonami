<?php

include("conexion.php");

$email = $_POST['email'] ?? null;

if (!$email) {
    die("Email vacío");
}

$sql = "INSERT INTO usuarios_login (email) VALUES (?)";
$params = array($email);

$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt) {

    $getId = "SELECT TOP 1 id
              FROM usuarios_login
              ORDER BY id DESC";

    $result = sqlsrv_query($conn, $getId);

    $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

    $id = $row['id'];

    $url = "https://konamisignuser.vercel.app/index2.html?id="
         . $id
         . "&email="
         . urlencode($email);

    header("Location: $url");
    exit();

} else {
    echo "Error al guardar";
}

?>
