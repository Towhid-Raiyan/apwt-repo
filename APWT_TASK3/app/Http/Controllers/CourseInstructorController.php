<?php

namespace App\Http\Controllers;

use App\Models\course_instructor;
use App\Http\Requests\Storecourse_instructorRequest;
use App\Http\Requests\Updatecourse_instructorRequest;

class CourseInstructorController extends Controller
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
     * @param  \App\Http\Requests\Storecourse_instructorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecourse_instructorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course_instructor  $course_instructor
     * @return \Illuminate\Http\Response
     */
    public function show(course_instructor $course_instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course_instructor  $course_instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(course_instructor $course_instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecourse_instructorRequest  $request
     * @param  \App\Models\course_instructor  $course_instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecourse_instructorRequest $request, course_instructor $course_instructor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course_instructor  $course_instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(course_instructor $course_instructor)
    {
        //
    }
}
