<?php

namespace App\Http\Controllers\Sis;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Asegurado;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class AseguradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $asegurado = Asegurado::paginate(15);

        return view('sis.asegurado.index', compact('asegurado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('sis.asegurado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre' => 'required', 'a_paterno' => 'required', 'a_materno' => 'required', 'c_i' => 'required', 'beneficiario_ci' => 'required', 'fecha_de_nac' => 'required', 'sexo' => 'required', 'grado' => 'required', 'fuerza' => 'required', 'titular' => 'required', 'tipo_de_asegurado' => 'required', 'n_historial' => 'required', ]);

        Asegurado::create($request->all());

        Session::flash('flash_message', 'Asegurado added!');

        return redirect('sis/asegurado');
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
        $asegurado = Asegurado::findOrFail($id);

        return view('sis.asegurado.show', compact('asegurado'));
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
        $asegurado = Asegurado::findOrFail($id);

        return view('sis.asegurado.edit', compact('asegurado'));
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
        $this->validate($request, ['nombre' => 'required', 'a_paterno' => 'required', 'a_materno' => 'required', 'c_i' => 'required', 'beneficiario_ci' => 'required', 'fecha_de_nac' => 'required', 'sexo' => 'required', 'grado' => 'required', 'fuerza' => 'required', 'titular' => 'required', 'tipo_de_asegurado' => 'required', 'n_historial' => 'required', ]);

        $asegurado = Asegurado::findOrFail($id);
        $asegurado->update($request->all());

        Session::flash('flash_message', 'Asegurado updated!');

        return redirect('sis/asegurado');
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
        Asegurado::destroy($id);

        Session::flash('flash_message', 'Asegurado deleted!');

        return redirect('sis/asegurado');
    }
}
