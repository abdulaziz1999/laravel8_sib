@extends('layouts_2.index')
@section('content')
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Detail Products</h2>
            <ol class="breadcrumb">
                <li><a href="{{ url('mahasiswa') }}">Home</a></li>
                <li class="active">Detail Products</li>
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
                <a class="btn btn-sm btn-danger mb-2" href="{{ route('products.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Detail Mahasiswa Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item"><strong>Nama Product : {{$product->name}}</strong> </li>
                            <li class="list-group-item"><strong>Detail : {{$product->detail}}</strong> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
