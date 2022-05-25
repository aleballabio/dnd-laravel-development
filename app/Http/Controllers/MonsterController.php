<?php

namespace App\Http\Controllers;

use App\Monster;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    protected $validationRules = [
        "index"             => "required",
        "name"              => "required",
        "type"              => "required",
        "alignment"         => "required",
        "size"              => "required",
        "hit_dice"          => "required",
        "languages"         => "required",
        "armor_class"       => "required",
        "hit_points"        => "required",
        "strength"          => "required",
        "dexterity"         => "required",
        "constitution"      => "required",
        "intelligence"      => "required",
        "wisdom"            => "required",
        "charisma"          => "required",
        "xp"                => "required",
        "challenge_rating"  => "required"
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monsters = Monster::paginate(15);

        return view('monsters.index', compact('monsters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monsters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validationRules);
        $formData = $request->all();
        Monster::create($formData);
        return redirect()->route('monsters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Monster  $monster
     * @return \Illuminate\Http\Response
     */
    public function show(Monster $monster)
    {
        return view('Monsters.show', compact('monster'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Monster  $monster
     * @return \Illuminate\Http\Response
     */
    public function edit(Monster $monster)
    {
        //

        return view('monsters.edit', compact('monster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Monster  $monster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monster $monster)
    {
        //

        $formData = $request->all();
        $monster->update($formData);
        return redirect()->route('monsters.index', $monster->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Monster  $monster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monster $monster)
    {
        $monster->delete();

        return redirect()->route('monsters.index');
    }
}