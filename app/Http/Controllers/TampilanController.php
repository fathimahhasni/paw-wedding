<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dekor;
use App\Ketring;
use App\Fotografi;
use App\Venue;
use App\Rias;

class TampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Dekor::orderBy('id','DESC')->paginate(4);
        $ketrings = Ketring::orderBy('id','DESC')->paginate(4);
        $fotos = Fotografi::orderBy('id','DESC')->paginate(4);
        $venues = Venue::orderBy('id','DESC')->paginate(4);
        $riasbs = Rias::orderBy('id','DESC')->paginate(4);
        return view('home.home',compact('datas','ketrings','fotos','venues','riasbs'));
        // $datas = Dekorasi::orderBy('id','ASC')->paginate(6);
        // return view('home.home',compact('datas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.add');
    }

    public function dekorasi()
    {
        //
        return view('crud.dekorasi');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storedekor(Request $request)
    {
        //
        $this->validate($request,
        ['harga' => 'required']);

        $tambah = new Dekor();
        $tambah->harga = $request['harga'];
        

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("images/", $fileName);

        $tambah->gambar = $fileName;
        $tambah->save();

        return redirect()->to('/');
    }
    

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
