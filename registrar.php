<?php
    require_once "config/conexion.php";
    $sql = "SELECT * FROM categoria ";
    $resultado_categorias=$conn->query($sql);
    $lista_id_categorias=array();
    $lista_nombre_categorias=array();
    if ($resultado_categorias->num_rows > 0) { 
            while ($fila = $resultado_categorias->fetch_assoc()) {
                array_push($lista_id_categorias, $fila["id_categoria"]);
                array_push($lista_nombre_categorias, $fila["nombre_categoria"]);
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Productos</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <div class="col-10">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" width="50" height="50">
                    El Caffecito
                </a>
            </div>
            <div class="col-2">
                <a class="navbar-brand" href="registrar.php">
                    Ajustes
                    <img src="images/ajuste.png" width="20" height="20">
                </a>
            </div>
            
        </div>
    </nav>

    <div class="container">
        <h1>Registro</h1>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Registro de Categorias
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body row categorias_form">
                        <div class="col">
                            <h2>Formulario de categorias</h2>
                            <form method="post" action="registarCategorias.php">
                                <input class="form-control btn btn-outline-secondary" name="nombreCategoria" type="text" placeholder="Nombre de la Categoria" aria-label="default input example"  required>
                            
                                <button type="submit" class="btn btn-outline-primary boton_guardar" style="width:99%;">Guardar</button>
                            </form>
                        </div>

                        <div class="col-md-1 border-left border-right">
                            <!-- Separador vertical con borde -->
                        </div>

                        <div class="col ">
                            <h2>Categorias Registradas</h2>
                            <ul class="list-group">
                                <?php
                                    for ($i=0; $i < count($lista_nombre_categorias); $i++) { 
                                        ?>
                                            <li class="list-group-item"><?php echo $lista_nombre_categorias[$i]?></li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Registro de productos
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body row">
                    <div class="col">
                        <h2>Formulario de Productos</h2>
                            <form method="post" action="registarCategorias.php">
                                <label for="categorias">Nombre de la Producto:</label> 
                                <input class="form-control btn btn-outline-secondary" name="nombreCategoria" type="text" placeholder="Nombre del Producto" aria-label="default input example"  required>
                                
                                    <label for="categorias">Selecciona la categoria a la que pertenece:</label>    
                                    <select name="select" class="btn btn-outline-secondary">
                                        <?php
                                            for ($i=0; $i < count($lista_nombre_categorias); $i++) { 
                                                ?>
                                                    <option value=<?php echo $lista_id_categorias[$i]?>><?php echo $lista_nombre_categorias[$i]?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                
                                <button type="submit" class="btn btn-outline-primary boton_guardar" style="width:99%;">Guardar</button>
                            </form>
                    </div>

                    <div class="col-md-1 border-left border-right">
                        <!-- Separador vertical con borde -->
                    </div>

                    <div class="col ">
                        <h2>Productos Registrados</h2>
                        <?php
                            if ($resultado_categorias->num_rows > 0) {
                        ?>
                        <ul class="list-group">
                            <?php
                            while ($fila = $resultado_categorias->fetch_assoc()) {
                            ?>
                                <li class="list-group-item"><?php echo $fila["nombre_categoria"]?></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Registro de Ingredientes
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>