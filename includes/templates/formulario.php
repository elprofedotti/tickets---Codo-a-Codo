<fieldset>
                <div>
                    <label id="error" style="display: none; background-color: red; color: white;"></label>
                </div>            
                <div class="ticket">
                
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" placeholder="Tu nombre" name="nombre">
                </div>
                <div>
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" placeholder="Tu apellido" name="apellido">
                </div>
            </div>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" placeholder="Tu correo" name="correo" >
            <div class="ticket">
                <div>                
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" placeholder="Cantidad de tickets" name="cantidad" >
                </div>
                <div>
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria">
                    <option value="estudiante">Estudiante</option>
                    <option value="trainee">Trainee</option>
                    <option value="junior">Junior</option>
                </select>
                </div>
            </div>
            <div>
                <label id="total" class="total"></label>
            </div>
            <div class="centrado">
            <button class="boton-verde-inline" id="borrar">Borrar</button>
            <button class="boton-amarillo-inline" id="resumen">Resumen </button>
            </div>      
</fieldset>

        
        