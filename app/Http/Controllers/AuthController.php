<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function tampilRegistrasi(){
        return view('registrasi');
    }

    function submitRegistrasi(Request $request){
        $user = new User();
        $user->name = $request->name;        
        $user->email = $request->email;        
        $user->password = bcrypt($request->password);  
        $user->save();
        // dd($user);
        return redirect('login');      
    }

    function tampilLogin() {
        return view('login');
    }

    // function submitLogin(Request $request){
    //     $data = $request->only('email', 'password');

    //     if(Auth::attempt($data)){
    //         $request->session()->regenerate();
    //         return redirect()->route('siswa.tampil');
    //     } else {
    //         return redirect()->back()->with('gagal', 'Email salah, coba ingat kembali');
    //     }
    // }

    // test
    function submitLogin(Request $request)
{
    $credentials = $request->only('email', 'password');

    // Cek apakah email ada di database
    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return redirect()->back()->with('gagal', 'Email tidak terdaftar')->withInput();
    }

    // Jika email ada, cek apakah password benar
    if (!Auth::attempt($credentials)) {
        return redirect()->back()->with('gagal', 'Lupa password? coba ingat kembali')->withInput();
    }

    // Jika login berhasil
    $request->session()->regenerate();
    return redirect()->route('siswa.tampil');
}
    // endtest

    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
