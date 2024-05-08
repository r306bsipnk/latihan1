<?php

namespace App\Http\Controllers;

use App\Models\KamarModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function all(){
        return KamarModel::paginate();
    }

    public function store(){
        $id = request('id');
        $m = KamarModel::query()->where('id', $id)->first();
        
        if($m == null){
            $id = KamarModel::query()->insertGetId([
                "nomor_kamar" => request('nomor_kamar'),
                "deskripsi_kamar" => request('deskripsi_kamar'),
                "fasilitas"=> request('fasilitas'),
                "status" => request('status'),
                "pemilik_id" => 1,
                "created_at" => Carbon::now(),    
            ]);
        }else{
            KamarModel::query()
                    ->where('id', $id)
                    ->update([
                "nomor_kamar" => request('nomor_kamar'),
                "deskripsi_kamar" => request('deskripsi_kamar'),
                "fasilitas"=> request('fasilitas'),
                "status" => request('status'),
                "pemilik_id" => 1,
                "created_at" => Carbon::now(),    
            ]);
        }
        return response()->json([
            'id' => $id, 
        ]);
    }

    public function delete(){
        $id = request('id');
        $r = KamarModel::query()->where('id', $id)->delete();
        return response()->json([
            'result' => $r
        ]);
    }

}
