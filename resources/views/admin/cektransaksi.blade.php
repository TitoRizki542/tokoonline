@extends('admin.master')
@section('content')
    <div class="container-fluid" style="min-height: 73vh">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Cek transaksi</h1>
        </div>
        <div class="mb-4">
            <p>Melakukan pengecekan transaksi</p>
        </div>
        <div class="card shadow mb-4">
            <div class="card-body mt-2">
                <div class="mb-1">
                    <p>Masukan Id Transaksi</p>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" placeholder="Contoh : tanixxx">
                    </div>
                    <div class="col-auto mx-auto">
                        <button type="submit" class="btn btn-primary ">Cek Transaksi</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-2">
            <div class="card-body mt-2">
                <table class="table table-sm">
                    <thead>
                        <tr align="center">
                            <td>Id Produk</td>
                            <td>Tanggal Transaksi</td>
                            <td>Nama</td>
                            <td>Jenis</td>
                            <td>Harga</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr align="center">
                            <td>tni0001</td>
                            <td>2023-06-06 15:41:35</td>
                            <td>Iphone 14 Promax</td>
                            <td>Elektronik</td>
                            <td>Rp14.999.999</td>
                            <td><button type="button" class="btn btn-success">Berhasil</button></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr align="center">
                            <td>tni0002</td>
                            <td>2023-06-06 15:40:51</td>
                            <td>ASUS ROG</td>
                            <td>Elektronik</td>
                            <td>Rp19.999.999</td>
                            <td><button type="button" class="btn btn-warning">Proses</button></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr align="center">
                            <td>tni0003</td>
                            <td>2023-06-06 15:40:49</td>
                            <td>Virtual Reality</td>
                            <td>Elektronik</td>
                            <td>Rp8.999.999</td>
                            <td><button type="button" class="btn btn-success">Berhasil</button></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr align="center">
                            <td>tni0004</td>
                            <td>2023-06-06 15:45:02</td>
                            <td>Ipad Pro </td>
                            <td>Elektronik</td>
                            <td>Rp7.999.999</td>
                            <td><button type="button" class="btn btn-danger">Gagal</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    {{-- footer --}}
    </div>
@endsection
