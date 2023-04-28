<?php

namespace App\Http\Controllers;

use App\Models\Etudiants;
use App\Http\Requests\StoreEtudiantsRequest;
use App\Http\Requests\UpdateEtudiantsRequest;

class EtudiantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreEtudiantsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiants $etudiants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiants $etudiants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEtudiantsRequest $request, Etudiants $etudiants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiants $etudiants)
    {
        //
    }
}
