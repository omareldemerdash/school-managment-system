<?php

namespace App\Http\Controllers\Students\dashboard;

use Illuminate\Http\Request;
use App\Models\online_classe;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudentonlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ids = DB::table('students')->where('id', auth()->user()->id)->pluck('section_id');
        $online_classes = online_classe::whereIn('section_id', $ids)->get();
        return view('pages.Students.dashboard.studentonline', compact('online_classes'));
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
