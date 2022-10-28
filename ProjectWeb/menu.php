    <?php include "funciones.php"?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        
    </head>
    <body>
        <div class = "page">
            
            <div class="left">
                <select name = "products" id="products">
                    <option value="">Todos los productos</option>
                    <option value="Xbox One">Xbox One</option>
                    <option value="Playstation 4">Playstation 4</option>
                    <option value="Playstation 5">Playstation 5</option>
                    <option value="Nintendo Switch">Nintendo Switch</option>
                    <option value="PC">PC</option>
                </select>
            </div>
            
            <div class = "right">
                <h2>Todos los productos</h2>
                <div class="product-wrapper">
                    <?php
                        $videojuegos = getVideojuegos();
                        foreach ($videojuegos as $product){
                            ?>
                            <div class = "product">
                                <div class = "left">
                                    <img src = "<?php echo $product['imagen']?>" alt="Error al cargar">
                                </div>
                                <div class = "right">
                                    <p class = "title"><?php echo $product['titulo']?></p>
                                    <p class = "price"> $ <?php echo $product['precio']?></p>
                                    <p class = "plataforma"><?php echo $product['plataforma']?></p>
                                    <p class = "categoria"><?php echo $product['categoria']?></p>
                                    <p class = "description"><?php echo $product['descripcion']?></p>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>
