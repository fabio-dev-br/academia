<?php

namespace App\Http\Controllers;

use App\Cliente;
<<<<<<< HEAD
use App\patrimonio;
=======
>>>>>>> 0cbf2305b93b51b515a324e7174bdea33ee65007
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PatrimonioController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $patrimonio = patrimonio::get();
=======
        $patrimonios = patrimonio::get();
>>>>>>> 0cbf2305b93b51b515a324e7174bdea33ee65007
        return view('patrimonio.lista', ['patrimonios' => $patrimonios]);
    }

    public function novo()
    {
        return view('patrimonios.formulario');
    }

    public function salvar(Request $request)
    {
        $patrimonio = new patrimonio();

        $patrimonio = $patrimonio->create($request->all());

        \Session::flash('mensagem_sucesso', 'Patrimonio cadastrado com sucesso!');

        return Redirect::to('patrimonios/novo');

    }
    public function editar($id)
    {
        $patrimonio = patrimonio::findOrFail($id);
        return view('patrimonios.formulario', ['patrimonio' => $patrimonio]);
    }
    public function atualizar($id, Request $request)
    {
        $patrimonio = patrimonio::findOrFail($id);
        $patrimonio->update($request->all());
        \Session::flash('mensagem_sucesso', 'Patrimonio atualizado com sucesso!');
        return Redirect::to('patrimonios/'.$patrimonio->id.'/editar');
    }
    public function deletar($id)
    {
        $patrimonio = patrimonio::findOrFail($id);
        $patrimonio->delete();
        \Session::flash('mensagem_sucesso', 'patrimonio deletado com sucesso!');
        return Redirect::to('patrimonios/');
    }
}
