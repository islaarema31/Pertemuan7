@extends('mahasiswas.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Mahasiswa
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('mahasiswas.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" name="nim" class="formcontrol" id="nim" aria-describedby="nim">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="nama" name="nama" class="formcontrol" id="nama" aria-describedby="nama">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="tgl_lahir" name="tgl_lahir" class="formcontrol" id="tgl_lahir" aria-describedby="tgl_lahir">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="kelas" name="kelas" class="formcontrol" id="kelas" aria-describedby="password">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="jurusan" name="jurusan" class="formcontrol" id="jurusan" aria-describedby="jurusan">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="formcontrol" id="email" aria-describedby="email">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No_Handphone</label>
                            <input type="no_hp" name="no_hp" class="formcontrol" id="no_hp" aria-describedby="no_hp">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
