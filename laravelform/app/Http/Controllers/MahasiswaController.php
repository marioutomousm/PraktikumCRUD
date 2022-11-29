<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use App\Http\Requests\MahasiswaRequest;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        //$data = mahasiswa::all();

        $data = mahasiswa::where('nim','LIKE','%'.$keyword.'%')
            ->orWhere('nama','LIKE','%'.$keyword.'%')
            ->orWhere('umur','LIKE','%'.$keyword.'%')
            ->orWhere('alamat','LIKE','%'.$keyword.'%')
            ->orWhere('kota','LIKE','%'.$keyword.'%')
            ->orWhere('jurusan','LIKE','%'.$keyword.'%')
            ->orWhere('kelas','LIKE','%'.$keyword.'%')
            ->paginate(5);

        $data->withPath('/dashboard');
        $data->appends($request->all());
            
        return view('index',compact('data','keyword'))
        -> with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request 
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaRequest $request)
    {
        // $validationData=$request->validate([
        //     'nim' => 'required|unique:mahasiswas,nim',
        // ]);
        $data = $request -> except(['_token']);

        mahasiswa::insert($data);

        return redirect('/dashboard')->with('success','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = mahasiswa::findOrFail($id);

        return view('show')-> with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(MahasiswaRequest $request, $id)
    {
       
        $item = mahasiswa::findOrFail($id);
        $data = $request -> except(['_token']);
        
        // $validationData=$request->validate([
        //     'nim' => 'unique:mahasiswas,nim,'.$id,
        // ]);

       
        $item -> update($data);

        return redirect('/dashboard')->with('success','Data Berhasil Diperbaharui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datahapus = mahasiswa::findOrFail($id);
        $datahapus->delete();
        return redirect('/dashboard')->with('danger','Data Berhasil Dihapus');
    }
}
