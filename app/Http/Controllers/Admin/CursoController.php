<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index()
    {
        $curso = Curso::all();
        return view('admin.cursos.index', ['cursos' => $curso] );
    }


    public function create()
    {
        $curso = new Curso();
        return view('admin.cursos.cadastrar', ['curso' => $curso]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'nome_curso' => 'required',
            'descricao' => 'required',
            'situacao' => 'required',
        ]);

        try {
            $curso = new Curso;
            $curso->nome_curso = $request->nome_curso;
            $curso->descricao = $request->descricao;
            $curso->situacao = $request->situacao;
            $curso->save();

            return redirect()->route('admin.cursos.index')->with('sucesso', 'Curso cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao cadastrar, por favor tente novamente!');
        }
    }



    public function edit($id)
    {
        return view('admin.cursos.editar', ['curso' => Curso::findOrFail($id)]);
    }


    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $request->validate([
            'nome_curso' => 'required',
            'descricao' => 'required',
            'situacao' => 'required',
        ]);

        try{
            $curso->nome_curso = $request->nome_curso;
            $curso->descricao = $request->descricao;
            $curso->situacao = $request->situacao;
            $curso->save();
            return redirect()->route('admin.cursos.index')->with('sucesso', 'Curso editado com sucesso!');
        } catch(\Exception $e){
            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao editar, por favor tente novamente!');
        }
    }

    public function destroy($id)
    {
        try {
            Curso::findOrFail($id)->delete();
            return redirect()->back()->with('sucesso', 'Registro excluído com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocorreu um erro ao excluir, por favor tente novamente!');
        }
    }
}
