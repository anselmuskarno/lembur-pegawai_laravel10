<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Storage;


class SiswaController extends Controller
{
    public function hapusSiswa($id)
    {
        $siswa = Siswa::find($id);
        if ($siswa->sampul_raport != null) { //Hapus gambar lama
            Storage::delete($siswa->sampul_raport);
        }
        $siswa->delete();

        return redirect('/siswa');
    }

    public function updateSiswa(Request $request, $id)
    {

        $validateData = $request->validate([
            'nama_siswa' => 'required',
            'nis_siswa' => 'required',
            'password_siswa' => '',
            'sampul_raport' => 'mimes:jpg,png,jpeg|image|max:2048',
            'tanggal_lahir_siswa' => 'required',
        ]);

        $siswa           = Siswa::find($id);


        if ($request->hasFile('sampul_raport')) { //Jika ada gambar yang diupload

            if ($request->sampulLama) { //Hapus gambar lama
                Storage::delete($request->sampulLama);
            }
            $path = $request->file('sampul_raport')->store('upload_sampul_raport');
        } else { //jika tidak ada gambar yang diupload
            $path = $siswa->sampul_raport;
        }


        $siswa->nama_siswa    = $validateData['nama_siswa'];
        $siswa->nis_siswa  = $validateData['nis_siswa'];
        if ($validateData['password_siswa'] == null) {
            $siswa->password_siswa  = $siswa->password_siswa;
        } else {
            $siswa->password_siswa  = bcrypt($validateData['password_siswa']);
        }
        $siswa->tanggal_lahir_siswa  = $validateData['tanggal_lahir_siswa'];
        $siswa->sampul_raport  = $path;

        $siswa->save();
        return redirect('/siswa');
    }

    public function tambahSiswa(Request $request)
    {

        $validateData = $request->validate([
            'nama_siswa' => 'required',
            'nis_siswa' => 'required',
            'password_siswa' => 'required',
            'sampul_raport' => 'mimes:jpg,png,jpeg|image|max:2048',
            'tanggal_lahir_siswa' => 'required',
        ]);

        if ($request->hasFile('sampul_raport')) { //Jika ada gambar yang diupload
            $path = $request->file('sampul_raport')->store('upload_sampul_raport');
        } else { //jika tidak ada gambar yang diupload
            $path = '';
        }
        $validateData['password_siswa'] = bcrypt($validateData['password_siswa']);
        $validateData['sampul_raport'] = $path;

        Siswa::create($validateData);

        // $guru->save();
        return redirect('/siswa');
    }
}
