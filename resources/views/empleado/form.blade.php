<h1>{{ $modo }} Empleado</h1>

@if (count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>

@endif

<div class="from-group">
    <label for="Nombre"> Nombre</label>
    <input type="text" class="form-control" name="Nombre"
        value="{{ isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre') }}" id="Nombre">
</div>
<div class="from-group">
    <label for="ApellidoPaterno">ApellidoPaterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno"
        value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : old('ApellidoPaterno') }}" id="ApellidoPaterno">
</div>
<div class="from-group">
    <label for="ApellidoMaterno">ApellidoMaterno</label>
    <input type="text" class="form-control" name="ApellidoMaterno"
        value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : old('ApellidoMaterno') }}" id="ApellidoMaterno">
</div>
<div class="from-group">
    <label for="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo"
        value="{{ isset($empleado->Correo) ? $empleado->Correo : old('Correo') }}" id="Correo">
</div>
<div class="from-group">
    <label for="Foto">Foto</label>

    @if (isset($empleado->Foto))
        {{-- {{ $empleado->Foto }} --}}

        <img class="img-thumbnail img-fluid" src="{{ asset('storage' . '/' . $empleado->Foto) }}" alt="" width="200px"
            height="200px">
    @endif
    <input type="file" class="form-control" name="Foto" value="" id="Foto">
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }}">

<a class="btn btn-primary" href="{{ url('empleado/') }}">regresar</a>
