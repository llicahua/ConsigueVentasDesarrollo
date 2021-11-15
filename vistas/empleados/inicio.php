<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=empleados&accion=crear" role="button">Agregar Empleados</a>

    </div>
  <div class="card-body">
        <!-- bs5-table-default -- Bootstrap CSS v5.0.2  -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

<?php
    foreach($empleados as $empleado){?>
        <tr>
            <td> <?php echo $empleado->id; ?> </td>
            <td> <?php echo $empleado->nombre; ?> </td>
            <td> <?php echo $empleado->correo; ?></td>
            <td> 
                <div class="btn-group" role="group" aria-label="">
                    
                    <a href="?controlador=empleados&accion=editar&id=<?php echo $empleado->id;?>" class="btn btn-info">Editar</a>
                    <a href="?controlador=empleados&accion=borrar&id=<?php echo $empleado->id;?>" class="btn btn-danger">Borrar</a>
                
                </div> 
            </td>
        </tr>

<?php    } ?>


      
        
    </tbody>
</table>

        
    </div>
    
</div>


