<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Chauffeur;
use App\Models\Voiture;
use App\Models\Admin;
use App\Models\DetailCourse;
use Illuminate\Http\Request;

class coursecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $course = Course::all();
        $detail = DetailCourse::all();
        return view('course.index',$data,compact('course','detail'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $course = Course::all();
        $chauffeur = Chauffeur::all();
        $voiture = Voiture::all();
        $courses= compact('course','chauffeur','voiture');
        return view('course.create',$data)->with($courses);
    }
    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(request $request)
    {
        //
        $request->validate([
            'chauffeur_id'=>'required',
            'voiture_id'=>'required',
            'course_dateheuredepart'=>'required',
        ],[
            'chauffeur_id.required'=>'remplir le champs',
            'voiture_id.required'=>'remplir le champs',
            'course_dateheuredepart.required'=>'inserer le date de depart',
        ]);

             Course::create($request->post());
             return redirect()->route('course.index')->with('success','Ajout avec succée');

    }
    /**
     * Display the specified resource.
     */
    public function detailcourse(){

        return view('course.detail');
    }
    public function show($id)
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $detail = DetailCourse::find($id);
        return view('course.show',$data,compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        $chauffeur = Chauffeur::all();
        $voiture = Voiture::all();

        $course = Course::findOrfail($id);
        $courses = compact('chauffeur','voiture','course');

        return view('course.edit',$data)->with($courses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'chauffeur_id'=>'required',
            'voiture_id'=>'required',
            'course_dateheuredepart'=>'required',
        ],[
            'chauffeur_id.required'=>'remplir le champs',
            'voiture_id.required'=>'remplir le champs',
            'course_dateheuredepart.required'=>'inserer la date de depart'
        ]);

        Course::whereId($id)->update($validated);
        return redirect()->route('course.index')->with('success','succés');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $course = Course::findOrfail($id);
        $course->delete();
        return back()->with('success','succés');
    }
}
