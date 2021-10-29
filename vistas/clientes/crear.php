<div class="card">
    <div class="card-header">
     Agregar Cliente
    </div>
    <div class="card-body">
     <form action="" method="post">
        
     <div class="mb-3">
           <label for="nombre" class="form-label">Nombre:</label>
           <input required type="text"
             class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del cliente">
    </div>
        
    <div class="mb-3">
           <label for="apellido" class="form-label">Apellido:</label>
           <input required type="text"
             class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido del cliente">
    </div>

    <div class="mb-3">
           <label for="telefono" class="form-label">Telefono del cliente:</label>
           <input required type="tel"
             class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Telefono del cliente">
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo:</label>
      <input required type="email"
      class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del cliente">
    </div>
    <input name="" id="" class="btn btn-success" type="submit" value="Agregar cliente">
    <a href="?controlador=clientes&accion=inicio" class="btn btn-primary">Cancelar</a>
     </form>
    </div>
</div> 