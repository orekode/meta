<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDonateRequest;
use App\Http\Requests\UpdateDonateRequest;
use App\Models\Donate;
use App\Models\GroupCard;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmes = GroupCard::where('name', 'programmes')->orderBy('id', 'desc')->get();

        return view('donate', [
            "programmes" => $programmes
        ]);
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
     * @param  \App\Http\Requests\StoreDonateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDonateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function show(Donate $donate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function edit(Donate $donate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonateRequest  $request
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonateRequest $request, Donate $donate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donate $donate)
    {
        //
    }
}
