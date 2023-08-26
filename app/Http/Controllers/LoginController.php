<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\Pegawai;
use App\Models\DataLembur;

class LoginController extends Controller
{
    /**
     * index of login
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view("login");
    }

    /**
     * login
     * @param LoginRequest $request
     * @return \Illuminate\Http\JsonResponse|\never
     */
    public function login(Request $request)
    {
        $nomor_hp = $request->nomor_hp;
        $password = $request->password;

        $pegawai2 = Pegawai::where('nomor_hp', $nomor_hp)->count();
        if ($pegawai2 >= 1) {
            $pegawai = Pegawai::where('nomor_hp', $nomor_hp)->first();
            if ($pegawai->password == $password) {
                if ($pegawai->jabatan == "admin") {
                    return redirect('/adminPage');
                }
                $datalembur = DataLembur::first();

                return view('user', [
                    'nama_pegawai' => $pegawai->nama_pegawai,
                    'nomor_hp' => $pegawai->nomor_hp,
                    'jabatan' => $pegawai->jabatan,
                    'upah_perjam' => $datalembur->upah_perjam
                ]);
            } else if ($pegawai->password != $password) {
                return redirect('/');
            }
        }
        return redirect('/');
    }

    /**
     * logout
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        auth()->logout();
        return redirect()->route("login");
    }
}
