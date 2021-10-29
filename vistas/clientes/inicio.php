<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=clientes&accion=crear" role="button">Agregar Cliente</a>
    </div>
    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Accion</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente) {?>
        <tr>
            <td><?php echo $cliente->id; ?></td>
            <td><?php echo $cliente->nombre; ?></td>
            <td><?php echo $cliente->apellido; ?></td>
            <td><?php echo $cliente->telefono; ?></td>
            <td><?php echo $cliente->correo; ?></td>
            <td>
            <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=clientes&accion=editar&id=<?php echo $cliente->id;?>" class="btn btn-info">Editar</a>
                <a href="?controlador=clientes&accion=borrar&id=<?php echo $cliente->id;?>" class="btn btn-danger">Borrar</a>
            </div>
            
            </td>
        </tr>
        <?php  } ?>
    </tbody>
</table>

        
        
    </div>
    
</div>






