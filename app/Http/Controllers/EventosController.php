<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    
    public function index()
    {
        $eventos = Eventos::all();
        return response()->json($eventos);
    }

    public function show(Eventos $eventos)
    {
        return response()->json($eventos);
    }

}
