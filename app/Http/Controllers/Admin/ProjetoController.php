<?php

namespace App\Http\Controllers\Admin;

use App\Models\Projeto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjetoController extends Controller
{

    public function index()
    {
        $projeto = Projeto::all();
        return view('admin.projetos.index', ['projeto' => $projeto]);
    }


    public function create()
    {
        $projeto = new Projeto();
        return view('admin.projetos.cadastrar', ['projeto' => $projeto]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_projeto' => 'required',
            'descricao' => 'required',
            'objetivo' => 'required',
            'data_criacao' => 'required',
            'situacao' => 'required',
            'curso_id' => 'required',
            'categoria_id' => 'required',
        ]);

        try {
            $projeto = new Projeto;
            $projeto->nome_projeto = $request->nome_projeto;
            $projeto->descricao = $request->descricao;
            $projeto->objetivo = $request->objetivo;
            $projeto->data_criacao = $request->data_criacao;
            $projeto->situacao = $request->situacao;
            $projeto->curso_id = $request->curso_id;
            $projeto->categoria_id = $request->categoria_id;
            $projeto->save();

            return redirect()->route('admin.projetos.index')->with('sucesso', 'Curso cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao cadastrar, por favor tente novamente!');
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
