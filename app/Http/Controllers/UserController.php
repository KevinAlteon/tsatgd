<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use File;
use Intervention\Image\ImageManager;
use Illuminate\Filesystem\Filesystem;
use App\Http\Requests;


class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $lesUsers = User::all();

        return view('admin.user.index')
                        ->with('tab_users', $lesUsers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->session()->flash('success', 'L\'utilisateur à été Ajouté !');


        if ($request->get('est_admin') == null) {
            $est_admin = false;
        } else {
            $est_admin = true;
        }

        if ($request->get('est_joueur') == null) {
            $est_joueur = false;
        } else {
            $est_joueur = true;
        }

        if ($request->get('est_arbitre') == null) {
            $est_arbitre = false;
        } else {
            $est_arbitre = true;
        }




        User::create([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'email' => $request->get('email'),
            'telephone' => $request->get('telephone'),
            'password' => bcrypt($request->get('password')),
            'commentaire' => $request->get('commentaire'),
            'est_admin' => $est_admin,
            'est_joueur' => $est_joueur,
            'est_arbitre' => $est_arbitre,


        ]);

        return redirect()->route("user.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function storeFront(Request $request){
      User::create([
        'nom' => $request->get('nom'),
        'prenom' => $request->get('prenom'),
        'email' => $request->input('email'),
        'telephone' => $request->input('telephone'),
        'password' => bcrypt($request->input('password')),
        'commentaire' => $request->get('commentaire'),
      ]);
      return redirect()->route("info-pratique");
      //Ajouter une alerte pour afficher l'envoi de la création de membre
    }

    public function show($id) {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $leUser = user::find($id);
        return view('admin.user.edit')
                        ->with("leUser", $leUser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $leUser = User::find($id);

        if ($request->get('est_admin') == null) {
            $est_admin = false;
        } else {
            $est_admin = true;
        }

        if ($request->get('est_joueur') == null) {
            $est_joueur = false;
        } else {
            $est_joueur = true;
        }
        if ($request->get('est_arbitre') == null) {
            $est_arbitre = false;
        } else {
            $est_arbitre = true;
        }
        if ($request->get('valider') == null) {
            $valider = false;
        } else {
            $valider = true;
        }



        $leUser->nom = $request->get('nom');
        $leUser->prenom = $request->get('prenom');
        $leUser->email = $request->get('email');
        $leUser->telephone = $request->get('telephone');
        $leUser->commentaire = $request->get('commentaire');

        if ($request->get('password') !="") {
              $leUser->password = bcrypt($request->get('password'));
        }

        $leUser->est_admin = $est_admin;
        $leUser->est_joueur = $est_joueur;
        $leUser->est_arbitre = $est_arbitre;
        $leUser->valider = $valider;



        $leUser->save();

        return redirect()->route("user.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
        $request->session()->flash('success', 'L\'utilisateur à été Supprimé !');

        $user = User::find($id);

        $user->delete();

        return redirect()->route("user.index");
    }



}
