<?php

namespace App\Http\Controllers\Ueducativa;

use App\Http\Controllers\Controller;
use App\Models\Paralelo;
use Illuminate\Http\Request;

class ParaleloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paralelos = Paralelo::all();
        return view('ueducativas.paralelos.index', compact('paralelos'));
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
            'nombre' => 'required|string|max:255|unique:paralelos,nombre',
        ]);

        Paralelo::create($request->all());

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El paralelo se creo correctamente'
        ]);

        return Redirect()->route('paralelos.index');
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
    public function update(Request $request, Paralelo $paralelo)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:paralelos,nombre,' . $paralelo->id,
        ]);

        $paralelo->update($request->all());

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El paralelo se actualizo correctamente'
        ]);

        return redirect()->route('paralelos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paralelo $paralelo)
    {
        $paralelo->delete();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El paralelo se elimino correctamente'
        ]);

        return redirect()->route('paralelos.index');
    }
}
