<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// se agregan librerias de mensajes
use Laracasts\Flash\Flash;

use App\Http\Requests\PersonaRequest;

//agregando modelo Persona
use App\Persona;

use Illuminate\Support\Facades\Redirect;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $personas = Persona::search($request->nombre)->orderBy('id','ASC')->paginate(5);
        return view('admin.personas.index')->with('personas', $personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaRequest $request)
    {
        $persona = new Persona($request->all());
        $persona->save();
        Flash::success("Se ha registrado la persona ".$persona->nombre." exitosamente");
        return redirect()->route('admin.personas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::find($id);
        return view('admin.personas.show')->with('persona',$persona);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $persona = Persona::find($id);
            return view('admin.personas.edit')->with('persona',$persona);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $persona = Persona::find($id);
        $persona->fill($request->all()); 
        $persona->save();
        Flash::warning('Se ha modificado la persona '.$persona->nombre.' exitosamente');
        return redirect()->route('admin.personas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();
        Flash::error('Se ha eliminado la persona '.$persona->nombre.' exitosamente');
        return redirect()->route('admin.personas.index');
    }
}
