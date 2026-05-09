<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
    //$data = [
        //'kategori_kode' => 'SNK',
        //'kategori_nama' => 'Snack/Makanan Ringan',
        //'created_at' => now(),];
    //DB::table('m_kategori')->insert($data);
    //return "insert data baru berhasil";

    //$row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
    //return 'delete data berhasil, jumlah data yang dihapus: ' .$row .' baris';

    $data = DB::table('m_Kategori')->get();
    return view('Kategori', ['data' =>$data]);
    }
}
