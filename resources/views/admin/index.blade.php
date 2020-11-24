@extends('adminlte::page')

@section('title', 'Normix')

@section('content_header')
@stop

@section('content')
@if(!empty($orden))

@switch($orden)

@case ('otec')

<div class="container">
    <div class="row">
        <a class="btn btn-success text-white" href="{{route('vista_crear')}}">Agregar</a>
    </div>
    <div class="row mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">fecha creación</th>
                    <th scope="col">rut</th>
                    <th scope="col">razon social</th>
                    <th scope="col">nombre fantasía</th>
                    <th scope="col">dirección</th>
                    <th scope="col">comuna</th>
                    <th scope="col">region</th>
                    <th scope="col">telefono</th>
                    <th scope="col">telefono2</th>
                    <th scope="col">email</th>
                    <th scope="col">acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($otecs as $otec)
                <tr>
                    <th>{{$otec->fecha_creacion}}</th>
                    <td>{{$otec->rut}}</td>
                    <td>{{$otec->razon_social}}</td>
                    <td>{{$otec->nombre_fantasia}}</td>
                    <td>{{$otec->direccion}}</td>
                    <td>{{$otec->comuna}}</td>
                    <td>{{$otec->region}}</td>
                    <td>{{$otec->telefono}}</td>
                    <td>{{$otec->telefono_2}}</td>
                    <td>{{$otec->email}}</td>
                    <td><a href="{{route('vista_editar',$otec)}}" class="btn btn-warning btn-sm">Editar</a></br>

                        <form method="POST" action="{{route('eliminar_otec',$otec->id)}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm mt-1">Eliminar</button>
                        </form>
                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@break

@case('otec_crear')
<div class="container-fluid">

    <div class="row">
        <h3>OTEC</h3>
    </div>
    <form action="{{route('crear_otec')}}" method="POST" class="mt-1">
        @csrf
        <div class="form-row mb-3">

            <div class="col">
                <label for="fecha">Fecha de Creacion(*)</label>
                <input type="date" name="fecha_creacion" class="form-control" placeholder="Fecha de creacion" value="{{old('fecha_creacion')}}">
                @error('fecha_creacion')
                <div>
                    <p class="text-danger">(*)fecha de creacion es un campo necesario</p>
                </div>
                @enderror
            </div>

            <div class="col">
                <label for="fecha">Rut(*)</label>
                <input type="text" name="rut" class="form-control" placeholder="Rut" value="{{old('rut')}}">
                @error('rut')
                <div>
                    <p class="text-danger">(*)rut es un campo necesario</p>
                </div>
                @enderror
            </div>

        </div>
        <div class="form-row mb-3">
            <div class="col">
                <label for="fecha">Razon Social(*)</label>
                <input type="text" name="razon_social" class="form-control" placeholder="Razon Social" value="{{old('razon_social')}}">
                @error('razon_social')
                <div>
                    <p class="text-danger">(*)razon social es un campo necesario</p>
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="fecha">Nombre de Fantasia(*)</label>
                <input type="text" name="nombre_fantasia" class="form-control" placeholder="Nombre de Fantasia" value="{{old('nombre_fantasia')}}">
                @error('nombre_fantasia')
                <div>
                    <p class="text-danger">(*)nombre_fantasia es un campo necesario</p>
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row mb-3">
            <div class="col">
                <label for="fecha">Direccion(*)</label>
                <input type="text" name="direccion" class="form-control" placeholder="Direccion" value="{{old('direccion')}}">
                @error('direccion')
                <div>
                    <p class="text-danger">(*)direccion es un campo necesario</p>
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="fecha">Comuna(*)</label>
                <input type="text" name="comuna" class="form-control" placeholder="Comuna" value="{{old('comuna')}}">
                @error('comuna')
                <div>
                    <p class="text-danger">(*)comuna es un campo necesario</p>
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row mb-3">
            <div class="col">
                <label for="fecha">Region(*)</label>
                <input type="text" name="region" class="form-control" placeholder="region" value="{{old('region')}}">
                @error('region')
                <div>
                    <p class="text-danger">(*)region es un campo necesario</p>
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="fecha">Telefono(*)</label>
                <input type="text" name="telefono" class="form-control" placeholder="Telefono" value="{{old('telefono')}}">
                @error('telefono')
                <div>
                    <p class="text-danger">(*)telefono es un campo necesario</p>
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row mb-3">
            <div class="col">
                <label for="fecha">Telefono 2(Opcional)</label>
                <input type="text" name="telefono_2" class="form-control" placeholder="Telefono 2" value="{{old('telefono_2')}}">
            </div>
            <div class="col">
                <label for="fecha">Correo Electronico(*)</label>
                <input type="email" name="email" class="form-control" placeholder="Correo Electronico" value="{{old('email')}}" email>
                @error('email')
                <div>
                    <p class="text-danger">(*)email es un campo necesario, debe ser un formato valido</p>
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row mb-5">
            <div class="col ml-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
                <a href="{{route('otec')}}" class="btn btn-info float-rigth">Volver</a>
            </div>
        </div>

    </form>





</div>

@break

@case ('otec_editar')

<div class="container-fluid">
    <div class="row">
        <h1>Editar Otec</h1>
    </div>
    <div class="row mt-3">
        <form action="{{route('editar_otec')}}" method="POST" class="mt-1 w-100">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{$otec->id}}">
            <div class="form-row mb-3">

                <div class="col">
                    <label for="fecha">Fecha de Creacion(*)</label>
                    <input type="date" name="fecha_creacion" class="form-control" placeholder="Fecha de creacion" value="{{old('fecha_creacion',$otec->fecha_creacion)}}">
                    @error('fecha_creacion')
                    <div>
                        <p class="text-danger">(*)fecha de creacion es un campo necesario</p>
                    </div>
                    @enderror
                </div>

                <div class="col">
                    <label for="fecha">Rut(*)</label>
                    <input type="text" name="rut" class="form-control" placeholder="Rut" value="{{old('rut',$otec->rut)}}">
                    @error('rut')
                    <div>
                        <p class="text-danger">(*)rut es un campo necesario</p>
                    </div>
                    @enderror
                </div>

            </div>
            <div class="form-row mb-3">
                <div class="col">
                    <label for="fecha">Razon Social(*)</label>
                    <input type="text" name="razon_social" class="form-control" placeholder="Razon Social" value="{{old('razon_social',$otec->razon_social)}}">
                    @error('razon_social')
                    <div>
                        <p class="text-danger">(*)razon social es un campo necesario</p>
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="fecha">Nombre de Fantasia(*)</label>
                    <input type="text" name="nombre_fantasia" class="form-control" placeholder="Nombre de Fantasia" value="{{old('nombre_fantasia',$otec->nombre_fantasia)}}">
                    @error('nombre_fantasia')
                    <div>
                        <p class="text-danger">(*)nombre_fantasia es un campo necesario</p>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="col">
                    <label for="fecha">Direccion(*)</label>
                    <input type="text" name="direccion" class="form-control" placeholder="Direccion" value="{{old('direccion',$otec->direccion)}}">
                    @error('direccion')
                    <div>
                        <p class="text-danger">(*)direccion es un campo necesario</p>
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="fecha">Comuna(*)</label>
                    <input type="text" name="comuna" class="form-control" placeholder="Comuna" value="{{old('comuna',$otec->comuna)}}">
                    @error('comuna')
                    <div>
                        <p class="text-danger">(*)comuna es un campo necesario</p>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="col">
                    <label for="fecha">Region(*)</label>
                    <input type="text" name="region" class="form-control" placeholder="region" value="{{old('region',$otec->region)}}">
                    @error('region')
                    <div>
                        <p class="text-danger">(*)region es un campo necesario</p>
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="fecha">Telefono(*)</label>
                    <input type="text" name="telefono" class="form-control" placeholder="Telefono" value="{{old('telefono',$otec->telefono)}}">
                    @error('telefono')
                    <div>
                        <p class="text-danger">(*)telefono es un campo necesario</p>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="col">
                    <label for="fecha">Telefono 2(Opcional)</label>
                    <input type="text" name="telefono_2" class="form-control" placeholder="Telefono 2" value="{{old('telefono_2',$otec->telefono_2)}}">
                </div>
                <div class="col">
                    <label for="fecha">Correo Electronico(*)</label>
                    <input type="email" name="email" class="form-control" placeholder="Correo Electronico" value="{{old('email',$otec->email)}}" email>
                    @error('email')
                    <div>
                        <p class="text-danger">(*)email es un campo necesario, debe ser un formato valido </p>
                    </div>
                    @enderror
                 
                </div>
            </div>
            <div class="form-row mb-5">
                <div class="col ml-2">
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                    <a href="{{route('otec')}}" class="btn btn-info float-rigth">Volver</a>
                </div>
            </div>

        </form>
    </div>

</div>
@break

@default
<h1>default</h1>
@break


@endswitch








@endif
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop