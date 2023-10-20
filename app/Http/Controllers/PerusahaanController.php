<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaans = Perusahaan::all();
        return view('pages.perusahaan.index', compact('perusahaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusans = Jurusan::all();
        return view('pages.perusahaan.create', compact('jurusans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'jurusan_id' => 'required',
            'alamat' => 'required',
            'image' => 'image|file|',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-post');
        }
        // Perusahaan::create([
        //     'nama' => $validatedData['nama'],
        //     'jurusan_id' => $validatedData['jurusan'],
        //     'alamat' => $validatedData['alamat'],
        //     'gambar' => $validatedData['gambar'],
        // ]);
        Perusahaan::create($validatedData);
        dd($validatedData);
        return redirect()->to('/dashboard/siswa')->with('success', 'Data anda berhasil disimpan.');
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
