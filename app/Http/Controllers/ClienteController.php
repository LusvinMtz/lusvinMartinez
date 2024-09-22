<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientePotencial;


class ClienteController extends Controller
{
    public function index()
    {
        $clientes = ClientePotencial::all();
        return view('clientes.index', compact('clientes'));
    }
    public function create()
    {
        return view('clientes.create');
    }
    public function store(Request $request)
    {
        $cliente = new ClientePotencial();
        $cliente->nombre = $request->nombre;
        $cliente->email = $request->email;
        $cliente->cerrado = false;
        $cliente->save();
        return redirect()->route('clientes.index')->with('success', 'Cliente creado con éxito');
    }
    public function edit($id)
    {
        $cliente = ClientePotencial::findOrFail($id);
        return view('clientes.create', compact('cliente'));
    }
    public function update(Request $request, $id)
    {
        $cliente = ClientePotencial::findOrFail($id);
        $cliente->nombre = $request->nombre;
        $cliente->email = $request->email;
        $cliente->cerrado = $request->cerrado;
        $cliente->save();
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado con éxito');
    }
    public function destroy($id)
    {
        $cliente = ClientePotencial::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado con éxito');
    }
}
