<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Category;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $complaints = Complaint::with('category')->get();
        return view('complaint.index',compact('complaints'));
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
    public function show(Complaint $complaint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $complaint = Complaint::find($id);
        $categories = Category::all();
        return view('complaint.edit', compact('complaint', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
   {
    $request->validate([
        'status' => 'required',
        'feedback' => 'required',
    ]);

    Complaint::find($id)->update($request->all());

    return redirect()->route('complaint.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
          Complaint::find($id)->delete();
        return redirect()->route('complaint.index');
    }
}
