<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index()
    {
        $usuarios = User::all();
        return view('admin.usuarios.index', ['usuarios' => $usuarios]);

    }


    public function create()
    {


        return view('admin.usuarios.cadastrar', ['usuarios'=> new User()]);

    }


    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'tipo_usuario' => 'required',
            'situacao' => 'required'
        ]);

        try {
            $usuario = new User();
            $usuario->nome = $request->nome;
            $usuario->email = $request->email;
            $usuario->password = bcrypt($request->password);
            $usuario->tipo_usuario = $request->tipo_usuario;
            $usuario->situacao = $request->situacao;
            $usuario->save();

            return redirect()->route('admin.usuarios.index')->with('sucesso', 'Usuário cadastrado com sucesso');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao cadastrar, por favor tente novamente');
        }
    }


    public function show($id)
    {
        return view('admin.usuarios.visualizar', ['usuarios' => User::findOrFail($id)]);
    }


    public function edit($id)
    {
        return view('admin.usuarios.editar', ['usuarios' => User::findOrFail($id)]);
    }


    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $request->validate([
            'nome' => 'required',
            'email' => "required|email|unique:users,id,{$id}",
            'password' => 'required|min:8',
            'tipo_usuario' => 'required',
            'situacao' => 'required'
        ]);

        try {
            $usuario->nome = $request->nome;
            $usuario->email = $request->email;

            if(!empty($request->password)){
                $usuario->password = bcrypt($request->password);
            }

            $usuario->tipo_usuario = $request->tipo_usuario;
            $usuario->situacao = $request->situacao;
            $usuario->save();

            return redirect()->route('admin.usuarios.index')->with('sucesso', 'Usuário editado com sucesso');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->withInput()->with('erro', 'Ocorreu um erro ao editar, por favor tente novamente');
        }
    }


    public function destroy($id)
    {
        try {
            User::findOrfail($id)->delete();
            return redirect()->back()->with('sucesso', 'Registro excluído com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocorreu um erro ao excluir, por favor tente novamente!');
        }
    }
}
