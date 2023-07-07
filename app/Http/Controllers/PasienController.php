<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    //funtion edit data
    public function edit($id)
    {
        //Untuk mengambil data dari database berdasarkan id
        $pasien = DB::table('pasien')->where('id', $id)->get();
        //Akses halaman edit dan mengirim data buku sesuai id
        return view('pasien/editpasien', ['pasien' => $pasien]);
    }

    //function update (data setelah diedit)
    public function update(Request $request)
    {
        DB::table('pasien')->where('id', $request->id)->update([
            'id' => $request->id,
            'nama_pasien' => $request->nama_pasien,
            'umur_pasien' => $request->umur_pasien,
            'no_kamar' => $request->no_kamar,
        ]);
        return redirect('/pasien');
    }
}
