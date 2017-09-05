<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TbMKejuruan;
class KejuruanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kejuruan= TbMKejuruan::all();
        return view('kejuruan.index', compact('kejuruan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kejuruan= TbMKejuruan::all();
        return view('kejuruan.create', compact('kejuruan'));
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
        $kejuruan = new TbMKejuruan();
        $kejuruan->kd_kejuruan = $request->kd_kejuruan;
        $kejuruan->nama_kejuruan = $request->nama_kejuruan;
        $kejuruan->keterangan = $request->keterangan;
        $kejuruan->save();
        return redirect()->route('kejuruan.index');
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

        $kejuruan = TbMKejuruan::findOrFail($id);
        return view('kejuruan.edit')->with(compact('kejuruan'));
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
         $kejuruan = TbMKejuruan::findOrFail($id);
        $kejuruan->kd_kejuruan = $request->kd_kejuruan;
        $kejuruan->nama_kejuruan = $request->nama_kejuruan;
        $kejuruan->keterangan = $request->keterangan;
        $kejuruan->save();
        return redirect()->route('kejuruan.index');
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


        TbMKejuruan::destroy($id);
        return redirect()->route('kejuruan.index');
    }
}
