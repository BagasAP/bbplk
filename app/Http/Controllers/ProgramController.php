<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TbMProgram;
use App\TbMKejuruan;
use App\TbMSubKejuruan;
use Session;
class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $program= TbMProgram::all();
        $kejuruan= TbMKejuruan::all();
        $subkejuruan = TbMSubKejuruan::all();
        return view('program.index', compact('program','kejuruan','subkejuruan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $program= TbMProgram::all();
        $kejuruan= TbMKejuruan::all();
        $subkejuruan= TbMSubKejuruan::all();
        return view('program.create', compact('program','kejuruan','subkejuruan'));
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
        $this->validate($request,[
            'kd_program'=>"required|unique:tb_m_programs,kd_program"]);
        $program = new TbMProgram();
        $program->kd_program = $request->kd_program;
        $program->nama_program = $request->nama_program;
        $program->kd_sub_kejuruan = $request->kd_sub_kejuruan;
        $program->kd_kejuruan = $request->kd_kejuruan;
        $program->jumlah_paket = $request->jumlah_paket;
        $program->lama_pelatihan = $request->lama_pelatihan;
        $program->save();
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menyimpan Data Sub Kejuruan"
            ]);
        return redirect()->route('program.index');
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
         $program = TbMProgram::findOrFail($id);
        return view('program.edit')->with(compact('program'));
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
        $program = TbMProgram::findOrFail($id);
       $program->kd_program = $request->kd_program;
        $program->nama_program = $request->nama_program;
        $program->kd_sub_kejuruan = $request->kd_sub_kejuruan;
        $program->kd_kejuruan = $request->kd_kejuruan;
        $program->jumlah_paket = $request->jumlah_paket;
        $program->lama_pelatihan = $request->lama_pelatihan;
        $program->save();
        Session::flash("flash_notification",[
            "level"=>"warning",
            "message"=>"Berhasil Merubah Data Program"
            ]);
        return redirect()->route('program.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $ids = $request->ids;
        TbMProgram::destroy($ids);
        Session::flash("flash_notification",[
            "level"=>"danger",
            "message"=>"Berhasil Menghapus Data Program"
            ]);
        return redirect()->route('program.index');
    }

        public function search(Request $request)
    {
        $carip = $request->get('search');
        $program = TbMProgram::where('nama_program','LIKE','%'.$carip.'%')->paginate(10);
        return view('program.index', compact('program'));
    }
}
