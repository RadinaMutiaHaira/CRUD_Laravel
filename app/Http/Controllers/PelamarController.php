<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $data = Pelamar::all();
        return view('datapelamar', compact('data'));
    }

    public function tambahpelamar()
    {
        return view('tambahpelamar');
    }

    public function inputdata(Request $request)
    {
        $request->validate([
            'nama_pelamar' => 'required',
            'jenis_kelamin' => 'required',
            'no_telepon' => 'required',
        ]);

        Pelamar::create($request->all());
        return redirect()->route('home')->with('success', 'Data berhasil ditambahkan');
    }

    public function tampildata($id)
    {
        $data = Pelamar::find($id);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Pelamar::find($id);
        $data->update($request->all());
        return redirect()->route('home')->with('success', 'Data berhasil diubah');
    }

    public function deletedata($id)
    {
        $data = Pelamar::find($id);
        $data->delete();
        return redirect()->route('home')->with('success', 'Data berhasil dihapus');
    }
}
