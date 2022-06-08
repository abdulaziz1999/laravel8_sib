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


<!--================ About History Area  =================-->
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-sm btn-danger mb-2" href="{{ route('products.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Tambah Data Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('products.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Product</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Masukkan Nama Product" >
                            </div>
                            <div class="form-group">
                                <label for="detail">Detail</label>
                                <input type="text" class="form-control" id="detail" name="detail" placeholder="Masukkan Detail Product">
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


