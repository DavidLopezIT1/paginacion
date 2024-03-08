<?php
include 'validator_view.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stule.css">
    <title>Xamples</title>
</head>

<body>

<header>
<div class="article">
<h1>Articulos</h1>
</div>
</header>
<form action="" method="post">
<section class="sect_one">
            <?php 
                    if(isset($_POST['buts1'])){
                        $set_one = $_POST['buts1'];
                        if($method){
                            while($row =$method->fetch_array()){
                                    $Id= $row['Id'];
                                    $Articulo= $row['Articulo'];
                                    $usuariopub= $row['UsuarioPub'];
                                    $correo= $row['correo'];  ?>          
                                        <?php   echo  $Id . " -- " . $Articulo . " -- " .  $usuariopub . "<br/>"; ?> <?php 
                        }       
                        } 
                        }
                        if (isset($_POST['buts2'])) {
                            $set_two = $_POST['buts2'];
                                if($method){
                                    while($row =$method->fetch_array()){
                                            $Id= $row['Id'];
                                            $Articulo= $row['Articulo'];
                                            $usuariopub= $row['UsuarioPub'];
                                            $correo= $row['correo'];  ?>          
                                                <?php   echo  $Id . " -- " . $Articulo . " -- " .  $usuariopub . "<br/>"; ?> <?php 
                        }       
                        } 
                        } 
                        if (isset($_POST['buts3'])) {
                            $set_three = $_POST['buts3'];
                           if($method){
                               while($row =$method->fetch_array()){
                                       $Id= $row['Id'];
                                       $Articulo= $row['Articulo'];
                                       $usuariopub= $row['UsuarioPub'];
                                       $correo= $row['correo'];  ?>          
                                           <?php   echo  $Id . " -- " . $Articulo . " -- " .  $usuariopub . "<br/>"; ?> <?php 
                       }       
                       }  
                       }
                    
                       if (isset($_POST['buts4'])) {
                            $set_four = $_POST['buts4'];
                            if($method){
                               while($row =$method->fetch_array()){
                                       $Id= $row['Id'];
                                       $Articulo= $row['Articulo'];
                                       $usuariopub= $row['UsuarioPub'];
                                       $correo= $row['correo'];  ?>          
                                           <?php   echo  $Id . " -- " . $Articulo . " -- " .  $usuariopub . "<br/>"; ?> <?php 
                       }       
                       }  
                       }
                       if (isset($_POST['buts5'])) {
                            $set_five = $_POST['buts5'];
                            if($method){
                               while($row =$method->fetch_array()){ // debajo de este se puede poner posiblemente, hacer la fucking prueba Man
                                       $Id= $row['Id'];
                                       $Articulo= $row['Articulo'];
                                       $usuariopub= $row['UsuarioPub'];
                                       $correo= $row['correo'];  ?>          
                                           <?php   echo  $Id . " -- " . $Articulo . " -- " .  $usuariopub . "<br/>"; ?> <?php 
                       }       
                       }  
                       }
                       if (isset($_POST['izquierdo'])) {
                        $set_izq = $_POST['izquierdo'];
                        if($method){
                           while($row =$method->fetch_array()){ // debajo de este se puede poner posiblemente, hacer la fucking prueba Man
                                   $Id= $row['Id'];
                                   $Articulo= $row['Articulo'];
                                   $usuariopub= $row['UsuarioPub'];
                                   $correo= $row['correo'];  ?>          
                                           <?php   echo  $Id . " -- " . $Articulo . " -- " .  $usuariopub . "<br/>"; ?> <?php 
                       }       
                       }  
                       }
                       if (isset($_POST['derecho'])) {
                        $set_dere = $_POST['derecho'];
                        if($method){
                           while($row =$method->fetch_array()){ // debajo de este se puede poner posiblemente, hacer la fucking prueba Man
                                   $Id= $row['Id'];
                                   $Articulo= $row['Articulo'];
                                   $usuariopub= $row['UsuarioPub'];
                                   $correo= $row['correo'];  ?>          
                                       <?php   echo  $Id . " -- " . $Articulo . " -- " .  $usuariopub . "<br/>"; ?> <?php 
                        }       
                        }  
                        }
                    ?>        
</section>
<br>
<section class="sect_two">
<div>
            <button name="izquierdo">&laquo;</button> <!-- Para definir y bloquear este botón cuando termine su proceso de cambio de paginas se debe utilizar un conficional o un switch -->
            <button name="buts1">1</button>
            <button name="buts2">2</button>
            <button name="buts3">3</button>
            <button name="buts4">4</button>
            <button name="buts5">5</button>
            <button name="derecho">&raquo;</button>
</div>

</section>

</form>

<main>
<div>

</div>
</main>

<footer>

</footer>

</body>

</html>
