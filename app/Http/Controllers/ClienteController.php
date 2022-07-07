<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClienteController extends Controller
{
    
    public function login() {
        return view('login');
    }

    public function index() {

        return view('index');

    }

    public function clientes() {
        
        $clientes = Cliente::all();

        return view('clientes.clientes', ['clientes' => $clientes]);

    }

    public function cadastroCliente() {
        return view('clientes.cadastro-cliente');
    }

    public function store(Request $request) {

        $cliente = new Cliente;

        $cliente->nome = $request->inputName;
        $cliente->telefone = $request->inputFone;
        $cliente->email = $request->inputEmail;

        $cliente->save();

        return redirect('/clientes')->with('msg', 'Cliente cadastrado com sucesso!');

    }

    public function show($id) {

        $cliente = Cliente::findOrFail($id);

        return view('clientes.show', ['cliente' => $cliente]);

    }

    public function destroy($id) {

        Cliente::findOrFail($id)->delete();

        return redirect('/clientes')->with('msg', 'Cliente excluido com sucesso!');

    }

    public function edit($id) {

        $cliente = Cliente::findOrFail($id);

        return view('clientes.edit', ['cliente' => $cliente]);

    }

    public function update(Request $request) {

        $cliente = Cliente::findOrFail($request->id)->update($request->all());

        return redirect('/clientes')->with('msg', 'Cliente editado com sucesso!');

    }


}
