<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use App\Models\Student;
use App\Http\Requests\StoreMobileRequest;
use App\Http\Requests\UpdateMobileRequest;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobiles = Mobile::all();
        return view('mmobile.index',compact('mobiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        return view('mmobile.create',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMobileRequest $request)
    {
        $mobile = new Mobile();
        $mobile->mobile_number = $request->mobile_number;
        $mobile->student_id = $request->student_id;
        $mobile->save();
        return redirect()->route('mmobile.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobile $mobile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobile $mobile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMobileRequest $request, Mobile $mobile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobile $mobile)
    {
        //
    }
}
