@extends('layout.admin')

@section('content')
    
<!-- /.row -->
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Mahasiswa</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>No.HP</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $item)
                <tr>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->jenkel}}</td>
                  <td>{{$item->alamat}}</td>
                  <td>{{$item->hp}}</td>
                  <td>{{$item->jurusan}}</td>
                  <td>{{$item->email}}</td>
                  <td>
                    <a href="/mahasiswa/{{$item->id}}/delete" class="btn btn-danger" 
                    onclick="return confirm('Anda yakin? {{$item->nama}}')">Delete</a>
                    <a href="/mahasiswa/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
      
  @endsection