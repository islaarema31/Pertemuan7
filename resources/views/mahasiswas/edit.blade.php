@extends('mahasiswas.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Mahasiswa
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
                    <form method="post" action="{{ route('mahasiswas.update', $Mahasiswa->nim) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" name="nim" class="formcontrol" id="nim" value="{{ $Mahasiswa->nim }}" ariadescribedby="nim">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="formcontrol" id="nama" value="{{ $Mahasiswa->nama }}" ariadescribedby="nama">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="text" name="tgl_lahir" class="formcontrol" id="tgl_lahir" value="{{ $Mahasiswa->tgl_lahir }}" ariadescribedby="tgl_lahir">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="formcontrol" id="kelas" value="{{ $Mahasiswa->kelas }}" ariadescribedby="kelas">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" class="formcontrol" id="jurusan" value="{{ $Mahasiswa->jurusan }}" ariadescribedby="jurusan">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="formcontrol" id="email" value="{{ $Mahasiswa->email }}" ariadescribedby="email">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No_Handphone</label>
                            <input type="no_hp" name="no_hp" class="formcontrol" id="no_hp" value="{{ $Mahasiswa->no_hp }}" ariadescribedby="no_hp">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
