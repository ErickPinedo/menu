<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
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
    <div class="container-sm">
        <div class="row">
            <?php 
                for ($i=0; $i <15; $i++) {
            ?>
            <div class="card" style="width: 18rem;">
                <div class="circulo"><?php echo $i+1 ?></div>
                <img src="images/comedor.png" class="card-img-top" alt="...">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body row">
                    <button type="button" class="btn btn-outline-info col">Agregar</button>
                    <button type="button" class="btn btn-outline-danger col">Cobrar</button>

                </div>
            </div>
            <?php
                }
            ?>
            <div class="card" style="width: 18rem;">
            <a href="#">
                <img src="images/mas.png" class="agregar card-img-top" style="width: 16rem; position: relative; top: 100%; transform: translateY(-50%);">
            </a>
                
            </div>
        </div>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>