<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersProgress;
use App\Models\User;

class Ortu extends Controller
{
    // index
    public function index()
    {
        // select user from user that role is siswa
        $Siswa = User::where('role', 'siswa')->get();
        return view('carianak', compact('Siswa'));
    }
    // show data based on id
    public function show($nama_user)
    {
        // get the level from user progress where nama is nama user, distinc
        $levels = UsersProgress::where('nama_user', $nama_user)->distinct('level')->pluck('level');
        // Retrieve UsersProgress records for the given nama_user and level 1
        $materi1 = UsersProgress::where('nama_user', $nama_user)->where('level', 1)->get(['nama_materi', 'progress', 'waktu_belajar']);
        // Pass the $userProgress object to the view
        return view('raport');
    }

}
