<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
<<<<<<< HEAD
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

=======
>>>>>>> b0ad48fb166cceac24b5e2975f61ee26ca08325b
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
<<<<<<< HEAD
        return redirect()->route('home')->with('success', 'Data berhasil ditambahkan');
=======
        return redirect()->route('lowonganpekerjaan')->with('success', 'Data berhasil ditambahkan');
>>>>>>> b0ad48fb166cceac24b5e2975f61ee26ca08325b
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
<<<<<<< HEAD
        return redirect()->route('home')->with('success', 'Data berhasil diubah');
=======
        return redirect()->route('lowonganpekerjaan')->with('success', 'Data berhasil diubah');
>>>>>>> b0ad48fb166cceac24b5e2975f61ee26ca08325b
    }

    public function deletedata($id)
    {
        $data = Pelamar::find($id);
        $data->delete();
<<<<<<< HEAD
        return redirect()->route('home')->with('success', 'Data berhasil dihapus');
=======
        return redirect()->route('lowonganpekerjaan')->with('success', 'Data berhasil dihapus');
>>>>>>> b0ad48fb166cceac24b5e2975f61ee26ca08325b
    }
}
