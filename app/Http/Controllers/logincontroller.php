<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Facades\hash;
use App\Models\Course;
use App\Models\Chauffeur;
use App\Models\Voiture;
use App\Models\Responsable;
use App\Models\Service;
use App\Models\Fonction;
use App\Models\Lieu;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    //authentificate login
    public function login(){

        return view('login.login') ;

      }
      //register auth
      public function register(){

          return view('login.register') ;

        }
        public function save(Request $request){
          //validate request
          $request->validate([
              'name'=>'required',
              'email'=>'required|email|unique:admins',
              'password'=>'required|min:5|max:12',
          ],[
              'name.required'=>'Entrer votre nom',
              'email.required'=>'Entrer une adresse E-mail',
              'email.email'=>'une email doit contenir "@gmail.com"',
              'email.unique'=>'cette e-mail exist déjà',
              'password.required'=>'veuiller entrer votre mot de passe',
              'password.min'=>'il doit contenir au minimum 5 lettres',
              'password.max'=>'il doit contenir au maximum 12 lettres'
          ]);
          //insert data into database
          $admin = new Admin;
          $admin->name=$request->name;
          $admin->email=$request->email;
          $admin->password = Hash::make($request->password);
          $save = $admin->save();

          if($save){
              return redirect()->route('login.login')->with('success','Inscription avec succée');
          }else{
              return back()->with('fail','Quelque chose ne va pas, réessayez plus tard');
          }
        }
        //dashboard page

        public function dashboard(){
          $course=Course::count();
          $voiture=Voiture::count();
          $chauffeur=Chauffeur::count();
          $responsable=Responsable::count();
          $service=Service::count();
          $fonction=Fonction::count();
          $lieu=Lieu::count();
          $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
          return view('dashboard',$data,compact('course','voiture','chauffeur','responsable','service','fonction','lieu'));
      }

      function check(Request $request){
            //validate request
          $request->validate([
              'email'=>'required|email',
              'password'=>'required|min:5|max:12',
          ],[
              'email.required'=>'Entrer une adresse E-mail',
              'email.email'=>'une email doit contenir "@gmail.con"',
              'password.required'=>'veuiller entrer votre mot de passe'
          ]);
          $userInfo = Admin::where('email','=',$request->email)->first();
          if(!$userInfo){
              return back()->with('fail','Nous ne reconnaissons pas votre adresse e-mail');
          }else{
            //check password
              if(Hash::check($request->password,$userInfo->password)){
                  $request->session()->put('LoggedUser',$userInfo->id);
                  return redirect('dashboard')->with('connecter ','vous êtes connecter');
              }else{
                  return back()->with('fail','Mot de passe incorrect');
              }
          }
      }
      //deconnexion
      function logout(){
          if(session()->has('LoggedUser')){
              session()->pull('LoggedUser');
              return view('login.login');
          }
      }
      //view profil
      public function profil(){
          $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
          return view('login.profil',$data);
      }
}
