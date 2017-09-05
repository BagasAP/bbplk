@extends('layouts.app')
@section('content')


<div class="container">
<div class="row">
    <center><h1>Kejuruan</h1></center>
     <div class="panel panel-primary">
            <header class="panel-heading">
                <b>Data Kejuruan</b>
                </header>
                    <div class="panel-body">
                    <div class="form-horizontal">
                    <form action="" method="post" >
                    {{ csrf_field() }}
                      <div class="form-group">
                          <label class="col-sm-2 control-label">Nama :</label> 
                              <div class="col-sm-3">
                                  <select name="nama_kejuruan" class="form-control">
                              @foreach($kejuruan as $data)
                                <option value="{{$data->id}}">{{$data->nama_kejuruan}}</option>
                              @endforeach
                              </select>
                              </div>
                     </form>
                      <div class="col-md-4">
                      <label class="col-sm-2 control-label">Kode </label> 
                        {!! Form::open(['method'=>'GET','url'=>'carik','role'=>'search']) !!}
                        <div class="input-group custom-search-form">
                          <input type="text" class="form-control" name="search" placeholder="search">
                          <span class="input-group-btn">
                              <button class="btn btn-success" type="submit"><i class="fa fa-search"></i> Cari</button>
                          </span>
                        </div>
                        {!! Form::close() !!}
                      </div>
  
                      </div>
                      <br>
                      <br>

                      <td>
                      <a class="btn btn-primary" href="kejuruan/create">Create</a>
                      <td>
                      <a class="btn btn-warning" href="kejuruan/edit">Edit</a>
                      <td>      
                      <a class="btn btn-danger" href="">Delete</a>
                      </td>                  
                     

          <br>
          <table class="table">
        <thead>
            <tr>
                <th>Select </th>
                <th>Kode Kejuruan</th>
                <th>Nama Kejuruan</th>
                <th>Keterangan</th>
                <th colspan="2">Opsi</th>

            </tr>
        </thead>
        <tbody>
        @foreach($kejuruan as $data)
            <tr>                   
            <td><input type="checkbox" name="id" value="{{$data->id}}"></td>
            <td>{{$data->kd_kejuruan}}</td>
            <td>{{$data->nama_kejuruan}}</td>
            <td>{{$data->keterangan}}</td>
            <td>
                      <a class="btn btn-warning" href="kejuruan/{{$data->id}}/edit">Edit</a>
                      <td>
                      <form action="{{route('kejuruan.destroy', $data->id )}}" method="post">
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