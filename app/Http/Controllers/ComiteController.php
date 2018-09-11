<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comite;
use App\Models\User;
class ComiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lesComites = Comite::with('Users')->get();
       
        return view('admin.comite.index')->with("lesComites", $lesComites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.comite.create')->with("leComite", $leComite);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comite = new Comite();
        $comite->fonction = $request->get('statut');
        $comite->save();
        return redirect()->route("comite.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
    public function addUser($id,Request $request)
    {
        //
        $users = User::selectRaw('id, CONCAT(prenom," ",nom) as full_name')->pluck('full_name', 'id');
        $comite = Comite::find($id);
         return view('admin.comite.user')->with("users", $users)->with("comite", $comite);;
   
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addUserStatut($id,Request $request)
    {
        //
        $user = User::find($request->get("user"));
        $user->comite_id = $id;
        $user->save();
        return redirect()->route("comite.index");
    }

    public function deleteStatut($id,Request $request)
    {

        $statut = Comite::find($id);
        User::where('comite_id',$id)->update(['comite_id'=>NULL]);
        $statut->delete();

        return redirect()->route("comite.create");
    }
}
