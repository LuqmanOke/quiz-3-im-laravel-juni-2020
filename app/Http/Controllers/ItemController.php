<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikelModel;


class ItemController extends Controller
{
    public function create(){
        return view('item.form');
    }

    public function store(Request $request){
        //dd($request->all());
        $new_item = artikelModel::save($request->all());
        return redirect('items');
    }

    public function index(){
        $items = artikelModel::get_all();
        //dd($items);
        return view('item.index', compact('items'));
    }

    public function show($id){
        $item = artikelModel::cari_data($id);
        //dd($items);
        return view('item.show', compact('item'));
    }

    public function edit($id){
        $item = artikelModel::cari_data($id);
        //dd($items);
        return view('item.edit', compact('item'));
    }

    public function update($id, Request $request){
        //dd($request->all());
        $new_item = artikelModel::update($id, $request->all());
        return redirect('items');
    }

    public function destroy($id){
        $hapus = artikelModel::hapus($id);
        //dd($items);
        return redirect('items');
    }



}
