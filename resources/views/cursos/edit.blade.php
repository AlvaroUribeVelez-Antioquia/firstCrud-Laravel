@extends('layouts.plantilla')

@section('title','Crear curso')

@section('content')
    <h1>Editar curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        {{-- genera un token, el cual es obligatorio en Laravel para enviar un formulario --}}
        @csrf

        @method('put')
        
        <label>
            Nombre:
            <br>
            <input type="text"name="name" value="{{old('name',$curso->name)}}">
        </label>
        <br>

        @error('name')
            <small>*{{$message}}</small>
        @enderror

        <br>
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5" >{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>
        <br>
        @error('descripcion')
            <small>*{{$message}}</small>
        @enderror
      
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection