@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')
<div class="container mx-auto px-4" >
    <h1>Página principal de cursos</h1>
    <strong>
        <a href="{{route('cursos.create')}}">Crear curso</a>
    </strong>
    <br><br>

    <ul>
        @foreach ($cursos as $curso)
            <li >
                <a  href="{{route('cursos.show',$curso)}}">{{$curso->name}}</a>
                <br>
                {{-- {{route('cursos.show',$curso)}} --}}
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}
  </div>
    
@endsection