<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Pembimbing;
use App\Models\Penerimaan;
use App\Models\Perusahaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $perusahaans = Perusahaan::where('user_id', Auth::user()->id)->first();
        $pembimbings = Pembimbing::whereHas('penerimaan', function ($query) {
            $query->where('status', false);
        })->get();
        return view('pages.perusahaan.index', compact('users', 'perusahaans', 'pembimbings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.perusahaan.create');
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
            'nama' => 'required|string|max:255',
            'jurusan' => 'required',
            'alamat' => 'required|string',
            'image' => 'image|file',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-post');
        }

        Perusahaan::create([
            'nama' => $validatedData['nama'],
            'jurusan' => implode(', ', $request->jurusan),
            'alamat' => $validatedData['alamat'],
            'image' => $validatedData['image'],
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->to('/dashboard')->with('success', 'Data anda berhasil disimpan.');
    }

    public function terimaSiswa(Request $request)
    {
        $perusahaan = Perusahaan::where('user_id', Auth::user()->id)->first();
        $pembimbing = Pembimbing::find($request->pembimbing_id);

        if ($perusahaan) {
            Penerimaan::create([
                'perusahaan_id' => $perusahaan->id,
                'pembimbing_id' => $pembimbing->id,
                'status' => true,
                'keterangan' => $request->keterangan,

            ]);
        }

        return redirect()->route('perusahaan.index')->with('success', 'Data siswa berhasil diterima.');
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
