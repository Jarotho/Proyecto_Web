<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require "funciones.php";

if(isset($_POST['plataforma'])){
    $plataforma = $_POST['plataforma'];
    if($plataforma === ""){
        $productos = getVideojuegos();
    }else{
        $productos = getProductsByCategory($plataforma);
    }
    echo json_encode($productos);
}

