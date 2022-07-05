<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClienteController extends Controller
{
    
    public function index() {

        return view('index');

    }

    public function clientes() {
        
        $clientes = Cliente::all();

        return view('clientes', ['clientes' => $clientes]);

    }


}
