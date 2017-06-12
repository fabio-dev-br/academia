<?php

namespace App\Http\Controllers;

use App\Despesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AgendasController extends Controller
{
    public function index()
    {
        $agendas = Agenda::get();
        return view('agendas.lista', ['agendas' => $agendas]);
    }

    public function novo()
    {
        return view('agendas.formulario');
    }

    public function salvar(Request $request)
    {
        $agenda = new Agendas();

        $agenda = $agenda->create($request->all());

        \Session::flash('mensagem_sucesso', 'Horario cadastrado com sucesso!');

        return Redirect::to('agendas/novo');
    }
    public function editar($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('agendas.formulario', ['agenda' => $agenda]);
    }
    public function atualizar($id, Request $request)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->update($request->all());
        \Session::flash('mensagem_sucesso', 'Horario atualizado com sucesso!');
        return Redirect::to('agendas/'.$agenda->id.'/editar');
    }
    public function deletar($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();
        \Session::flash('mensagem_sucesso', 'Horario deletado com sucesso!');
        return Redirect::to('agendas/');
    }
}