<?php

namespace App\Http\Controllers\Ueducativa;

use App\Http\Controllers\Controller;
use App\Models\Gestion;
use Illuminate\Http\Request;

class GestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gestions = Gestion::all();
        return view('ueducativas.gestions.index', compact('gestions'));
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
        $request->validate([
            'nombre' => 'required|string|max:255|unique:gestions,nombre',
        ]);

        Gestion::create($request->all());
       
         session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'La Gestión se creo correctamente'
        ]);

        return Redirect()->route('gestions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gestion $gestion)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:gestions,nombre,'.$gestion->id,
        ]);

        $gestion->update($request->all());

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'La Gestión se actualizo correctamente'
        ]);

        return Redirect()->route('gestions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gestion $gestion)
    {
        $gestion->delete();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'La Gestión se elimino correctamente'
        ]);

        return Redirect()->route('gestions.index');
    }
}
