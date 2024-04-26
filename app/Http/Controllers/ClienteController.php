<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        $cliente = Cliente::all();
        return response()->json($cliente);
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->tickets = $request->ticket;
        $cliente->evento_id = $request->evento_id;
        $cliente->save();

        // Arreglo con mensaje de exito y el objeto de cliente
        $res = [
            "message" => "Compra creada correctamente",
            "cliente" => $cliente
        ];

        return response()->json($res);
    }

    public function show(Cliente $cliente)
    {   
        $compras = $cliente::all("tickets");
        return response()->json($compras);
    }

}
