<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DaftarController extends Controller
{
    //Tambah Admin
    public function store(Request $request)
    {
        // return $request->all();


        //Validasi setiap inputan user

        //rules 
        //1. required = harus diisi
        //2. max = nilai maksimal berapa karakter
        //3. min = nilai minimum berapa karakter
        //4. unique:users = tidak boleh sama dengan yang ada di tabel users
        // return "oke";
        $validateData = $request->validate([
            'nama' => 'required',
            'username' => 'required|min:3|unique:users',
            'password' => 'min:5'

        ]);

        // echo $validateData['password'];
        //Enkripsi password
        $validateData['password'] = bcrypt($validateData['password']);


        // return  $validateData['password'];

        // dd('Berhasil');


        //masukkan ke database
        User::create($validateData);
        // return "berhasil";
        //Pesan Berhasil
        $request->session()->flash('berhasil', 'Pendaftaran Berhasil. Silahkan Login');

        //arahkan ke route login
        return redirect('/');
    }

    //Tambah Siswa
    public function tambahSiswa(Request $request)
    {

        $validateData = $request->validate([
            'nama' => '',
            'username' => 'min:3|unique:users',
            'password' => 'min:5',
            'jabatan' => '',
            'file' => ''
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        $validateData['jabatan'] = '1';
        $validateData['file'] = '';

        User::create($validateData);
        $request->session()->flash('berhasil', 'Pendaftaran Berhasil. Silahkan Login');

        //arahkan ke route login
        return redirect('/siswa');
    }

    //Tambah Guru
    public function tambahGuru(Request $request)
    {

        $validateData = $request->validate([
            'nama' => '',
            'username' => 'min:3|unique:users',
            'password' => 'min:5',
            'jabatan' => ''

        ]);

        $validateData['password'] = bcrypt($validateData['password']);


        User::create($validateData);
        $request->session()->flash('berhasil', 'Pendaftaran Berhasil. Silahkan Login');

        //arahkan ke route login
        return redirect('/guruAdmin');
    }
}
