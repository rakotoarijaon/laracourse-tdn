<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;
use App\Models\Admin;
class voiturecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $voiture = Voiture::all();
        return view('voiture.index',$data,compact('voiture'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('voiture.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'voiture_numero'=>'required|max:10|regex:/(^([0-9 a-z A-z]+)$)/u|unique:voitures',
            'voiture_type'=>'required',
        ],[
            'voiture_numero.max'=> 'Ce champs doit contenir 10 caracteres',
        ]);

     Voiture::create($request->post());

        return redirect()->route('voiture.index')->with('success',' Ajout avec succée');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $voiture = Voiture::find($id);
        return view('voiture.show',$data, ['voiture' => $voiture]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $voiture = Voiture::findOrfail($id);
       return view('voiture.edit',$data,compact('voiture'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validatevoiture = $request->validate([
            'voiture_numero'=>'required|max:10|regex:/(^([0-9 a-z A-z]+)$)/u',
            'voiture_type'=>'required',
        ]);
        Voiture::whereId($id)->update( $validatevoiture);
        return redirect()->route('voiture.index')->with('success',' Modification avec succé');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $voiture=Voiture::findOrFail($id);
        $voiture->delete();
        return redirect()->route('voiture.index')->with('success',' suppression avec succé');
    }
}
