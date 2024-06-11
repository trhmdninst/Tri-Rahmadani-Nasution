<?php

namespace App\Http\Controllers;

use App\Models\prodiModel;
use Illuminate\Http\Request;

class prodiController extends Controller
{
    public function index()
    {
        $prodi = prodiModel::orderBy('nama_prodi', 'asc')->get();
        return view('prodi', compact ('prodi'));
    }

    public function create()
    {
        return view('createprodi');
    }

    public function store(Request $request)
    {
        $data = [
            'nama_prodi' => $request->nama_prodi,
            'fakultas' => $request->fakultas,
            'kaprodi' => $request->kaprodi,
            'sekprodi' => $request->sekprodi
        ];
        $simpan = prodiModel::create($data);
        if ($simpan) {
            echo "Berhasil";
            return redirect()->to('prodi');
        }

    }
}
