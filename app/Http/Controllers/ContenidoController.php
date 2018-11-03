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

    public function index($portafolio)
    {
        return view('portafolio');
    }

    public function show(Contenido $contenido)
    {
        return view('contenido',compact('contenido'));
    }
}
