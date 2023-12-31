<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

use App\Http\Requests\StoreCurso;
use Illuminate\Support\Str;

use function PHPSTORM_META\map;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){

        // $curso = new Curso();

        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        
        // $curso->save();
        $request['slug'] = Str::slug($request->name, '-');
        $curso = Curso::create($request->all());
        
        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){

        // compact("curso"); // ['curso' => $curso]

        return view('cursos.show', compact("curso"));
    }

    public function edit(Curso $curso){

        return view('cursos.edit', compact('curso'));

    }

    public function update(Request $request, Curso $curso){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);
        
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;

        // $curso->save();

        $curso->update($request->all());
        
        return redirect()->route('cursos.show', $curso);

    }

    public function destroy(Curso $curso){

        $curso->delete();

        return redirect()->route('cursos.index');

    }
    
}
