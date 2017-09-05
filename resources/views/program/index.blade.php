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
                          <label class="col-sm-2 control-label">Kode</label>
                              <div class="col-sm-2">
                                  <input type="text" class="form-control" required="" name="kd_kejuruan">
                              </div>

                          <label class="col-sm-2 control-label">Nama</label>
                              <div class="col-sm-4">
                                  <select name="nama_kejuruan" class="form-control">
                              @foreach($kejuruan as $data)
                                <option value="{{$data->id}}">{{$data->nama_kejuruan}}</option>
                              @endforeach
                              </select>
                              </div>
         

                      <td>
                      <a class="btn btn-primary" href="">Cari</a>
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
                      </form>

          <br>
          <table class="table">
        <thead>
            <tr>
                <th>Select </th>
                <th>Kode program</th>
                <th>Nama Program</th>
                <th>Nama Sub Kejuruan</th>
                <th>Nama Kejuruan</th>
                <th>Jumlah Paket</th>
                <th>Lama Latihan</th>
                <th colspan="2">Opsi</th>
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