<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mahasiswa = Mahasiswa::latest()->paginate(5);
        return view('mahasiswa.index', compact('mahasiswa'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create data mahaiswa
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create data
        // $mahasiswa = new Mahasiswa;
        // $mahasiswa->nama = $request->nama;
        // $mahasiswa->nim = $request->nim;
        // $mahasiswa->email = $request->email;
        // $mahasiswa->alamat = $request->alamat;
        // $mahasiswa->save();
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);
        Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //show by id mahasiswa
        $mahasiswa = Mahasiswa::find($mahasiswa->id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //edit data mahasiswa in form
        $mahasiswa = Mahasiswa::find($mahasiswa->id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //update data
        // $mahasiswa = Mahasiswa::find($mahasiswa->id);
        // $mahasiswa->nama = $request->nama;
        // $mahasiswa->nim = $request->nim;
        // $mahasiswa->email = $request->email;
        // $mahasiswa->alamat = $request->alamat;
        // $mahasiswa->save();
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'alamat' => 'required'
        ]);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //Delete by id mahasiswa
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data deleted successfully');
    }
}
