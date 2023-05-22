<?php
    if(!isset($_SESSION)){
        session_start();
    }
    //si no existe login, es q no esta autenticado, asiq en ese caso va un NULL
    $auth=$_SESSION['login'] ?? false;

    // Obtén el nombre del archivo actual
    $paginaActual = basename($_SERVER['PHP_SELF']);
        
    $directorio=dirname($_SERVER['PHP_SELF']).'/';
    // echo '<hr>'.$directorio;
    
    // echo '<hr>'.dirname($directorio);
    
    // echo '<hr>'.dirname(dirname($directorio));
    if($directorio===dirname($directorio).'/admin/' || dirname($directorio)===dirname(dirname($directorio)).'/admin'){
        if(dirname($directorio)===dirname(dirname($directorio)).'/admin'){
            $directorio=dirname(dirname($directorio)).'/';
            // echo 'toy aca';
        }
        else{
            $directorio=dirname($directorio).'/';
            // echo 'toy alla';
        }
        
    }
    // echo '<hr>';
    // echo $directorio;
    // exit;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes raices</title>
    <link rel='stylesheet' href="<?php echo $directorio?>build/css/app.css?v=1.9.0">
    

        
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : '';?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="<?php echo $directorio?>index.php?inicio">
                    <img class="logo" src="<?php echo $directorio ?>build/img/js.png" alt='Logotipo de bienes raices'>
                </a>
                <div class="mobile-menu">
                    <img src="<?php echo $directorio?>build/img/barras.svg" alt='menu responsive'>"
                </div>
                <div class="derecha">
                    
                    <img src="<?php echo $directorio ?>build/img/dark-mode.svg" class="dark-mode-boton">
                    <nav class="navegacion">
                        
                        <a href="<?php echo $directorio ?>index.php">Inicio</a>
                        <a href="<?php echo $directorio ?>tickets.php">Tickets</a>
                    </nav>
                </div>
            </div>  <!-- .barra  -->
            <?php echo $inicio ? "<h1>Trabajo integrador JavaScript</h1>":'';?>    
            
        </div>
    </header>