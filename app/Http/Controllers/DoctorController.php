<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  


    public function index()
    {
      
        $doctors = User::all();
        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('doctors.create');
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


    public function destroy(User $doctor)
    {
        $deletedDoctor=$doctor->name;
        $doctor->delete();
        
        return redirect('/doctors');
    }
}
