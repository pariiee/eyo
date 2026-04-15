<?php

namespace App\Http\Controllers;
use App\Models\Complaint;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $complaints = Complaint::with('category')->latest()->paginate(10);
    return view('home',compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view ('form', compact ('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'category_id' => 'required',
        'nama' => 'required',
        'nis' => 'required',
        'isi_pengaduan' => 'required',
    ]);

    Complaint::create([
        'category_id' => $request->category_id,
        'student_name' => $request->nama,
        'nis' => $request->nis,
        'complaint' => $request->isi_pengaduan,
        'status' => 'new',
    ]);

    return redirect()->route('home');
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
