<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Insertar Auto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="form" action="{{route('home.store')}}"  method="Post" enctype="multipart/form-data">
                @csrf
              <div class="mb-3 row">
                    <label for="inputName" class="col-4 col-form-label">Nombre</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="Nombre" id="inputName" placeholder="Nombre">
                    </div>
                    <label for="inputName" class="col-4 col-form-label">Marca</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="Marca" id="inputName" placeholder="Marca">
                    </div>
                    <label for="inputName" class="col-4 col-form-label">Kilometraje</label>
                    <div class="col-8">
                        <input type="number" class="form-control" name="Kilometraje" id="inputName" placeholder="Kilometraje">
                    </div>
                    <label for="inputName" class="col-4 col-form-label">Modelo</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="Modelo" id="inputName" placeholder="Modelo">
                    </div>
                    <label for="inputName" class="col-4 col-form-label">Precio</label>
                    <div class="col-8">
                        <input type="number" class="form-control" name="Precio" id="inputName" placeholder="Precio">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    
      </div>
    </div>
  </div>