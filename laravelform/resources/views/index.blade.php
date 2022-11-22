@extends('layout.default')

@section('content')
    <br />
    @if (Session::has('success'))
        <p class="alert alert-success d-flex align-items-center" role="alert">{{ Session::get('success') }}</p><br/>
    @endif

    @if (Session::has('danger'))
    <p class="alert alert-danger d-flex align-items-center" role="alert">{{ Session::get('danger') }}</p><br/>
@endif
    <section>
    
        <nav class="navbar navbar-expand-lg bg-light">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                  </li>
                  
                <form class="d-flex" role="search" method="GET" action="{{url('/')}}">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1> Daftar Mahasiswa </h1>
                    <a href="{{ url('create') }}" class="btn btn-primary">Tambah Mahasiswa </a>
                </div>
            </div>

            <div class="col-lg-8 mt-4">
                <table class="table table-bordered">
                    <tr class="text-center">

                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th colspan="2">Action</th>
                        
                    </tr>
                    @foreach ($data as $dataMahasiswa)
                        <tr>

                            <td>{{ $dataMahasiswa->nim }}</td>
                            <td>{{ $dataMahasiswa->nama }}</td>
                            <td>{{ $dataMahasiswa->umur }}</td>
                            <td>{{ $dataMahasiswa->alamat }}</td>
                            <td>{{ $dataMahasiswa->kota }}</td>
                            <td>{{ $dataMahasiswa->jurusan }}</td>
                            <td>{{ $dataMahasiswa->kelas }}</td>
                            <td>
                                <a href="{{ url('/show/' . $dataMahasiswa->id) }}" class="btn btn-info">Edit</a>
                                
                            </td>
                            <td> <a href="{{ url('/destroy/' . $dataMahasiswa->id) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    
    </section>
@endsection
