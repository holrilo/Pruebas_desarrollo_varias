@extends('dash.index')

@section('content')
<div class="card ">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h4 class="card-title">Registro</h4>
        <p class="card-text">Usuario
        <form class="row g-3" action="/usuario" method="POST">
            @csrf
            <div class="col-md-6">
                <label for="nom_usuario_1" class="form-label">Primer Nombre</label>
                <input type="text" class="form-control" id="nom_usuario_1" name="nom_usuario_1">
            </div>
            <div class="col-md-6">
                <label for="nom_usuario_2" class="form-label">Segundo Nombre</label>
                <input type="text" class="form-control" id="nom_usuario_2" name="nom_usuario_2">
            </div>
            <div class="col-md-6">
                <label for="ape_usuario_1" class="form-label">Primer Apellido</label>
                <input type="text" class="form-control" id="ape_usuario_1" name="ape_usuario_1">
            </div>
            <div class="col-md-6">
                <label for="ape_usuario_2" class="form-label">Segundo Apellido</label>
                <input type="text" class="form-control" id="ape_usuario_2" name="ape_usuario_2">
            </div>
            <div class="col-md-12">
                <label for="correo_usuario" class="form-label">Correo</label>
                <input type="email" class="form-control" id="correo_usuario" name="correo_usuario">
            </div>
            <div class="col-12">
                <label for="tel_usuario" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="tel_usuario" name="tel_usuario">
            </div>
            <div class="col-12">
                <label for="clav_usuasio" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="clav_usuasio" name="clav_usuasio">
            </div>
            <div class="col-md-6">
                <label for="id_perfil_usu" class="form-label">Perfil</label>
                <select id="id_perfil_usu" class="form-select" name="id_perfil_usu">
                    <option selected>Choose...</option>
                    <option value="1">Coordinador</option>
                    <option value="2">Auxiliar</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="estado_id_estado" class="form-label">Estado</label>
                <select id="estado_id_estado" class="form-select" name="estado_id_estado">
                    <option selected>Choose...</option>
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                </select>
            </div>
            <!-- <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Check me out
                  </label>
                </div>
              </div> -->

            <div class="col-12 d-flex justify-content-end">
                <a href="/" class="btn btn-primary justify-content-end">Cancelar</a>    
            <button type=" submit" class="btn btn-primary justify-content-end">Guardar</button>
            </div>
        </form>
        </p>
    </div>
    <div class=" card-footer text-muted">
        Footer
    </div>
</div>
@endsection