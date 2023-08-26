<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PegawaiController;
use App\Models\User;
use App\Models\Berita;
use App\Models\LemburPegawai;
use App\Models\DataLembur;
use App\Models\Pegawai;
use App\Models\Agenda;
use App\Models\Guru;
use App\Models\Pengumuman;
use App\Models\Galleri;
use App\Models\Siswa;
use App\Models\Pemasukan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/pengumuman', function () {
    // return User::all();
    return view('pengumuman', [
        'pengumuman' => Pengumuman::All(),
        'totalPengumuman' => Pengumuman::count()
    ]);
});

Route::get('/', function () {
    // return User::all();
    return view('home');
});

Route::get('/adminPegawai', function () {
    // return User::all();
    return view('adminPegawai', [
        'pegawai' => Pegawai::all(),
        'total_pegawai' => Pegawai::count()
    ]);
});

Route::get('/adminLembur', function () {
    // return User::all();
    return view('adminLembur', [
        'lembur' => LemburPegawai::all(),
        'total_pegawai' => LemburPegawai::count(),
        'data_lembur' => DataLembur::all()
    ]);
});

Route::get('/adminPage', function () {
    // return User::all();
    return view('dashboarAdmin');
});

Route::get('/agenda', function () {
    // return User::all();
    return view('agenda', [
        'agenda' => Agenda::All()
    ]);
});

Route::get('/berita', function () {
    // return User::all();
    return view('berita', [
        'berita' => Berita::All()
    ]);
});

Route::get('/guruAdmin', function () {
    // return User::all();
    return view('admin/guru', [
        'guru' => Guru::All(),
        'totalGuru' => Guru::count(),
    ]);
});

Route::get('/galleriAdmin', function () {
    // return User::all();
    return view('admin/galleri');
});

Route::get('/agendaAdmin', function () {
    // return User::all();
    return view('admin/agenda', [
        'agenda' => Agenda::All(),
        'totalAgenda' => Agenda::count(),
    ]);
});

Route::get('/beritaAdmin', function () {
    // return User::all();
    return view('admin/berita', [
        'berita' => Berita::All(),
        'totalBerita' => Berita::count()
    ]);
});

Route::get('/pengumumanAdmin', function () {
    // return User::all();
    return view('admin/pengumuman', [
        'pengumuman' => Pengumuman::All(),
        'totalPengumuman' => Pengumuman::count()
    ]);
});

Route::get('/siswa', function () {
    // return User::all();
    return view('admin/siswa', [
        'siswa' => Siswa::All(),
        'totalSiswa' => Siswa::count()
    ]);
});

Route::get('/galleri', function () {
    // return User::all();
    return view('galleri');
});
Route::get('/raport', function () {
    // return User::all();
    return view('raport');
});

Route::get('/guru', function () {
    // return User::all();
    return view('guru', [
        'guru' => Guru::All(),
        'totalGuru' => Guru::count()
    ]);
});

Route::get('/dashboard', function () {
    // return User::all();
    return view('welcome', [
        "nama" => "anselmus",
        "judul" => "dashboard"
    ]);
})->middleware('auth');


Route::get('/pengeluaran', function () {
    return view('pengeluaran', [
        "nama" => "anselmus",
        "judul" => "pengeluaran"
    ]);
})->middleware('auth');

Route::resource('/tambahPemasukan', PemasukanController::class);
Route::get('/pemasukan', function () {
    return view('pemasukan', [
        "nama" => "anselmus",
        "judul" => "pemasukan",
        'pemasukan' => Pemasukan::all()
    ]);
})->middleware('auth');

Route::get('/user', function () {
    return view('user', [
        "nama" => "anselmus",
        "judul" => "user",
        'user' => User::all()
    ]);
})->middleware('auth');

Route::get('/halamanAdmin', function () {
    return view('admin/index', [
        "nama" => "anselmus",
        "judul" => "user",
        'admin' => User::count(),
        'siswa' => Siswa::count(),
        'galleri' => Galleri::count(),
        'pengumuman' => Pengumuman::count(),
        'guru' => Guru::count(),
        'berita' => Berita::count(),
        'agenda' => Agenda::count(),
    ]);
})->middleware('auth');

//Method get dan mengarah pada /login maka arahkan ke controller Login dengan memanggil class index
// Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/hapusPemasukan/{id}', [PemasukanController::class, 'destroy']);
Route::post('/editPemasukan/{id}', [PemasukanController::class, 'update']);
Route::post('/authentication', [LoginController::class, 'login']);
Route::get('/authentication', function () {
    // return User::all();
    return view('home');
});
Route::post('/editGuru/{id}', [GuruController::class, 'updateGuru']);
Route::post('/tambahGuru', [GuruController::class, 'tambahGuru']);
Route::post('/tambahPegawai', [PegawaiController::class, 'tambahPegawai']);
Route::post('/tambahLembur', [PegawaiController::class, 'tambahLembur']);
Route::get('/hapusGuru/{id}', [GuruController::class, 'hapusGuru']);
// Route::post('/loginAdmi', [LoginController::class, 'authenticate']);

//Method post dan mengarah pada /daftar maka arahkan ke controller daftar dengan memanggil class store
Route::post('/daftarAdmin', [DaftarController::class, 'store']);
Route::post('/tambahSiswa', [SiswaController::class, 'tambahSiswa']);
Route::post('/editSiswa/{id}', [SiswaController::class, 'updateSiswa']);
Route::get('/hapusSiswa/{id}', [SiswaController::class, 'hapusSiswa']);

Route::post('/tambahPengumuman', [PengumumanController::class, 'tambahPengumuman']);
Route::post('/editPengumuman/{id}', [PengumumanController::class, 'updatePengumuman']);
Route::get('/hapusPengumuman/{id}', [PengumumanController::class, 'hapusPengumuman']);

Route::post('/tambahBerita', [BeritaController::class, 'tambahBerita']);
Route::post('/editBerita/{id}', [BeritaController::class, 'updateBerita']);
Route::get('/hapusBerita/{id}', [BeritaController::class, 'hapusBerita']);

Route::post('/tambahAgenda', [AgendaController::class, 'tambahAgenda']);
Route::post('/editPegawai/{id}', [PegawaiController::class, 'updatePegawai']);
Route::post('/editLembur/{id}', [PegawaiController::class, 'updateLembur']);
Route::post('/editUpahLembur', [PegawaiController::class, 'updateUpahLembur']);
Route::get('/hapusPegawai/{id}', [PegawaiController::class, 'hapusPegawai']);
Route::get('/hapusLembur/{id}', [PegawaiController::class, 'hapusLembur']);

//Method get dan mengarah pada /daftar maka arahkan ke view daftar
Route::get('/daftar', function () {
    return view('daftar', [
        'judul' => 'Registrasi'
    ]);
})->middleware('guest');

Route::get('/cetakGuru', function () {
    return view('cetakGuru', [
        'guru' => User::All()
    ]);
});
Route::get('/cetakSiswa', function () {
    return view('cetakSiswa', [
        'siswa' => User::All()
    ]);
});

Route::get('/cetakExcel', function () {
    return view('exportExcelGuru', [
        'siswa' => User::All()
    ]);
});
Route::get('/user', function () {
    return view('user', [
        'lembur' => LemburPegawai::All()
    ]);
});
