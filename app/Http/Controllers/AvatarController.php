<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars = Avatar::where('id', ">", 1)->get();
        return view ('admin.avatar.indexAvatar', compact('avatars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.avatar.createAvatar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "avatar"=>"required",
            "nom"=>"required"
        ]);

        
        $avatar = new Avatar();
        $request->file('avatar')->storePublicly('img/','public') ;
        $avatar->nom = $request->nom;
        $avatar->url = $request->file('avatar')->hashName();
        $avatar->save();
        return redirect()->route('avatar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(Avatar $avatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit(Avatar $avatar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avatar $avatar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avatar $avatar)
    {
        $perso = User::where('avatar_id', $avatar->id)->get();
        foreach ($perso as $user) {
            // dd($user->avatar_id);
            $user->avatar_id = 1;
            $user->save();
        }
        // $avatar->delete();
        // Storage::disk('public')->delete('img/' . $avatar->url);
        return redirect()->route('avatar.index');
    }
}
