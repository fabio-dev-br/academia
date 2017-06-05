<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DespesasController extends Controller
{
    public function index()
    {
        $despesas = Despesas::get();
        return view('despesas.lista', ['despesas' => $despesas]);
    }
    //
}
