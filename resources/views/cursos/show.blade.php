@extends('layouts.plantilla')

@section('title','Curso '. $curso->name)

@section('content')
<br>
<div class="container mx-auto px-4" >
    <div class="text-2xl">
      <h1>Bienvenido al curso: {{$curso->name}}</h1>
    </div>
<br>
<div>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit',$curso)}}">Editar curso</a>
</div>

<br>
<br>
<p>Descripción: {{$curso->descripcion}}</p>
<br>

<form action="{{route('cursos.destroy',$curso)}}"method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
        Eliminar curso
      </button>
</form>
</div>
@endsection

