<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Contact;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::with('contact')->get();
        // $students = Student::with('contact')->find(2);
        $students = Student::where('gender','F')
                    ->withWhereHas('contact', function ($query) {
                        $query->where("city","Delhi");
                    })->get();
        return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::create([
            'name'=>'John Abraham',
            'age'=>18,
            'gender'=>'M',
        ]);

        $students->contact()->create([
            'email'=>'john@gamil.com',
            'phone'=>'4215478541',
            'address'=>'456 JA Road',
            'city'=>'Mumbai'
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
