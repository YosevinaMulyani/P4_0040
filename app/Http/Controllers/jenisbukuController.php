<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jenisbukuController extends Controller
{
    $buku = DB::table('buku')
     ->join('rak_buku', 'buku_id','-','rak_buku.id_buku')
     ->join('jenis_buku','rak_buku.id_jenis_buku','-','jenis_buku.id')
     ->select('rak_buku.id','buku.judul','jenis_buku.jenis','buku.tahun_terbit')
     ->get();
     return view('buku0040',['buku'=>$buku]);
     
}
public function carijoin(request $request){
    $cari join = $request=>lihat;
    $buku = DB::table('buku')
    ->join('rak_buku','buku.id','-','rak_buku.id_buku')
    ->join('jenis_buku','rak_buku.id_jenis_buku','-','jenis_buku.id')
    ->select('rak_buku.id','buku.judul','jenis_buku.jenis','buku.tahun_terbit')
    ->where('judul','like',"%",$carijoin,"%")
    ->paginate();
    retrun view('buku0040',['buku'=>$buku]);

}
