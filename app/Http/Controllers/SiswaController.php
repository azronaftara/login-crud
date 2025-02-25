<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function tampil(){
        return view('siswa.tampil');
    }

    function tambah(){
        return view('siswa.tambah');
    }

    function submit(Request $request){
        
    }

}