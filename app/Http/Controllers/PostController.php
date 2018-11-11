<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use DB;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(Request $request)
    {
        if(isset($request->user)){
            $posts = Post::delUSer($request->user)->simplePaginate(10);
        }else{

            $posts = Post::simplePaginate(10);
        }

        return view('posts.index',compact('posts'));

    }
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    public function create()
    {
        return view('posts.create_edit');
    }

    public function store(Request $request)
    {
//        dd($request->all());

        try {
            DB::beginTransaction();

            if ($request->hasFile('file')){
                $request->file('file')->store('posts');
                $img = $request->file('file')->hashName();
                $request->merge(['imagen' => $img]);
            }

            $request->merge(['user_id' => Auth::user()->id]);
            $request->merge(['extracto' => substr($request->cuerpo,0,251).'...']);

            $contenido = Post::create($request->all());


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

        flash('Post guardado con éxito')->success();

        return redirect(route('posts.index'));

    }
}
