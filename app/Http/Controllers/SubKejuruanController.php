<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TbMSubKejuruan;
use App\TbMKejuruan;
class SubKejuruanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $subkejuruan= TbMSubKejuruan::all();
         $kejuruan = TbMKejuruan::all();
        return view('subkejuruan.index', compact('subkejuruan','kejuruan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $subkejuruan= TbMSubKejuruan::all();
        $kejuruan = TbMKejuruan::all();
        return view('subkejuruan.create', compact('subkejuruan','kejuruan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $subkejuruan = new TbMSubKejuruan();
        $subkejuruan->kd_sub_kejuruan = $request->kd_sub_kejuruan;
        $subkejuruan->kd_kejuruan = $request->kd_kejuruan;
        $subkejuruan->nama_sub_kejuruan = $request->nama_sub_kejuruan;
        $subkejuruan->keterangan = $request->keterangan;
        $subkejuruan->save();
        return redirect()->route('subkejuruan.index');
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
        $subkejuruan = TbMSubKejuruan::findOrFail($id);
        return view('subkejuruan.edit')->with(compact('subkejuruan'));
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
        $subkejuruan = TbMSubKejuruan::findOrFail($id);
         $subkejuruan->kd_sub_kejuruan = $request->kd_sub_kejuruan;
        $subkejuruan->kd_kejuruan = $request->kd_kejuruan;
        $subkejuruan->nama_sub_kejuruan = $request->nama_sub_kejuruan;
        $subkejuruan->keterangan = $request->keterangan;
        $subkejuruan->save();
        return redirect()->route('subkejuruan.index');
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
        TbMSubKejuruan::destroy($id);
        return redirect()->route('subkejuruan.index');
    }
}