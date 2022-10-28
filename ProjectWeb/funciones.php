
<?php
    function conectarSQLServer(){
        $mysql = new mysqli();
       // $mysql = new mysqli('localhost','root','123','proyectoweb','33065');
        //Revisar que no haya fallado la conexión 
        if($mysql->connect_errno != 0){
            return $mysql->connect_errno;
        }else{
            return $mysql;
        }
    }
    
    function getVideojuegos(){
        $mysql = conectarSQLServer();
        $resultado = $mysql->query("SELECT * FROM videojuegos ORDER BY RAND()");
        while($registro = $resultado->fetch_assoc()){
            $products[] = $registro;
        }
        return $products;
    }
    
    function getProductsByCategory($plataforma){
        $mysql = conectarSQLServer();
        //$resultado = $mysql->query("SELECT * FROM videojuegos WHERE plataforma = '$category'");
        $resultado = $mysql->query("SELECT * FROM videojuegos WHERE plataforma = '$plataforma'");
        while($registro = $resultado->fetch_assoc()){
            $products[] = $registro;
        }
        return $products;
    }
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

