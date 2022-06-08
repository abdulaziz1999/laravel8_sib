@extends('layouts_2.index')
@section('content')
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Products</h2>
            <ol class="breadcrumb">
                <li><a href="{{ url('mahasiswa') }}">Home</a></li>
                <li class="active">Products</li>
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
                        <h4>Daftar Products</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{route('products.create')}}" class="btn btn-sm btn-primary mb-3"><i
                                class="fa fa-plus"></i> Tambah Data</a>
                        <div class="table-responsive-md">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Detail Produk</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->detail }}</td>
                                        <td>
                                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                                <a class="btn btn-sm btn-info" href="{{ route('products.show',$product->id) }}"
                                                    title="Lihat Detail Data Produk">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-primary"
                                                    href="{{ route('products.edit',$product->id) }}"
                                                    title="Ubah Data Produk">
                                                    <i class="fa fa-pencil-square"></i>
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Hapus Data Produk"
                                                    onclick="return confirm('Anda Yakin Data Dihapus?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
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