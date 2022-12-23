@extends('layout.admin');

@section('content')
    
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah Mahasiswa</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('/mahasiswa/store')}}" method="POST">
        {{csrf_field()}}
      <div class="card-body">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Enter Nama">
        </div>
        <div class="form-group">
          <label for="jenkel">Gender</label>
          <select name="jenkel" id="" class="custom-select rounded-0">
            <option selected="">Pilih Gender</option>
            <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
          </select>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <div class="form-floating">
            <textarea name="alamat" id="floatingTextArea" rows="2" class="form-control"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="hp">No.HP</label>
          <input type="number" class="form-control" name="hp" id="exampleInputEmail1" placeholder="Enter No.HP">
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <select name="jurusan" id="" class="custom-select rounded-0">
            <option selected="">Pilih Jurusan</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem informasi</option>
          </select>
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
