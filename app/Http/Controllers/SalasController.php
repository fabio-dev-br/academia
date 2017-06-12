<?php

namespace App\Http\Controllers;

use App\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SalasController extends Controller
{
    public function index()
    {
        $salas = Sala::get();
        return view('salas.lista', ['salas' => $salas]);
    }

    public function novo()
    {
        return view('salas.formulario');
    }

    public function salvar(Request $request)
    {
        $sala = new Sala();

        $sala = $sala->create($request->all());

        \Session::flash('mensagem_sucesso', 'Sala cadastrada com sucesso!');

        return Redirect::to('salas/novo');
    }
    public function editar($id)
    {
        $sala = Sala::findOrFail($id);
        return view('salas.formulario', ['sala' => $sala]);
    }
    public function atualizar($id, Request $request)
    {
        $sala = Sala::findOrFail($id);
        $sala->update($request->all());
        \Session::flash('mensagem_sucesso', 'Sala atualizada com sucesso!');
        return Redirect::to('salas/'.$sala->id.'/editar');
    }
    public function deletar($id)
    {
        $sala = Sala::findOrFail($id);
        $sala->delete();
        \Session::flash('mensagem_sucesso', 'Sala deletada com sucesso!');
        return Redirect::to('salas/');
    }
}