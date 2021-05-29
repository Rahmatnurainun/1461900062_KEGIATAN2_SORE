<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('absen')
            ->join('siswa', 'absen.nis', '=', 'siswa.nis')
            ->join('semester', 'absen.id_semester', '=', 'semester.id_semester')
            ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
            ->select('tanggal', 'absen', 'absen.nis', 'nama', 'status', 'kelas')
            ->orderBy('tanggal', 'asc')
            ->get();
        return view('absen', ['data' => $data]);
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $data = DB::table('absen')
            ->where('nama', 'like', "%" . $search . "%")
            ->join('siswa', 'absen.nis', '=', 'siswa.nis')
            ->join('semester', 'absen.id_semester', '=', 'semester.id_semester')
            ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
            ->select('tanggal', 'absen', 'absen.nis', 'nama', 'status', 'kelas')
            ->orderBy('tanggal', 'asc')
            ->get();

        return view('absen', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
