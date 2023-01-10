@extends('layout.admin')

@section('content')
    
<!-- /.row -->
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Dosen</h3> &nbsp;
          <a href="{{url('/downloadpdf')}}" class="btn btn-info btn-md">Cetak</a>
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
                <th>NIDN</th>
                <th>Nama Dosen</th>
                <th>Nama Mahasiswa</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($dosen as $dosen)
                <tr>
                  <td>{{$dosen->nidn}}</td>
                  <td>{{$dosen->nama_dosen}}</td>
                  <td>
                    @foreach ($dosen->mahasiswa as $mhs)
                        {{$mhs->nama}},
                    @endforeach
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