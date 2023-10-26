<?php

namespace App\Http\Controllers;
use App\Models\Fonction;
use App\Models\Admin;
use Illuminate\Http\Request;

class fonctioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $fonction = Fonction::all();
        return view('fonction.index',$data,compact('fonction'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('fonction.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'fonction_nom'=>'required|max:50',
        ],[
            'fonction_nom.required'=>'Entrer le nom de la fonction',
            'fonction_nom.max'=>'Ce champs doit contenir au maximum 50 lettres'
        ]);
        Fonction::create($request->post());
        return redirect()->route('fonction.index')->with('success',  'Ajout avec succée');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $fonction = Fonction::find($id);
        return view('fonction.show',$data,compact('fonction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $fonction = Fonction::findOrfail($id);
        return view('fonction.edit',$data,compact('fonction'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validatefonction = $request->validate([
            'fonction_nom'=>'required|max:50'
        ]);
        Fonction::whereId($id)->update($validatefonction);
        return redirect()->route('fonction.index')->with('success',' Modification avec succée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $fonction= Fonction::findOrfail($id);
        $fonction->delete();
        return redirect()->route('fonction.index')->with('success',' suppression avec succée');

    }
}
