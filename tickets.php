<?php
    //require 'includes/funciones.php';
    require 'includes/app.php';
    
    incluirTemplates('header');
?>
    <main class="contenedor seccion">
        
        <div class="categoria-tickets">
            <fieldset id="infoEstudiante">
                <a href="#miFormulario" onclick="seleccionarCategoria('estudiante')">
                    <div class="categoria">
                        <h3>Estudiante</h3>
                        <div class="descuento">
                            <span>Tienen un descuento</span>
                            <p>80%</p>
                        </div>
                        <div class="presentardocu">
                            <p>*Presentar documentacion</p>
                        </div>
                    </div>
                </a>
            </fieldset>
            <fieldset id="infoTrainee">
                <a href="#miFormulario" onclick="seleccionarCategoria('trainee')">
                    <div class="categoria">
                        <h3>Trainee</h3>
                        <div class="descuento">
                            <span>Tienen un descuento</span>    
                            <p>50%</p>
                        </div>
                        <div class="presentardocu">
                            <p>*Presentar documentacion</p>
                        </div>
                    </div>
                </a>
            </fieldset>
            <fieldset id="infoJunior">
                <a href="#miFormulario" onclick="seleccionarCategoria('junior')">
                    <div class="categoria">
                        <h3>Junior</h3>
                        <div class="descuento">
                        <span>Tienen un descuento</span>
                            <p>15%</p>
                        </div>
                        <div class="presentardocu">
                            <p>*Presentar documentacion</p>
                        </div>
                    </div>
                </a>
            </fieldset>
        </div>
        <div class="centrado"><p>venta</p></div>
        <h1>Valor del ticket $200</h1>
        <section>
            <form class="formulario" id="miFormulario">
            <?php
                
                incluirTemplates('formulario');
            ?>    
            </form>
        </section>
    </main>
    
    <?php
        incluirTemplates('footer');
    ?>