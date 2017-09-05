@extends('layouts.app')
@section('content')


<div class="container">
<div class="row">
    <center><h1>Program</h1></center>
     <div class="panel panel-primary">
            <header class="panel-heading">
                <b>Data Program</b>
                </header>
                    <div class="panel-body">
                    <div class="form-horizontal">
                    <form action="" method="post" >
                    {{ csrf_field() }}
                      <div class="form-group">
                          <label class="col-sm-2 control-label">Nama :</label>
                              <div class="col-sm-3">
                                  <select name="nama_kejuruan" class="form-control">
                              @foreach($program as $data)
                                <option value="{{$data->id}}">{{$data->nama_program}}</option>
                              @endforeach
                              </select>
                              </div>
                               </form>
                    <div class="col-md-4">
                      <label class="col-sm-2 control-label">Kode </label> 
                        {!! Form::open(['method'=>'GET','url'=>'carip','role'=>'search']) !!}
                        <div class="input-group custom-search-form">
                          <input type="text" class="form-control" name="search" placeholder="search">
                          <span class="input-group-btn">
                            <span class="input-group-btn">
                              <button class="btn btn-success" type="submit"><i class="fa fa-search"></i> Cari</button>
                            </span>
                          </span>
                        </div>
                        {!! Form::close() !!}
                      </div>
                      </div>
                      <br>
                      <br>

                      <td>
                      <a class="btn btn-primary" href="program/create">Create</a>
                      <td>
                      <a class="btn btn-warning" href="">Edit</a>
                      <td>
                      <a class="btn btn-danger" href="">Delete</a>
                      </td>
                     

          <br>
          <table class="table">
        <thead>
            <tr>
                <th bgcolor="info">Select </th>
                <th bgcolor="info">Kode program</th>
                <th bgcolor="info">Nama Program</th>
                <th bgcolor="info">Nama Sub Kejuruan</th>
                <th bgcolor="info">Nama Kejuruan</th>
                <th bgcolor="info">Jumlah Paket</th>
                <th bgcolor="info">Lama Latihan</th>
                <th colspan="2" bgcolor="info">Opsi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($program as $data)
            <tr>
                <td><input type="checkbox" name="id" value="{{$data->id}}"><br/></td>
            <td>{{$data->kd_program}}</td>
            <td>{{$data->nama_program}}</td>
            <td>{{$data->kd_sub_kejuruan}}</td>
            <td>{{$data->kd_kejuruan}}</td>
            <td>{{$data->jumlah_paket}}</td>
            <td>{{$data->lama_pelatihan}}</td>
            <td>
                      <a class="btn btn-warning" href="program/{{$data->id}}/edit">Edit</a>
                      <td>
                      <form action="{{route('program.destroy', $data->id )}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" >
                        <input class="btn btn-danger" type="submit" value="Delete" >
                        {{csrf_field()}}
                    </form>
                      </td>
            </tr>
        </tbody>
       @endforeach
    </table>    
          </div>
          </div>
          </div>
@endsection