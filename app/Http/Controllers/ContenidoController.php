<?php

namespace App\Http\Controllers;

use App\Contenido;
use Auth;
use DB;
use Exception;
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

    public function create()
    {
        return view('contenidos.create_edit');
    }

    public function store(Request $request)
    {
//        dd($request->all());

        try {
            DB::beginTransaction();

            if ($request->hasFile('file')){
                $request->file('file')->store('contenidos');
                $img = $request->file('file')->hashName();
                $request->merge(['imagen' => $img]);
            }

            $request->merge(['user_id' => Auth::user()->id]);
            $request->merge(['extracto' => substr($request->cuerpo,0,251).'...']);

            $contenido = Contenido::create($request->all());


        } catch (Exception $exception) {
            DB::rollBack();
            $msg = $exception->getMessage();

            if(Auth::user()->isAdmin()){
                flash('Error: <br>'.$msg)->error()->important();
            }else{
                flash('Hubo un error, intente de nuevo')->error();
            }

            return redirect()->back();
        }


        DB::commit();

        flash('Contenido guardaddo con exito')->success();

        return redirect(route('contenidos.index'));

    }
}
