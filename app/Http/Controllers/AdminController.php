<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::all();
        return view('pages.admin.VerifSiswa', compact('siswas'));
    }

    public function index_VerifGuru()
    {
        $gurus = Guru::all();
        return view('pages.admin.VerifGuru', compact('gurus'));
    }

    public function index_VerifPerusahaan()
    {
        $perusahaans = Perusahaan::all();
        return view('pages.admin.VerifPerusahaan', compact('perusahaans'));
    }

    public function index_siswa()
    {
        $siswas = Siswa::all();
        return view('pages.admin.siswa', compact('siswas'));
    }

    public function index_guru()
    {
        $gurus = Guru::all();
        return view('pages.admin.guru', compact('gurus'));
    }

    public function index_perusahaan()
    {
        $perusahaans = Perusahaan::all();
        return view('pages.admin.perusahaan', compact('perusahaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
