@extends('layouts_2.index')
@section('content')
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Mahasiswa</h2>
            <ol class="breadcrumb">
                <li><a href="{{ url('mahasiswa') }}">Home</a></li>
                <li class="active">Mahasiswa</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->

<!--================ About History Area  =================-->
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Daftar Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{route('mahasiswa.create')}}" class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Data</a>
                        <div class="table-responsive-md">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nim</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mahasiswa as $m)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$m->nim}}</td>
                                        <td>{{$m->nama}}</td>
                                        <td>{{$m->alamat}}</td>
                                        <td>{{$m->email}}</td>
                                        <td>
                                            <form action="{{ route('mahasiswa.destroy',$m->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-info" href="{{ route('mahasiswa.show',$m->id) }}"><i class="fa fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('mahasiswa.edit',$m->id) }}"><i class="fa fa-pen"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection