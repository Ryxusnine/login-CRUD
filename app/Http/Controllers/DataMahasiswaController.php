<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use Illuminate\Http\Request;

class DataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('add-mahasiswa');
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
        $request->validate([
            'nama' => ['required'],
            'nim' => ['required', 'numeric', 'digits:11', 'unique:data_mahasiswas,nim,'],
            'prodi' => ['required'],
            'email' => ['required'],
            'alamat' => ['required'],
        ]);

        DataMahasiswa::create([
            'id_mahasiswa' => '',
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('dashboard.index')->with('alert.berhasil', true);
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
        $datamhs = DataMahasiswa::findOrFail($id);
        return view('edit-mahasiswa', compact('datamhs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datamhs = DataMahasiswa::findOrFail($id);

        $request->validate([
            'nama' => ['required'],
            'nim' => ['required', 'numeric', 'digits:11', 'unique:data_mahasiswas,nim,' . $id],
            'prodi' => ['required'],
            'email' => ['required'],
            'alamat' => ['required'],
        ]);

        $datamhs->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('dashboard.index')->with('alert.edit', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datamhs = DataMahasiswa::findOrFail($id);
        $datamhs->delete();
        return redirect()->route('dashboard.index')->with('alert.destroy', true);
    }
}
