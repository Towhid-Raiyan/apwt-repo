<?php

namespace App\Http\Controllers;

use App\Models\course_table;
use App\Http\Requests\Storecourse_tableRequest;
use App\Http\Requests\Updatecourse_tableRequest;

class CourseTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storecourse_tableRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecourse_tableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course_table  $course_table
     * @return \Illuminate\Http\Response
     */
    public function show(course_table $course_table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course_table  $course_table
     * @return \Illuminate\Http\Response
     */
    public function edit(course_table $course_table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecourse_tableRequest  $request
     * @param  \App\Models\course_table  $course_table
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecourse_tableRequest $request, course_table $course_table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course_table  $course_table
     * @return \Illuminate\Http\Response
     */
    public function destroy(course_table $course_table)
    {
        //
    }
}
