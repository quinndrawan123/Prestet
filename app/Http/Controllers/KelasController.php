<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $kelas = DB::table('kelas')->join('murid', 'kelas.id', '=', 'murid.kelas')->get();
       return view('kelas', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('kelas')->insert([
            'nama_kelas' => $request->nama_kelas,
        ]);


        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table('kelas')
            ->where('id', $id)
            ->join('murid', 'kelas.id', '=', 'murid.kelas')
            ->first();
        return view('edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd("ssasja");
        DB::table('kelas')->where('id', $id)->update([
            'nama_kelas' => $request->nama_kelas,
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kelas')->where('id', $id)->delete();
        return redirect('/')->with('success', 'Kelas berhasil dihapus.');
    }
}
