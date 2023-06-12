@extends('admin.master')
@section('content')
<div class="container-fluid" style="min-height: 73vh">

    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">
                    Riwayat Transaksi
                </h3>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <table class="table" id="dataTable">
                        <thead class="table-secondary">
                            <tr align="center">
                                <td>No Produk</td>
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
    </div>

</div>

{{-- footer --}}
</div>
@endsection