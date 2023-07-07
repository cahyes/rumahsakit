<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RumahsakitController extends Controller
{
    public function index()
    {
        $pasien = DB::table('pasien')->paginate(5);
        $kamar = DB::table('kamar')->paginate(5);
        $jeniskamar = DB::table('jeniskamar')->paginate(5);

        return view('pasien/daftarpasien', ['pasien' => $pasien])
            ->with('kamar', $kamar)->with('jeniskamar', $jeniskamar);
    }

    public function create()
    {
        return view('pasien/tambahpasien');
    }

    public function tambahpasien(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nama_pasien' => 'required',
            'umur_pasien' => 'required',
            'no_kamar' => 'required',

        ], [
            'no.required' => 'No pasien tidak boleh kosong.',
            'nama.required' => 'Nama pasien tidak boleh kosong.',
            'umur.required' => 'Umur pasien tidak boleh kosong.',
            'kamar.required' => 'no kamar pasien tidak boleh kosong.',
        ]);

        DB::table('pasien')->insert([
            'id' => $request->id,
            'nama_pasien' => $request->nama_pasien,
            'umur_pasien' => $request->umur_pasien,
            'no_kamar' => $request->no_kamar,
        ]);

        return redirect('/pasien');
    }

    // public function delete(Request $request, $nopasien)
    // {

    //     DB::table('pasien')->where('nopasien', $nopasien)->delete();
    //     return redirect('/pasien');
    // }
}
