<?php

namespace App\Http\Controllers;

use App\Models\Melding;
use Illuminate\Http\Request;

class MeldingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('melding');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Melding $melding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Melding $melding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Melding $melding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Melding $melding)
    {
        //
    }
}
