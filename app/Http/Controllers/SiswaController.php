<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Siswa::query();

        if ($request->has('search')) {
            $search = $request->search;
            $query->where('nama', 'like', "%{$search}%")
                ->orWhere('kelas', 'like', "%{$search}%");
        }

        $siswas = $query->paginate(10);

        return view('siswa.index', compact('siswas'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'alamat' => 'required|string'
        ], [
            'nama.required' => 'Nama harus diisi',
            'kelas.required' => 'Kelas harus diisi',
            'alamat.required' => 'Alamat harus diisi'
        ]);

        Siswa::create($request->only(['nama', 'kelas', 'alamat']));

        return redirect()->route('siswa.index')
            ->with('success', 'Data siswa berhasil ditambahkan!');
    }
}
