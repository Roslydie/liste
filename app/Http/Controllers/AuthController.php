<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class AuthController extends Controller
{
    
    public function inscriptionForm(){
        return view("pages.log");
    }

    public function liste(){
        $utilisateur = Utilisateur::all();

        return view('pages.liste',compact('utilisateurs'));
    }
    public function traitement_log(Request $request){
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'email|required|unique:utilisateurs',
            'tel' => 'required|min:12',
            'prof' => 'required',
            'adresse' => 'required',
            'password' => 'required|min:8',
        ]);
        $utilisateur = new Utilisateur();
        $utilisateur->nom = $request->input('nom');
        $utilisateur->prenom = $request->input('prenom');
        $utilisateur->email = $request->input('email');
        $utilisateur->tel = $request->input('tel');
        $utilisateur->prof = $request->input('prof');
        $utilisateur->adresse = $request->input('adresse');
        $utilisateur->password = bcrypt($request->input('password'));
        

        $utilisateur->save();
        // return back()->with('status', "your account has been created successful");
        return view('pages.liste');
        }
    }

