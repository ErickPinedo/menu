<?php
    require_once "../config/conexion.php";
    $sql = "INSERT INTO pedidos(estado) VALUES (1)";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    } 
?>