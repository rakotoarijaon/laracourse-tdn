<?php

namespace App\Http\Controllers;
use App\Models\Chauffeur;
use App\Models\Admin;
use Illuminate\Http\Request;

class chauffeurcontroller extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $chauffeur = Chauffeur::all();
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('chauffeurs.index',$data,compact('chauffeur'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('chauffeurs.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'chaffeur_nom'=>'required|max:50',
            'chauffeur_adresse'=>'required|max:100',
        ],[
            'chaffeur_nom.required'=>'entrer un nom ',
            'chaffeur_nom.max'=>'ce champs doit contenir au max 50 ',
            'chauffeur_adresse.required'=>'entrer une adresse',
            'chauffeur_adresse.max'=>'ce champ doit contenir au max 50',
        ]);
        Chauffeur::create($request->post());

        return redirect()->route('chauffeur.index')->with('success',' Ajout avec succée');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
       $chauffeur = Chauffeur::find($id);
       return view('chauffeurs.show', ['chauffeur' => $chauffeur],$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $chauffeur = Chauffeur::findOrfail($id);
        return view('chauffeurs.edit',$data,compact('chauffeur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
          //
          $validatechauffeur=$request->validate([
            'chaffeur_nom'=>'required|max:50',
            'chauffeur_adresse'=>'required|max:100',

        ],[
            'chaffeur_nom.required'=>'entrer un nom ',
            'chaffeur_nom.max'=>'ce champs doit contenir au max 50 ',
            'chauffeur_adresse.required'=>'entrer une adresse',
            'chauffeur_adresse.max'=>'ce champ doit contenir au max 50',
        ]);

        Chauffeur::whereId($id)->update($validatechauffeur);
        return redirect()->route('chauffeur.index')->with('success',' Modification avec succée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $voiture = Chauffeur::find($id);

        if ($voiture) {
            $voiture->delete();
            return redirect()->route('chauffeur.index')->with('success',' suppression avec succée');
        }
    }
}
