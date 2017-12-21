<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWinnerRequest;
use App\Winner;
use Illuminate\Http\Request;

class WinnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get winners descending order
        $winners = Winner::latest()->get();

        return view('winners.index', compact('winners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateWinnerRequest $request)
    {
        $winner = Winner::create($request->only(['name', 'prize']));

        return back()->with('message', "Ganador: <b>$winner->name</b> registrado correctamente.");
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
    public function destroy(Winner $winner)
    {
        $winner->delete();

        return back()->with('message', "Ganador eliminado correctamente.");
    }

    /**
     * page to project winners
     *
     * @return \Illuminate\Http\Response
     */
    public function projection()
    {
        //
    }
}
