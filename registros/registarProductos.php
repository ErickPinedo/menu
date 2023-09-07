<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre=$_POST["nombreProducto"];
        $categoria=$_POST["selectCategoria"];
        $precio=$_POST["precioProducto"];
    }
    require_once "../config/conexion.php";

    $sql = "INSERT INTO productos(nombre_producto, id_categoria, precio ) VALUES ('$nombre','$categoria', '$precio')";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    }
    
?>