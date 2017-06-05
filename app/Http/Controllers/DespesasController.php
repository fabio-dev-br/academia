<?php

namespace App\Http\Controllers;

use App\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DespesasController extends Controller
{
    public function index()
    {
        $despesas = Despesas::get();
        return view('despesas.lista', ['despesas' => $despesas]);
    }

    public function novo()
    {
        return view('despesas.formulario');
    }

    public function salvar(Request $request)
    {
        $despesas = new Despesas();

        $despesas = $despesas->create($request->all());

        \Session::flash('mensagem_sucesso', 'Despesa cadastrada com sucesso!');

        return Redirect::to('despesas/novo');
    }
    public function editar($id)
    {
        $despesas = Despesas::findOrFail($id);
        return view('despesas.formulario', ['despesa' => $despesa]);
    }
    public function atualizar($id, Request $request)
    {
        $despesa = Despesa::findOrFail($id);
        $despesa->update($request->all());
        \Session::flash('mensagem_sucesso', 'Despesa atualizado com sucesso!');
        return Redirect::to('despesas/'.$despesa->id.'/editar');
    }
    public function deletar($id)
    {
        $despesa = Despesa::findOrFail($id);
        $despesa->delete();
        \Session::flash('mensagem_sucesso', 'Despesa deletada com sucesso!');
        return Redirect::to('despesas/');
    }
}