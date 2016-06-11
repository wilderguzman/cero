<?php

namespace App\Http\Controllers\Sis;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Medicamento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $medicamento = Medicamento::paginate(15);

        return view('sis.medicamento.index', compact('medicamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('sis.medicamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['codigo' => 'required', 'nombre' => 'required', 'cantidad' => 'required', ]);

        Medicamento::create($request->all());

        Session::flash('flash_message', 'Medicamento added!');

        return redirect('sis/medicamento');
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
        $medicamento = Medicamento::findOrFail($id);

        return view('sis.medicamento.show', compact('medicamento'));
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
        $medicamento = Medicamento::findOrFail($id);

        return view('sis.medicamento.edit', compact('medicamento'));
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
        $this->validate($request, ['codigo' => 'required', 'nombre' => 'required', 'cantidad' => 'required', ]);

        $medicamento = Medicamento::findOrFail($id);
        $medicamento->update($request->all());

        Session::flash('flash_message', 'Medicamento updated!');

        return redirect('sis/medicamento');
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
        Medicamento::destroy($id);

        Session::flash('flash_message', 'Medicamento deleted!');

        return redirect('sis/medicamento');
    }
}
