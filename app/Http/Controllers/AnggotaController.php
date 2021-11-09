<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = anggota::all();
        return response()->json([
            "status" => "success",
            "message" => "The resource has been successfully accessed",
            'data' => $user,
        ],200);
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
        $user = anggota::create([
            "email" => $request->input('email'),
            "password" => $request->input('password'),
            "nama"=>$request->input('nama'),
            "gender"=>$request->input('gender'),
            "tempat_lahir"=>$request->input('tempat_lahir'),
            "tanggal_lahir"=>$request->input('tanggal_lahir'),
            "alamat"=>$request->input('alamat'),
            "pekerjaan"=>$request->input('pekerjaan'),
            "no_ktp"=>$request->input('no_ktp'),
            "no_hp"=>$request->input('no_hp'),
        ]);

        return response()->json([
            "status"=>"success",
            "message"=>"berhasil menambahkan user",
            "data"=>$user,
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(anggota $anggota)
    {
        return response()->json([
            "status"=>"success",
            "message"=>"berhasil mengambil data user".$user->id,
            "data"=>$user,
        ],200);
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anggota $anggota)
    {
        $user->update([
            "email" => $request->input('email'),
            "password" => $request->input('password'),
            "nama"=>$request->input('nama'),
            "gender"=>$request->input('gender'),
            "tempat_lahir"=>$request->input('tempat_lahir'),
            "tanggal_lahir"=>$request->input('tanggal_lahir'),
            "alamat"=>$request->input('alamat'),
            "pekerjaan"=>$request->input('pekerjaan'),
            "no_ktp"=>$request->input('no_ktp'),
            "no_hp"=>$request->input('no_hp'),
        ]);

        return response()->json([
            "status"=>"success",
            "message"=>"berhasil memperbarui data user",
            "data"=>$user,
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(anggota $anggota)
    {
        $user = $user->delete();

        return response()->json([
            "status"=>"success",
            "message"=>"berhasil menghapus data user",
        ],200);

    }
}
