@extends('layout.admin');

@section('content')
    
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Mahasiswa</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
        {{csrf_field()}}
      <div class="card-body">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Enter Nama" value={{$mahasiswa->nama}}>
        </div>
        <div class="form-group">
          <label for="jenkel">Gender</label>
          <select name="jenkel" id="" class="custom-select rounded-0">
            <option selected="">Pilih Gender</option>
            <option value="pria" @if($mahasiswa->jenkel=='pria') selected @endif>Pria</option>
            <option value="wanita" @if($mahasiswa->jenkel=='wanita') selected @endif>Wanita</option>
          </select>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <div class="form-floating">
            <textarea name="alamat" id="floatingTextArea" rows="2" class="form-control">{{$mahasiswa->alamat}}</textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="hp">No.HP</label>
          <input type="number" class="form-control" name="hp" id="exampleInputEmail1" placeholder="Enter No.HP" value={{$mahasiswa->hp}}>
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <select name="jurusan" id="" class="custom-select rounded-0">
            <option selected="">Pilih Jurusan</option>
            <option value="Teknik Informatika"@if($mahasiswa->jurusan=='Teknik Informatika') selected @endif>Teknik Informatika</option>
            <option value="Sistem Informasi"@if($mahasiswa->jurusan=='Sistem Informasi') selected @endif>Sistem informasi</option>
          </select>
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email" value={{$mahasiswa->email}}>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-warning">Update</button>
      </div>
    </form>
  </div>
@endsection
