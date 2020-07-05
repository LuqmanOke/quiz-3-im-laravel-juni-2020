<?php

namespace app\models;
use Illuminate\Support\Facades\DB;

class artikelModel{
    public static function get_all(){
        $artikels = DB::table('artikels')->get();
        return $artikels;
    }

    public static function save($data){
        unset($data["_token"]);
        $new_artikel = DB::table('artikels')->insert($data);
        return $new_artikel;
    }

    public static function cari_data($id){
        $artikel = DB::table('artikels')->where('id', $id)->first();
        return $artikel;
    }

    public static function update($id, $request){
        //dd($request->all());
        $artikel = DB::table('artikels')
                    ->where('id', $id)
                    ->update([
                        'judul' => $request["judul"],
                        'isi' => $request["isi"],
                        'tag' => $request["tag"]
                    ]);
        return $artikel;
    }

    public static function hapus($id){
        $delete = DB::table('artikels')
        ->where('id', $id)->delete();
        return $delete;
    }

}