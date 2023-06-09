@extends('admin.master')
@section('content')
    <div class="container-fluid mb-3" style="min-height: 73vh">

        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pendapatan</li>
                {{-- <li class="breadcrumb-item active" aria-current="page">Cek Stok Barang</li> --}}
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="row">
            <div class="col-sm-6">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text- mb-3">
                                    <h3>Total Pendapatan</h3>
                                </div>
                                <div class="h3 mb-3 font-weight-bold text-info">Rp100.000.000</div>
                                <p>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-wallet fa-4x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success mb-3">
                                    <h3>Total Penarikan</h3>
                                </div>
                                <div class="h3 mb-3 font-weight-bold text-info">Rp100.000.000</div>
                                <p>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-wallet fa-4x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col mt-4">
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead class="table-secondary">
                                <tr align="center">
                                    <td>Id Penarikan</td>
                                    <td>Tanggal Penarikan</td>
                                    <td>Jumlah</td>
                                    <td>Tersisa</td>
                                    <td>Status</td>

                                </tr>
                            </thead>
                            <tbody>
                                <tr align="center">
                                    <td>tni0001</td>
                                    <td>2023-06-06 15:41:35</td>
                                    <td>Iphone 14 Promax</td>
                                    <td>Rp14.999.999</td>
                                    <td><button type="button" class="btn btn-success">Berhasil</button></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr align="center">
                                    <td>tni0002</td>
                                    <td>2023-06-06 15:40:51</td>
                                    <td>ASUS ROG</td>
                                    <td>Rp19.999.999</td>
                                    <td><button type="button" class="btn btn-warning">Proses</button></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr align="center">
                                    <td>tni0003</td>
                                    <td>2023-06-06 15:40:49</td>
                                    <td>Virtual Reality</td>
                                    <td>Rp8.999.999</td>
                                    <td><button type="button" class="btn btn-success">Berhasil</button></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr align="center">
                                    <td>tni0004</td>
                                    <td>2023-06-06 15:45:02</td>
                                    <td>Ipad Pro </td>
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
    </div>
@endsection
