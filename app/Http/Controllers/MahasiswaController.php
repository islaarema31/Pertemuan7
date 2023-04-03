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
    // public function index()
    // {
    //     $mahasiswas = Mahasiswa::all();
    //     $posts = Mahasiswa::orderBy('nim', 'desc')->paginate(6);
    //     return view('mahasiswas.index', compact('mahasiswas'))
    //     ->with('i', (request()->input('page', 1) - 1) *5);
    // }

    public function index(Request $request){
        $mahasiswas = Mahasiswa::where([
            ['Nama', '!=', null],
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('Nama', 'LIKE', '%' . $search . '%')
                    ->get();
                }
            }]
        ])->paginate(5);
        $posts = Mahasiswa::orderBy('Nim', 'desc');
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswas.index')
        ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nim)
    {
        $Mahasiswa = Mahasiswa::find($nim);
        return view('mhasiswas.detail', compact('Mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nim)
    {
        $Mahasiswa = Mahasiswa::find($nim);
        return view('mahasiswas.edit', compact('Mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nim)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);

        Mahasiswa::find($nim)->update($request->all());

        return redirect()->route('mahasiswas.index')
        ->with('success', 'Mahasiswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim)
    {
        Mahasiswa::find($nim)->delete();

        return redirect()->route('mahasiswas.index')
        ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
