<?php

namespace App\Http\Controllers\Ueducativa;

use App\Http\Controllers\Controller;
use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $niveles = Nivel::all();
        return view('ueducativas.niveles.index', compact('niveles'));
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
            'nombre' => 'required|string|max:255|unique:nivels,nombre',
        ]);

        Nivel::create($request->all());

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El nivel se creo correctamente'
        ]);

        return Redirect()->route('nivels.index');
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
    public function update(Request $request, Nivel $nivel)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:nivels,nombre,'. $nivel->id,
        ]);

        $nivel->update($request->all());
         session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El nivel se actualizo correctamente'
        ]); 
        return redirect()->route('nivels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nivel $nivel)
    {
        $nivel->delete();
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El nivel se elimino correctamente'
        ]); 
        return redirect()->route('nivels.index');
    }
}
