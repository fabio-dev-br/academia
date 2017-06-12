<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::get();
        return view('usuarios.lista', ['usuarios' => $usuarios]);
    }

    public function novo()
    {
        return view('usuarios.formulario');
    }
	 public function salvar(Request $request)
    {
        $usuario = new Usuario();

        $usuario = $usuario->create($request->all());

        \Session::flash('mensagem_sucesso', 'Usuário cadastrado com sucesso!');

        return Redirect::to('usuarios/novo');
    }
    public function editar($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.formulario', ['usuario' => $usuario]);
    }
    public function atualizar($id, Request $request)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
        \Session::flash('mensagem_sucesso', 'Usuário atualizado com sucesso!');
        return Redirect::to('usuarios/'.$usuario->id.'/editar');
    }
    public function deletar($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        \Session::flash('mensagem_sucesso', 'Usuário deletado com sucesso!');
        return Redirect::to('usuarios/');
    }
}