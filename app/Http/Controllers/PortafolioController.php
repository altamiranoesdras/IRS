<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioController extends Controller
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
}
