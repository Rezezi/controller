<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        // Data dummy untuk contoh
        $kelas = [
            [
                'nama_kelas' => 'fase e pplg',
                'siswa' => ['sami', 'dwi', 'raden'],
                'mata_pelajaran' => ['c', 'c# '],
                'pamong' => 'bu sumi'
            ],
            [
                'nama_kelas' => 'fase f ',
                'siswa' => ['samiz', 'ramadhan', 'nur'],
                'mata_pelajaran' => ['grafis', 'basis data'],
                'pamong' => 'pak udin'
            ],
            [
                'nama_kelas' => 'fase f lanjutan',
                'siswa' => ['byru', 'raden', 'dhain'],
                'mata_pelajaran' => ['pbo', 'game'],
                'pamong' => 'bu nisa'
            ]
        ];

        return view('kelas', compact('kelas')); // Mengembalikan data ke view 'kelas'
    }
}
