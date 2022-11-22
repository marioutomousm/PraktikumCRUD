@extends('layout.default');

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-3">
                    <form action="{{url('/update/'.$data->id)}}" method="POST">
                        @csrf
                        <h1>Edit Data Mahasiswa</h1>
                        <div class="form-group">
                            <label for="nama">NIM</label>
                            <input type="text" name="nim" class="form-control" value="{{$data -> nim}}">
                            @foreach ($errors->get('nim') as $msg)
                                <p class="text-danger">{{$msg}}</p>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" value="{{$data -> nama}}">
                            @foreach ($errors->get('nama') as $msg)
                                <p class="text-danger">{{$msg}}</p>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="nama">Umur</label>
                            <input type="text" name="umur" class="form-control" value="{{$data -> umur}}">
                            @foreach ($errors->get('umur') as $msg)
                                <p class="text-danger">{{$msg}}</p>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <textarea type="text" name="alamat" class="form-control">{{$data -> alamat}}</textarea>
                            @foreach ($errors->get('alamat') as $msg)
                                <p class="text-danger">{{$msg}}</p>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="nama">Kota</label>
                            <input type="text" name="kota" class="form-control" value="{{$data -> kota}}">
                            @foreach ($errors->get('kota') as $msg)
                                <p class="text-danger">{{$msg}}</p>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="nama">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" value="{{$data -> jurusan}}">
                            @foreach ($errors->get('jurusan') as $msg)
                                <p class="text-danger">{{$msg}}</p>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="nama">Kelas</label>
                            <input type="text" name="kelas" class="form-control" value="{{$data -> kelas}}">
                            @foreach ($errors->get('kelas') as $msg)
                                <p class="text-danger">{{$msg}}</p>
                            @endforeach
                        </div>

                        <div class="form-groub mt-2">
                            <a href="{{url('/')}}" class="btn btn-danger"> Kembali </a>
                            <button type="submit" class="btn btn-info"> Simpan </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
@endsection