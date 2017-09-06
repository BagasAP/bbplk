@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					 <div class="panel panel-primary">
            <header class="panel-heading">
                <b>Tambah Program</b>
                  <div class="panel-title pull-right">
                    <a href="{{URL::previous()}}">Kembali</a></div>
                </header>
					   <div class="panel-body">
					<div class="form-horizontal">
					<form action="{{route('program.store')}}" method="post" >
					{{ csrf_field() }}
						            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kode Program</label>
                              <div class="col-sm-4">
                                  <input name="kd_program" type="text" class="form-control" required  />
                                  {!! $errors->first('kd_program', '<p class="help-block">Data Sudah Ada</p>') !!}
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Program</label>
                              <div class="col-sm-4">
                                  <input name="nama_program" type="text" class="form-control" required  />
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Sub Kejuruan</label>
                              <div class="col-sm-4">
                                  <select name="kd_sub_kejuruan" class="form-control">
                                  @foreach($subkejuruan as $data)
                                  <option value="{{$data->kd_sub_kejuruan}}">{{$data->nama_sub_kejuruan}}</option>
                                  @endforeach
                              </select>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Kejuruan</label>
                              <div class="col-sm-4">
                                  <select name="kd_kejuruan" class="form-control">
                                  @foreach($kejuruan as $data)
                                  <option value="{{$data->kd_kejuruan}}">{{$data->nama_kejuruan}}</option>
                                  @endforeach
                              </select>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jumlah Paket</label>
                              <div class="col-sm-4">
                                  <input name="jumlah_paket" type="number" class="form-control" required  />
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Lama Pelatihan</label>
                              <div class="col-sm-4">
                                  <input name="lama_pelatihan" type="number" class="form-control" required  />
                              </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label class="col-sm-2 col-sm-2 control-label"></label>
                               <div class="form-group">
                                  <div class="col-md-4">
                                      <button type="Submit" value="Simpan" class="btn btn-primary">Simpan</button>
                                      <button type="reset" value="Batal" class="btn btn-danger">Batal</button>
                                  </div>
                                </div>
                      </div>
                          </form>
                         
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
              
			

	@endsection