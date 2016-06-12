<?php

namespace App\Http\Controllers\Sis;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Recetum;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use App\Asegurado;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $receta = Recetum::paginate(15);

        return view('sis.receta.index', compact('receta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {

         $datem = Carbon::now();
         $datem->format('Y-m-d');

         $asegurado=Asegurado::orderBy('nombre', 'asc')->lists('nombre', 'id');
        return view('sis.receta.create', compact('datem','asegurado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['n_receta' => 'required', 'fecha' => 'required', 'modo_uso' => 'required', 'f_ini_tra' => 'required', 'f_fin_tra' => 'required', ]);

        Recetum::create($request->all());

        Session::flash('flash_message', 'Recetum added!');

        return redirect('sis/receta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $recetum = Recetum::findOrFail($id);

        return view('sis.receta.show', compact('recetum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $recetum = Recetum::findOrFail($id);

        $datem = Carbon::now();
         $datem->format('Y-m-d');

         $asegurado=Asegurado::orderBy('nombre', 'asc')->lists('nombre', 'id');

        return view('sis.receta.edit', compact('recetum','datem','asegurado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['n_receta' => 'required', 'fecha' => 'required', 'modo_uso' => 'required', 'f_ini_tra' => 'required', 'f_fin_tra' => 'required', ]);

        $recetum = Recetum::findOrFail($id);
        $recetum->update($request->all());

        Session::flash('flash_message', 'Recetum updated!');

        return redirect('sis/receta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        Recetum::destroy($id);

        Session::flash('flash_message', 'Recetum deleted!');

        return redirect('sis/receta');
    }
}
