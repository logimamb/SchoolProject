<?php

namespace App\Http\Controllers;

use App\Models\Departement_Formateurs;
use App\Http\Requests\StoreDepartement_FormateursRequest;
use App\Http\Requests\UpdateDepartement_FormateursRequest;

class DepartementFormateursController extends Controller
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
    public function store(StoreDepartement_FormateursRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement_Formateurs $departement_Formateurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement_Formateurs $departement_Formateurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartement_FormateursRequest $request, Departement_Formateurs $departement_Formateurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement_Formateurs $departement_Formateurs)
    {
        //
    }
}
