<?php

namespace App\Http\Controllers;

use App\Treino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TreinosController extends Controller
{
    public function index()
    {
        $treinos = Treino::get();
        return view('treinos.lista', ['treinos' => $treinos]);
    }

    public function novo()
    {
        return view('treinos.formulario');
    }

    public function salvar(Request $request)
    {
        $treino = new Treino();

        $treino = $treino->create($request->all());

        \Session::flash('mensagem_sucesso', 'Treino criado com sucesso!');

        return Redirect::to('treinos/novo');

    }
    public function editar($id)
    {
        $treino = Treino::findOrFail($id);
        return view('treinos.formulario', ['treino' => $treino]);
    }
    public function atualizar($id, Request $request)
    {
        $treino = Treino::findOrFail($id);
        $treino->update($request->all());
        \Session::flash('mensagem_sucesso', 'Treino atualizado com sucesso!');
        return Redirect::to('treinos/'.$treino->id.'/editar');
    }
    public function deletar($id)
    {
        $treino = Treino::findOrFail($id);
        $treino->delete();
        \Session::flash('mensagem_sucesso', 'Treino deletado com sucesso!');
        return Redirect::to('treinos/');
    }
}
