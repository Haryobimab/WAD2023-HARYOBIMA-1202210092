<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ShowroomController extends Controller
{
    //
    public function create(){
        return view('showroom.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'nama_mobil' => 'required',
            'brand_mobil' => 'required',
            'warna_mobil' => 'required',
            'tipe_mobil' => 'required',
            'harga_mobil' => 'required',
        ]);

        Showroom::create([
            'nama_mobil' => $request -> nama_mobil,
            'brand_mobil' => $request -> brand_mobil,
            'warna_mobil' => $request -> warna_mobil,
            'tipe_mobil' => $request -> tipe_mobil,
            'harga_mobil' => $request -> nama_mobil,
        ]);

        return redirect()->route('showroom.index');
    
  
    }
    
    public function index() {
        $Showroom = Showroom::all();
        return view('showroom.showroom', compact('showroom'));
    }

}
