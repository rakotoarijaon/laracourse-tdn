<?php

namespace App\Http\Controllers;
use App\Models\DetailCourse;
use App\Models\Responsable;
use App\Models\Admin;
use App\Models\Course;
use Illuminate\Http\Request;

class detailcoursecontroller extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $detail = DetailCourse::all();
       return view('detailcourse.detail',$data,compact('detail'));
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
    public function store(Request $request )
    {
        //
        $request->validate([
            'course_id'=>'required',
            'responsable_id'=>'required',
            'date'=>'nullable',
            'lieu'=>'required',
            'motif'=>'required',
            'dateheurearriver'=>'nullable'
        ],[
            'chauffeur_id.required'=>'remplir le champs',
            'responsable_id.required'=>'remplir le champs',
            'lieu.required'=>'remplir le champs',
            'motif.required'=>'remplir le champs',
            'dateheure.required'=>'inserer la date '
        ]);
             DetailCourse::create($request->post());
             return back()->with('success','succée');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $course = Course::find($id);
        $responsable = Responsable::all();
        $detail = DetailCourse::get()->where('course_id',$id);
        return view('detailcourse.index',$data,compact('course','responsable','detail'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $detail=DetailCourse::findOrFail($id);
        $detail->delete();
        return back()->with('success',' suppression avec succé');
    }
}
