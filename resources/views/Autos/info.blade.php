<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="update{{$Auto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Auto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('home.update',$Auto->id)}}"  method="POST" enctype="multipart/form-data">
                @csrf
               @method('put')
              <div class="mb-3 row">
                    <label for="inputName" class="col-4 col-form-label">Nombre</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="Nombre" id="inputName" value="{{$Auto->Nombre}}">
                    </div>
                    <label for="inputName" class="col-4 col-form-label">Marca</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="Marca" id="inputName" value="{{$Auto->Marca}}">
                    </div>
                    <label for="inputName" class="col-4 col-form-label">Kilometraje</label>
                    <div class="col-8">
                        <input type="number" class="form-control" name="Kilometraje" id="inputName" value="{{$Auto->kilometraje}}">
                    </div>
                    <label for="inputName" class="col-4 col-form-label">Modelo</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="Modelo" id="inputName" value="{{$Auto->Modelo}}">
                    </div>
                    <label for="inputName" class="col-4 col-form-label">Precio</label>
                    <div class="col-8">
                        <input type="number" class="form-control" name="Precio" id="inputName" value="{{$Auto->Precio}}">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </form>
        </div>
    
      </div>
    </div>
  </div>

  <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="delete{{$Auto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Auto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('home.destroy',$Auto->id)}}"  method="POST" enctype="multipart/form-data">
                @csrf
               @method('DELETE')
                Deseas eliminar el auto <strong>{{$Auto->Nombre}}</strong>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-success">Eliminar</button>
                </div>
            </form>
        </div>
    
      </div>
    </div>
  </div>




  <div class="modal fade" id="show{{$Auto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Auto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('home.show',$Auto->id)}}"  method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-3 row">
                    <label for="inputName" class="col-4 col-form-label">Nombre</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="Nombre" id="inputName" value="{{$Auto->Nombre}}" readonly>
                    </div>
                    <label for="inputName" class="col-4 col-form-label">Marca</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="Marca" id="inputName" value="{{$Auto->Marca}}" readonly>
                    </div>
                    <label for="inputName" class="col-4 col-form-label">Kilometraje</label>
                    <div class="col-8">
                        <input type="number" class="form-control" name="Kilometraje" id="inputName" value="{{$Auto->kilometraje}}" readonly>
                    </div>
                    <label for="inputName" class="col-4 col-form-label">Modelo</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="Modelo" id="inputName" value="{{$Auto->Modelo}}" readonly>
                    </div>
                    <label for="inputName" class="col-4 col-form-label">Precio</label>
                    <div class="col-8">
                        <input type="number" class="form-control" name="Precio" id="inputName" value="{{$Auto->Precio}}" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    
      </div>
    </div>
  </div>
