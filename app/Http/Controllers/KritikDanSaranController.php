<?php

namespace App\Http\Controllers;

use App\Models\KritikDanSaran;
use Illuminate\Http\Request;

class KritikDanSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $komentar = KritikDanSaran::all();
        return view('kritik-dan-saran',['komentar' => $komentar]);
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
            'komentar' => ['required'],
        ]);

        KritikDanSaran::create([
            'id_komentar'=>'',
            'username'=>auth()->user()->username,
            'komentar'=>$request->komentar,
        ]);
        return redirect()->route('kritikdansaran.index')->with('alert.berhasil',true);
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
