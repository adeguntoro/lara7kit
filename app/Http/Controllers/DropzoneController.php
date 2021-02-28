<?php

namespace App\Http\Controllers;

use App\Dropzone;
use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.dropzone');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dropzone  $dropzone
     * @return \Illuminate\Http\Response
     */
    public function show(Dropzone $dropzone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dropzone  $dropzone
     * @return \Illuminate\Http\Response
     */
    public function edit(Dropzone $dropzone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dropzone  $dropzone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dropzone $dropzone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dropzone  $dropzone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dropzone $dropzone)
    {
        //
    }

    public function storeMedia(Request $request)
    {
        //
    }
}
