<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::all();
        return view('admin.categorias.index', ['categorias' => $categorias]);
    }


    public function create()
    {
        $categoria = new Categoria();
        return view('admin.categorias.cadastrar', ['categoria' => $categoria]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'nome_categoria' => 'required',
        ]);

        try {
            $categoria = new Categoria;
            $categoria->nome_categoria = $request->nome_categoria;
            $categoria->save();

            return redirect()->route('admin.categorias.index')->with('sucesso', 'Categoria cadastrada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao cadastrar, por favor tente novamente!');
        }

    }




    public function edit($id)
    {
        return view('admin.categorias.editar', [
            'categoria' => Categoria::findOrFail($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        $categoria = Categoria::findOrFail($id);

        $request->validate([
            'nome_categoria' => 'required',
        ]);

        try {
            $categoria->nome_categoria = $request->nome_categoria;
            $categoria->save();

            return redirect()->route('admin.categorias.index')->with('sucesso', 'Categoria Editada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao editar, por favor tente novamente!');
        }
    }


    public function destroy($id)
    {
        try {
            Categoria::findOrFail($id)->delete();
            return redirect()->back()->with('sucesso', 'Registro excluído com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocorreu um erro ao excluir, por favor tente novamente!');
        }
    }
}
