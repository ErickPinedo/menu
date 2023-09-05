<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre=$_POST["nombreCategoria"];
    }

    require_once "../config/conexion.php";

    $sql = "INSERT INTO categoria(nombre_categoria) VALUES ('$nombre')";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    } 
?>