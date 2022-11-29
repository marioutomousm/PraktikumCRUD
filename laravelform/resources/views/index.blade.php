@extends('layouts.app')

@section('content')
    <br />
    @if (Session::has('success'))
        <p class="alert alert-success d-flex align-items-center" role="alert">{{ Session::get('success') }}</p><br />
    @endif

    @if (Session::has('danger'))
        <p class="alert alert-danger d-flex align-items-center" role="alert">{{ Session::get('danger') }}</p><br />
    @endif
    <section>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Daftar Mahasiswa') }}</div>
                        <form class="d-flex" role="search" method="GET" action="{{ url('/dashboard') }}">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                name="keyword">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>

                        <div class="card-body">
                            <div class="col-lg mt-1">
                                <a href="{{ url('create') }}" class="btn btn-primary">Tambah Mahasiswa </a>
                            </div>
                            <div class="col-lg mt-2">
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
                                                <a href="{{ url('/show/' . $dataMahasiswa->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                            </td>
                                            <td> <a href="{{ url('/destroy/' . $dataMahasiswa->id) }}"
                                                    class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>

                            <div class="col-lg-8 mt-3">
                                {{ $data->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
@endsection
