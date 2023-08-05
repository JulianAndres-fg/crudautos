<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Autos = Auto::all();
        return view('Autos.index',compact('Autos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Autos = new Auto;
        $Autos->Nombre=$request->input('Nombre');
        $Autos->Marca=$request->input('Marca');
        $Autos->kilometraje=$request->input('Kilometraje');
        $Autos->Modelo=$request->input('Modelo');
        $Autos->Precio=$request->input('Precio');
        $Autos->save();
        session()->flash('success', 'El auto se ha registrado correctamente.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,$id)
    {
        $Autos= Auto::find($id);
        $Autos->Nombre=$request->input('Nombre');
        $Autos->Marca=$request->input('Marca');
        $Autos->kilometraje=$request->input('Kilometraje');
        $Autos->Modelo=$request->input('Modelo');
        $Autos->Precio=$request->input('Precio');
        $Autos->update();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auto $auto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $Autos= Auto::find($id);
        $Autos->Nombre=$request->input('Nombre');
        $Autos->Marca=$request->input('Marca');
        $Autos->kilometraje=$request->input('Kilometraje');
        $Autos->Modelo=$request->input('Modelo');
        $Autos->Precio=$request->input('Precio');
        $Autos->update();
        session()->flash('update','El auto se actualizado correctamente');
        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Autos= Auto::find($id);
        $Autos->delete();
        return redirect()->back();
    }
}
