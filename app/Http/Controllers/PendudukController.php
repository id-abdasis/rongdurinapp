<?php

namespace App\Http\Controllers;

use Alert;
use App\Exports\PendudukExport;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PendudukController extends Controller
{
    public function dataPenduduk()
    {
        $penduduk = Penduduk::all();
        $target = 800;
        $jumTanah = 1468;
        $statistik = [
            'persentase' => (Penduduk::all()->count() / $target) * 100,
            'jumlahTerdaftar' => Penduduk::all()->count(),
            'belumTerdaftar' => $jumTanah - $penduduk->count(),
            'blok1' => Penduduk::where('blok', 'blok1')->get()->count(),
            'blok2' => Penduduk::where('blok', 'blok2')->get()->count(),
            'blok3' => Penduduk::where('blok', 'blok3')->get()->count(),
            'blok4' => Penduduk::where('blok', 'blok4')->get()->count(),
        ];
        return view('layouts.penduduk.daftar-penduduk')->with(['penduduks' => $penduduk, 'statistik' => $statistik]);
    }

    public function tambahPenduduk()
    {
        return view('layouts.penduduk.tambah-penduduk');
    }

    public function simpanPenduduk(Request $request)
    {
        $penduduk = Penduduk::create([
            'no_urut' => $request->no_urut,
            'blok' => 'Blok' . $request->blok,
            'nama_penduduk' => $request->nama_penduduk,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'umur' => (date('Y') - substr($request->tanggal_lahir, 6)),
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'dt_nama' => $request->dt_nama,
            'nama_sppt' => $request->nama_sppt,
            'luas' => $request->luas,
            'no_sppt' => $request->no_sppt,
            'sppt' => $request->sppt,
            'sta_tanah' => $request->sta_tanah,
            'peng_tanah' => $request->peng_tanah,
            'letak_tanah' => $request->letak_tanah,
            'perolehan' => $request->perolehan,
        ]);

        if ($penduduk) {
            Alert::success('Berhasil', $request->nama_penduduk . ' ' . 'Berhasil di Tambahkan');
            return redirect()->route('penduduk.tambah-penduduk');
        }
    }

    public function export()
    {
        return Excel::download(new PendudukExport, 'Peserta PTSL 2020 Rongdurin.xlsx');
    }

}