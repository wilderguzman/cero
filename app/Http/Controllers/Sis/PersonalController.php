<?php

namespace App\Http\Controllers\Sis;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Personal;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $personal = Personal::paginate(15);

        return view('sis.personal.index', compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('sis.personal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre' => 'required', 'a_paterno' => 'required', 'a_materno' => 'required', 'ci' => 'required', 'fecha_de_nac' => 'required', 'matricula' => 'required', ]);

        Personal::create($request->all());

        Session::flash('flash_message', 'Personal added!');

        return redirect('sis/personal');
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
        $personal = Personal::findOrFail($id);

        return view('sis.personal.show', compact('personal'));
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
        $personal = Personal::findOrFail($id);

        return view('sis.personal.edit', compact('personal'));
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
        $this->validate($request, ['nombre' => 'required', 'a_paterno' => 'required', 'a_materno' => 'required', 'ci' => 'required', 'fecha_de_nac' => 'required', 'matricula' => 'required', ]);

        $personal = Personal::findOrFail($id);
        $personal->update($request->all());

        Session::flash('flash_message', 'Personal updated!');

        return redirect('sis/personal');
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
        Personal::destroy($id);

        Session::flash('flash_message', 'Personal deleted!');

        return redirect('sis/personal');
    }
}
