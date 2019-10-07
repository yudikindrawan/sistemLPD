<?php

namespace App\Http\Controllers;

use App\angsuran;
use Illuminate\Http\Request;

class AngsuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $angsurans =  angsuran::all();
        return view('backend/angsuran/index', compact('angsurans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $angsurans = angsuran::all();
        return view('backend/angsuran/add', compact('angsurans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\angsuran  $angsuran
     * @return \Illuminate\Http\Response
     */
    public function show(angsuran $angsuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\angsuran  $angsuran
     * @return \Illuminate\Http\Response
     */
    public function edit(angsuran $angsuran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\angsuran  $angsuran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, angsuran $angsuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\angsuran  $angsuran
     * @return \Illuminate\Http\Response
     */
    public function destroy(angsuran $angsuran)
    {
        //
    }
}
