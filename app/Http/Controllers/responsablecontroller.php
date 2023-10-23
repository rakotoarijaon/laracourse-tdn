<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable;
use App\Models\Fonction;
use App\Models\Service;
use App\Models\Admin;
class responsablecontroller extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $responsable = Responsable::all();
        return view('responsable.index',$data,compact('responsable'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $fonction = Fonction::all();
        $service = Service::all();
        $doublevariable=compact('fonction','service');
        return view('responsable.create',$data)->with($doublevariable);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'responsable_matricule'=>'required|max:10|unique:responsables',
            'responsable_nom'=>'required|max:50',
            'responsable_prenom'=>'required|max:50',
            'service_id'=>'required',
            'fonction_id'=>'required',
        ],[
            'responsable_matricule.required'=>'Ce champ ne doit pas être vide',
            'responsable_matricule.max'=>' ce champ doit contenir au maximum que 10 caractere',
        ]);
        Responsable::create($request->post());
        return redirect()->route('responsable.index')->with('success','succés');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $responsable = Responsable::find($id);
        return view('responsable.show',$data,compact('responsable'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $fonction = Fonction::all();
        $service = Service::all();
        $responsable = Responsable::findOrfail($id);
        $doublevariable=compact('fonction','service','responsable');
        return view('responsable.edit',$data)->with($doublevariable);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validateresponsable=$request->validate([
            'responsable_matricule'=>'required|max:10',
            'responsable_nom'=>'required|max:50',
            'responsable_prenom'=>'required|max:50',
            'service_id'=>'required',
            'fonction_id'=>'required',
        ]);
        Responsable::whereId($id)->update($validateresponsable);
        return redirect()->route('responsable.index')->with('success','succés');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $responsable = Responsable::findOrfail($id);
        $responsable->delete();
        return redirect()->route('responsable.index')->with('success','succés');
    }
}
