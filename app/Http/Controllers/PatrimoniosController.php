<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======

>>>>>>> a9b9b89b1b59e4b9b89cdd6cfd6f1907cc403488
use App\Patrimonio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PatrimoniosController extends Controller
{
    public function index()
    {
        $patrimonios = Patrimonio::get();
        return view('patrimonios.lista', ['patrimonios' => $patrimonios]);
    }

    public function novo()
    {
        return view('patrimonios.formulario');
    }

    public function salvar(Request $request)
    {
        $patrimonio = new Patrimonio();

        $patrimonio = $patrimonio->create($request->all());

        \Session::flash('mensagem_sucesso', 'patrimonios cadastrado com sucesso!');

        return Redirect::to('patrimonios/novo');
    }
    public function editar($id)
    {
        $patrimonio = Patrimonio::findOrFail($id);
        return view('patrimonios.formulario', ['patrimonios' => $patrimonio]);
    }
    public function atualizar($id, Request $request)
    {
        $patrimonio = Patrimonio::findOrFail($id);
        $patrimonio->update($request->all());
        \Session::flash('mensagem_sucesso', 'Patrimonio atualizado com sucesso!');
        return Redirect::to('patrimonios/'.$patrimonio->id.'/editar');
    }
    public function deletar($id)
    {
        $patrimonio = Patrimonio::findOrFail($id);
        $patrimonio->delete();
        \Session::flash('mensagem_sucesso', 'Patrimonio deletado com sucesso!');
        return Redirect::to('patrimonios/');
    }
}