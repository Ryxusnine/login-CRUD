<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use PDF;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        return view('about');
    }
    public function index()
    {
        $datamhs = DataMahasiswa::all();
        return view('dashboard', compact('datamhs'));
    }
    public function generatePDF()
    {
        $users = DataMahasiswa::all();
        $data = [
            'title' => 'Daftar Mahasiswa',
            'date' => date('d/m/Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('pdf-views', $data);

        return $pdf->download('daftar_pengguna.pdf');
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
    public function edit(string $id) {}

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
