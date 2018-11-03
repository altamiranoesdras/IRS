<?php

namespace App\Http\Controllers;

use App\Contenido;
use Illuminate\Http\Request;

class ContenidoController extends Controller
{

    /**
     * PortafolioController constructor.
     */
    public function __construct()
    {
//        $this->middleware('gues')
    }

    public function index()
    {
        $contenidos = Contenido::paginate(5);
        return view('contenidos.index',compact('contenidos'));
    }

    public function show(Contenido $contenido)
    {
        return view('contenidos.show',compact('contenido'));
    }
}
