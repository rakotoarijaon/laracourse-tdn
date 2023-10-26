<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Admin;
class servicecontroller extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $service = Service::all();
        return view('services.index',$data,compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('services.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request ->validate([
            'service_nom'=>'required|max:50',
        ],[
            'service_nom.required'=>'Entrer le nom de la Service',
            'service_nom.max'=>'Ce champs doit contenir au maximum 50 lettres'
        ]);
        Service::create($request->post());
        return redirect()->route('service.index')->with('success',' Ajout avec succée');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
       $service = Service::find($id);
       return view('services.show',$data, ['service' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $service=Service::findOrfail($id);
        return view('services.edit',$data,compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $servicevalidate=$request->validate([
            'service_nom'=>'required|max:50',
        ]);
       Service::whereId($id)->update($servicevalidate);

        return redirect()->route('service.index')->with('success',' Modification avec succée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $service=Service::findOrFail($id);
        $service->delete();
        return redirect()->route('service.index')->with('success',' suppression avec succés');
    }
}
