<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('citas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function videos()
    {
        return view('videos.index');
    }

    public function home()
    {
        return view('categorias.index');
    }

    public function pageVideos()
    {
        return view('pagevideo.index');
    }

    public function detalle($id)
    {
        return view('pagevideo.index', compact('id'));
    }

    public function canal($id)
    {
        return view('canal.index', compact('id'));
    }

    public function usuarios()
    {
        return view('usuarios.index');
    }



    public function historial()
    {
        return view('historial.index');
    }

    

}
