@extends('layouts_2.index')
@section('content')
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Edit Data Mahasiswa</h2>
            <ol class="breadcrumb">
                <li><a href="{{ url('mahasiswa') }}">Home</a></li>
                <li class="active">Edit Data Mahasiswa</li>
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
                <a class="btn btn-sm btn-danger mb-2" href="{{ route('mahasiswa.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
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
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Edit Data Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <!-- form edit mahasiswa -->
                        <form action="{{route('mahasiswa.update',$mahasiswa->id)}}" method="post" autocomplete="off">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$mahasiswa->id}}">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Masukkan Nama" value="{{$mahasiswa->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="nim">Nim</label>
                                <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukkan Nim"
                                    value="{{$mahasiswa->nim}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Masukkan Email" value="{{$mahasiswa->email}}">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat"
                                    rows="3">{{$mahasiswa->alamat}}</textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-pen"></i> Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End About History Area  =================-->
@endsection