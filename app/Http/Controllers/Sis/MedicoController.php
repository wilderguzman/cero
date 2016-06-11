<?php

namespace App\Http\Controllers\Sis;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Medico;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $medico = Medico::paginate(15);

        return view('sis.medico.index', compact('medico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('sis.medico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['horario' => 'required', 'especialidad' => 'required', ]);

        Medico::create($request->all());

        Session::flash('flash_message', 'Medico added!');

        return redirect('sis/medico');
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
        $medico = Medico::findOrFail($id);

        return view('sis.medico.show', compact('medico'));
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
        $medico = Medico::findOrFail($id);

        return view('sis.medico.edit', compact('medico'));
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
        $this->validate($request, ['horario' => 'required', 'especialidad' => 'required', ]);

        $medico = Medico::findOrFail($id);
        $medico->update($request->all());

        Session::flash('flash_message', 'Medico updated!');

        return redirect('sis/medico');
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
        Medico::destroy($id);

        Session::flash('flash_message', 'Medico deleted!');

        return redirect('sis/medico');
    }
}
