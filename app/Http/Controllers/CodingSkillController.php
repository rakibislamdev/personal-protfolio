<?php

namespace App\Http\Controllers;

use App\Models\CodingSkill;
use Illuminate\Http\Request;

class CodingSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.coding-skills');
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
     * @param  \App\Models\CodingSkill  $codingSkill
     * @return \Illuminate\Http\Response
     */
    public function show(CodingSkill $codingSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CodingSkill  $codingSkill
     * @return \Illuminate\Http\Response
     */
    public function edit(CodingSkill $codingSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CodingSkill  $codingSkill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CodingSkill $codingSkill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CodingSkill  $codingSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(CodingSkill $codingSkill)
    {
        //
    }
}
