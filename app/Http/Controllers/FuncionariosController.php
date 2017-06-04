<?php

namespace App\Http\Controllers;

use App\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FuncionariosController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::get();
        return view('funcionarios.lista', ['funcionarios' => $funcionarios]);
    }

    public function novo()
    {
        return view('funcionarios.formulario');
    }

    public function salvar(Request $request)
    {
        $funcionario = new Funcionario();

        $funcionario = $funcionario->create($request->all());

        \Session::flash('mensagem_sucesso', 'Funcionário cadastrado com sucesso!');

        return Redirect::to('funcionarios/novo');
    }
    public function editar($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.formulario', ['funcionario' => $funcionario]);
    }
    public function atualizar($id, Request $request)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());
        \Session::flash('mensagem_sucesso', 'Funcionário atualizado com sucesso!');
        return Redirect::to('funcionarios/'.$funcionario->id.'/editar');
    }
    public function deletar($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();
        \Session::flash('mensagem_sucesso', 'Funcionário deletado com sucesso!');
        return Redirect::to('funcionarios/');
    }
}