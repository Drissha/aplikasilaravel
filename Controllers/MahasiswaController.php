<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('admin.mahasiswa.index',['mahasiswa'=>$mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
            'jurusan' => 'required',
            'email' => 'required'
        ]);
        Mahasiswa::create([
            'nama'  =>$request->nama,
            'jenkel'  =>$request->jenkel,
            'alamat'  =>$request->alamat,
            'hp'  =>$request->hp,
            'jurusan'  =>$request->jurusan,
            'email'  =>$request->email
        ]);
        return redirect('/mahasiswa');
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
        $mahasiswa = Mahasiswa::find($id);
        return view('admin.mahasiswa.edit',['mahasiswa' => $mahasiswa]);
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
        $this->validate($request,[
            'nama' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
            'jurusan' => 'required',
            'email' => 'required'
        ]);
        $mahasiswa = Mahasiswa::find($id);
        // $mahasiswa->nama = $request->nama;
        // $mahasiswa->jenkel = $request->jenkel;
        // $mahasiswa->alamat = $request->alamat;
        // $mahasiswa->hp = $request->hp;
        // $mahasiswa->jurusan = $request->jurusan;
        // $mahasiswa->email = $request->email;

        // $mahasiswa->save();
        $mahasiswa->update($request->all());

        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect()->back();
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $mahasiswa = Mahasiswa::where('nama','LIKE','%' .$request->search.'%')->get();
        } else {
            $mahasiswa = Mahasiswa::all();
        }
        return view('admin.mahasiswa.index',['mahasiswa'=> $mahasiswa]);
    }
}
