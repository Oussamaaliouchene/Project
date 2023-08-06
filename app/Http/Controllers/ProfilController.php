<?php

namespace App\Http\Controllers;
use App\Models\Framer;

use Illuminate\Http\Request;


class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile');
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
    public function store(Request $request)
    {
        $profil = new Framer();
        $profil->characteristics = $request->characteristics;
        $profil->tests = $request->tests;
        $profil->crops = $request->crops;
        $profil->manage = $request->manage;
        $profil->methods = $request->methods;
        $profil->challenges = $request->challenges;
        $profil->other_challenges = $request->other_challenges;
        $profil->save();
        return response('ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    }
}
