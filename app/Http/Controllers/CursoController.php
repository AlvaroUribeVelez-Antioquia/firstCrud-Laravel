<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use League\CommonMark\Normalizer\SlugNormalizer;

class CursoController extends Controller
{ 
    public function index(){
        $cursos = Curso::orderBy('id','desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){
        
        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->save();
        $request->merge([
            'slug' => Str::slug($request->name),
          ]);

        $curso = Curso::create($request->all()); 
       
        return redirect()->route('cursos.show',$curso);
    }

    public function show(Curso $curso){
        return view('cursos.show',compact('curso'));
    }

    public function edit(Curso $curso){
       return view('cursos.edit',compact('curso'));
    }

    
    public function update(Request $request,Curso $curso){
        $request->validate([
            'name'=>'required',
            'descripcion'=>'required'
        ]);

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->save();    

        $curso->update($request->all());
        
        $curso->slug = Str::slug($curso->name = $request->name,"-");
        $curso->save();
        
        return redirect()->route('cursos.show',$curso->slug);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
