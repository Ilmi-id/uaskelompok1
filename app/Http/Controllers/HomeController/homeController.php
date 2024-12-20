<?php

namespace App\Http\Controllers\HomeController;

use App\Http\Controllers\Controller;
use App\Models\Organizer;
use App\Models\Scholarship;
use App\Models\Student;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizers = Organizer::all();
        $students = Student::all();
        return view('Beranda.index', [
            'organizers' => $organizers,
            'students'=>$students
        ]);

        
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
