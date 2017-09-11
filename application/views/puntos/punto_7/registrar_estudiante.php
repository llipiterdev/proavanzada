<div class="container">

    <div class="jumbotron" id="contenido">
        <h1 class="display-3">Programación avanzada</h1>
        <hr class="my-4">

        <?php echo form_open() ?>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre del estudiante">
        </div>
        <div class="form-group">
            <label for="nombre">Documento</label>
            <input type="text" class="form-control" id="nombre" placeholder="Documento del estiudiante">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Carrera</label>
            <select class="form-control" id="exampleFormControlSelect1">
                    <option>Diseño Grafico</option>
                    <option>Doctorado en Ciencias del Mar </option>
                    <option>Ingenieria de Sistemas</option>
                    <option>Ingenieria Química</option>
                    <option>Maestría en Diseño de Producto 	</option>
                    <option>Maestría en Economía</option>   
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Tipo de estudiante</label>
            <select class="form-control" id="exampleFormControlSelect1">
                        <option>Pregrado</option>
                        <option>Posgrado</option> 
                </select>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>

        <?php echo form_close() ?>
    </div>
</div>