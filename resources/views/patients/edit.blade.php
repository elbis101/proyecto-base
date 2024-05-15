@extends('layouts.panel')

@section('content')




   
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Editar Paciente</h3>
                </div>
                <div class="col text-right">
                <a href="{{ url('/patients') }}" class="btn btn-sm btn-success">Cancelar y volver</a>
                </div>
              </div>
            </div>

            <div class="card body">
            @if($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
     </div>
     @endif
   

            <form role="form" method="POST" action="{{url('/patients/'.$patient->id) }}">
        
           
             @csrf
              @method('put')

            <div class="form-group">
           
                <label form="name">Nombre del Paciente</label>
                <input type="text" name="name" class="form-control" value="{{old('name', $patient->name)}}" required>
            </div>
          
            <div class="form-group">
                <label form="email">E-mail</label>
                <input type="text" name="email" class="form-control" value="{{old('email',$patient->email)}}">
            </div>
             <div class="form-group">
                <label form="dni">DNI</label>
                <input type="text" name="dni" class="form-control" value="{{old('dni',$patient->dni)}}"required>
            </div>
             <div class="form-group">
                <label form="address">Direccion</label>
                <input type="text" name="address" class="form-control" value="{{old('address',$patient->address)}}">
            </div>
            <div class="form-group">
                <label form="phone">telefono</label>
                <input type="text" name="phone" class="form-control" value="{{old('phone',$patient->phone)}}">
            </div>
              <div class="form-group">
                <label form="password">Contraseña</label>
                
                <input type="text" name="password" class="form-control" value="">
                <p> Ingrese contraseña nueva si desea modificar </p>
            </div>
 
            <button type="submit" class="btn btn-sm btn-default">Guardar</button>
            </form>
          
        </div>
      </div>
@endsection
