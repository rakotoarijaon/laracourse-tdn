<?php

namespace App\Http\Controllers;
use App\Models\Lieu;
use App\Models\Admin;
use Illuminate\Http\Request;

class lieucontroller extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $lieu = Lieu::all();
        return view('lieu.index',$data,compact('lieu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('lieu.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'lieu_nom'=>'required|max:50',
        ],[
            'lieu_nom.required'=>'ce champ ne doit pas être vide',
           'lieu_nom.max'=>'les caractère maximal doit etre 50'
        ]);
        Lieu::create($request->post());
        return redirect()->route('lieu.index')->with('success','succés');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $lieu = Lieu::find($id);
        return view('lieu.show',$data,compact('lieu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $lieu = Lieu::findOrfail($id);
        return view('lieu.edit',$data,compact('lieu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validatelieu = $request->validate([
            'lieu_nom'=>'required'
        ]);
        Lieu::whereId($id)->update($validatelieu);
        return redirect()->route('lieu.index')->with('success','succés');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $lieu = Lieu::findorfail($id);
        $lieu->delete();
        return redirect()->route('lieu.index')->with('success','succés');
    }
}
