@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $barang->nama_barang}}</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('uploads') }}/{{ $barang->gambar }}" class="rounded mx-auto d-block" width="100%" alt="">
                        </div>
                        <div class="col-md-6">
                            <h2 class="pl-2"><b>{{ $barang->nama_barang}}</b></h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($barang->harga)}}</td>
                                    </tr>

                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td>{{ $barang->stok}}</td>
                                    </tr>

                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{ $barang->keterangan}}</td>
                                    </tr>

                                    <form action="" method="post">
                                    <tr>
                                        <td>Jumlah Beli</td>
                                        <td>:</td>
                                        <td><input type="number" class="form-control" required></td>
                                    </tr>
                                    
                                    <tr>
                                        <td colspan="3"><button class="btn btn-lg btn-block btn-dark">Tambah Keranjang</button></td>
                                    </tr>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
