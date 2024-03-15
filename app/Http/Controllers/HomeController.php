<?php

namespace App\Http\Controllers;
use App\models\VerifikasiModel;
use App\models\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        // dd(Session::get('role'));
        if (Session::get('role')['is_admin'])
        {
            $verifikasi = DB::table('verdig.verifikasi')->count();
            $user = DB::table('verdig.lbl_user')->count();
            $diterima = DB::table('verdig.verifikasi')->where('status', '=', 'DITERIMA')->count();
            $ditolak = DB::table('verdig.verifikasi')->where('status', '=', 'DITOLAK')->count();
            // $menunggu = DB::table('verdig.verifikasi')->where('status', '=', 'MENUNGGU')->count();
            // $verifikasiCount = VerifikasiModel::count();
            // dd($user);
             return view('v_home', compact('verifikasi', 'user', 'diterima', 'ditolak'));
        }
         elseif (Session::get('role')['is_dosen']){
            $nama2 = session('profile')['nama_dan_gelar'];
            $verifikasi = DB::table('verdig.verifikasi')->where('penandatangan', '=', $nama2)->count();
            $diterima = DB::table('verdig.verifikasi')->where('status', '=', 'DITERIMA')->where('penandatangan', '=', $nama2)->count();
            $ditolak = DB::table('verdig.verifikasi')->where('status', '=', 'DITOLAK')->where('penandatangan', '=', $nama2)->count();
            $menunggu = DB::table('verdig.verifikasi')->where('status', '=', 'MENUNGGU')->where('penandatangan', '=', $nama2)->count();
            // dd($menunggu);
            // $verifikasiCount = VerifikasiModel::count();
            // dd($user);
            return view('v_home', compact('verifikasi', 'diterima', 'ditolak', 'menunggu'));
        }elseif (Session::get('role')['is_mhs']){
            $nama = Session('profile')['nim'];
            $verifikasi = DB::table('verdig.verifikasi')->where('nim', '=', $nama)->count();
            $user = DB::table('verdig.lbl_user')->where('username', '=', $nama)->count();
            $menunggu = DB::table('verdig.verifikasi')->where('status', '=', 'MENUNGGU')->where('nim', '=', $nama)->count();
            $diterima = DB::table('verdig.verifikasi')->where('status', '=', 'DITERIMA')->where('nim', '=', $nama)->count();
            $ditolak = DB::table('verdig.verifikasi')->where('status', '=', 'DITOLAK')->where('nim', '=', $nama)->count();
            // $verifikasiCount = VerifikasiModel::count();
            // dd($user);
            return view('v_home', compact('verifikasi', 'user', 'diterima', 'ditolak', 'menunggu'));


    }
}
}
