<?php
$directorio=dirname($_SERVER['PHP_SELF']).'/';
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
?>
<footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
            <a href="<?php echo $directorio ?>index.php">Inicio</a>
            <a href="<?php echo $directorio ?>tickets.php">Tickets</a>
            </nav>
        </div>
        
        <p class="copyright">
            Todos los derechos reservados <?php echo date('Y') ?> &copy;
        </p>
    </footer>
    <script src="<?php echo $directorio ?>build/js/bundle.min.js?v=1.0.0"></script>
</body>
</html>