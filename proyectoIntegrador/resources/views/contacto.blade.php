@include('/layout/header')

<div class="cuerpoContato">
    
        <form class="formContacto" action="#" method="POST">
        <div class="form-group" style="grid-column: span 2;">
                
                <h2 class="tituloContacto">Formulario de contacto</h2>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
            </div>
            <div class="form-group" style="grid-column: span 2;">
                <label for="telefono">Número de teléfono</label>
                <input type="tel" id="telefono" name="telefono" placeholder="Número de teléfono" required>
            </div>
            <div class="form-group" style="grid-column: span 2;">
                <label for="comentarios">Comentarios</label>
                <textarea id="comentarios" name="comentarios" rows="4" placeholder="Comentarios" required></textarea>
            </div>
            <button class="botonEnviar" type="submit">Enviar</button>
        </form>
   
</div>


@include('/layout/footer')