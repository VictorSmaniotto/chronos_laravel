<?php

namespace App\Http\Controllers\Admin;

use App\Models\Curso;
use App\Models\Projeto;
use App\Models\Categoria;
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

        return view('admin.projetos.cadastrar', [
            'projeto' => $projeto,
            'categorias' =>Categoria::all(),
            'cursos' => Curso::all(),
        ]);
    }

    public function store(Request $request)
    {
        $nomeMidia = null;
        if ($request->hasFile('capa') && $request->file('capa')->isValid())
        {
            $nome = uniqid(date('HisYmd'));
            $extension = $request->capa->extension();
            $nomeMidia = "{$nome}.{$extension}";
            $upload = $request->capa->storeAs('projetosMidias', $nomeMidia);
            if ( !$upload )
            return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload')
                        ->withInput();
        }

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
            $projeto->data_entrega = $request->data_entrega;
            $projeto->palavras_chave = $request->palavras_chave;
            $projeto->situacao = $request->situacao;
            $projeto->curso_id = $request->curso_id;
            $projeto->categoria_id = $request->categoria_id;
            $projeto->capa = $nomeMidia;
            $projeto->save();

            return redirect()->route('admin.projetos.index')->with('sucesso', 'Curso cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao cadastrar, por favor tente novamente!');
        }
    }


    public function edit($id)
    {
        return view('admin.projetos.editar', [
            'projeto'=>Projeto::findOrFail($id),
            'cursos'=>Curso::all(),
            'categorias' =>Categoria::all()

        ]);
    }


    public function update(Request $request, $id)
    {
        $projeto = Projeto::findOrFail($id);
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

            $projeto->nome_projeto = $request->nome_projeto;
            $projeto->descricao = $request->descricao;
            $projeto->objetivo = $request->objetivo;
            $projeto->data_criacao = $request->data_criacao;
            $projeto->data_entrega = $request->data_entrega;
            $projeto->palavras_chave = $request->palavras_chave;
            $projeto->situacao = $request->situacao;
            $projeto->curso_id = $request->curso_id;
            $projeto->categoria_id = $request->categoria_id;
            $projeto->capa = $request->capa;    //file('capa')->isValid();
            $projeto->save();

            return redirect()->route('admin.projetos.index')->with('sucesso', 'Curso editado com sucesso!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao editar, por favor tente novamente!');
        }
    }


    public function destroy($id)
    {
        try {
            Projeto::findOrFail($id)->delete();
            return redirect()->back()->with('sucesso', 'Registro excluído com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocorreu um erro ao excluir, por favor tente novamente!');
        }
    }
}
