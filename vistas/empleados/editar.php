<div class="card-header">
        Editar empleado
    </div>
    <div class="card-body">
        <!-- form:post  -->
        <form action="" method="post">
        <!-- bs5-form-input-->
        <div class="mb-3">
          <label for="id" class="form-label">ID:</label>
          <input readonly type="text"
            class="form-control" value="<?php echo $empleado->id;?> " name="id" id="id" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

       <!-- bs5-form-input-->
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input  required type="text"
            class="form-control" value="<?php echo $empleado->nombre;?> " name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
          
        </div>

        <!-- bs5-form-email-->
        <div class="mb-3">
          <label for="correo" class="form-label">Correo:</label>
          <input required type="email" value="<?php echo $empleado->correo;?> " class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del empleado">
          
        </div>

        <!-- bs5-button-input-->
        <input name="" id="" class="btn btn-success" type="submit" value="Editar empleado">
        <a href="?controlador=empleados&accion=inicio&id=" class="btn btn-danger">Cancelar</a>



        </form>
    </div>