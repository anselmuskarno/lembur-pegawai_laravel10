<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\LemburPegawai;
use App\Models\DataLembur;
use Illuminate\Support\Facades\Storage;


class PegawaiController extends Controller
{



    public function hapusPegawai($id)
    {
        // return 'ok';
        $pegawai = Pegawai::find($id);
        $pegawai->delete();

        return redirect('/adminPegawai');
    }

    public function hapusLembur($id)
    {
        // return 'ok';
        $lembur = LemburPegawai::find($id);
        $lembur->delete();

        return redirect('/adminLembur');
    }

    public function updatePegawai(Request $request, $id)
    {

        $validateData = $request->validate([
            'nama_pegawai' => '',
            'nomor_hp' => '',
            'password' => '',
            'jabatan' => '',
        ]);

        $pegawai           = Pegawai::find($id);
        $pegawai->nama_pegawai    = $validateData['nama_pegawai'];
        $pegawai->nomor_hp  = $validateData['nomor_hp'];
        $pegawai->password  = $validateData['password'];
        $pegawai->jabatan  = $validateData['jabatan'];
        $pegawai->save();
        return redirect('/adminPegawai');
    }

    public function updateUpahLembur(Request $request)
    {
        // return 'ok';
        $validateData = $request->validate([
            'upah_perjam' => ''

        ]);

        $dataLembur           = DataLembur::find($request->id);
        $dataLembur->upah_perjam    = $validateData['upah_perjam'];
        $dataLembur->save();
        return redirect('/adminLembur');
    }
    public function updateLembur(Request $request, $id)
    {
        // return 'ok';
        $validateData = $request->validate([
            'nama_pegawai' => '',
            'nomor_hp' => '',
            'jabatan' => '',
            'tanggal_lembur' => '',
            'jam_mulai' => '',
            'jam_selesai' => '',
            'upah_perjam' => '',
            'total_upah' => '',
            'hal_yang_dikerjakan' => '',
            'status' => ''
        ]);

        $lembur           = LemburPegawai::find($id);
        $lembur->nama_pegawai    = $validateData['nama_pegawai'];
        $lembur->nomor_hp  = $validateData['nomor_hp'];
        $lembur->jabatan  = $validateData['jabatan'];
        $lembur->tanggal_lembur  = $validateData['tanggal_lembur'];
        $lembur->jam_mulai  = $validateData['jam_mulai'];
        $lembur->jam_selesai  = $validateData['jam_selesai'];
        $lembur->upah_perjam  = $validateData['upah_perjam'];
        $lembur->total_upah  = $validateData['total_upah'];
        $lembur->hal_yang_dikerjakan  = $validateData['hal_yang_dikerjakan'];
        $lembur->status  = $validateData['status'];
        $lembur->save();
        return redirect('/adminLembur');
    }

    public function tambahPegawai(Request $request)
    {

        $validateData = $request->validate([
            'nama_pegawai' => '',
            'nomor_hp' => '',
            'password' => '',
            'jabatan' => '',
        ]);

        Pegawai::create($validateData);

        // // $guru->save();
        return redirect('/adminPegawai');
    }

    public function tambahLembur(Request $request)
    {
        // return $request->status;
        $validateData = $request->validate([
            'nama_pegawai' => 'required',
            'nomor_hp' => 'required',
            'jabatan' => 'required',
            'tanggal_lembur' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'upah_perjam' => 'required',
            'total_upah' => 'required',
            'hal_yang_dikerjakan' => 'required',
            'status' => 'required'
        ]);
        // return 'ok';
        LemburPegawai::create($validateData);

        // // $guru->save();
        return redirect('/');
    }
}
