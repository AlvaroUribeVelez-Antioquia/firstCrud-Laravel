@extends('layouts.plantilla')

@section('title','Crear curso')

@section('content')
    <h1>Crar curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        {{-- genera un token, el cual es obligatorio en Laravel para enviar un formulario --}}
        @csrf
        

        <label>
            Nombre:
            <br>
            <input type="text"name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <input type="hidden" name="slug" value="slug">

        
        
<br>
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>
        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection 