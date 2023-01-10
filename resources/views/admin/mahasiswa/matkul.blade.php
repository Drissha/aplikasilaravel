@extends('layout.admin')

@section('content')
    
<!-- /.row -->
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Mata Kuliah</h3> &nbsp;
          <a href="{{url('/downloadpdf')}}" class="btn btn-info btn-md float-end">Cetak</a>
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
                <th>Nama Mahasiswa</th>
                <th>Mata Kuliah</th>
                <th>Dosen</th>
                <th>Semester</th>
                <th>Nilai</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $item)
                <tr>
                  <td>{{$item->nama}}</td>
                  <td>
                    <ul type="none">
                        @foreach ($item->matkul as $mk)
                        <li>{{$mk->nama_matkul}}</li>
                        @endforeach
                    </ul>
                  </td>
                  <td>
                    <ul type="none">
                        @foreach ($item->matkul as $mk)
                        <li>{{$mk->dosen}}</li>
                        @endforeach
                    </ul>
                  </td>
                  <td>
                    <ul type="none">
                        @foreach ($item->matkul as $mk)
                        <li>{{$mk->semester}}</li>
                        @endforeach
                    </ul>
                  </td>
                  <td>
                    <ul type="none">
                        @foreach ($item->matkul as $mk)
                        <li>{{$mk->pivot->nilai}}</li>
                        @endforeach
                    </ul>
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