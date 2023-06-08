@extends('admin.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid" style="min-height: 73vh">

        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Produksi</li>
              <li class="breadcrumb-item active" aria-current="page">Cek Stok Barang</li>
            </ol>
          </nav>

        <!-- DataTales Example -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary">
                    Daftar Barang
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                <th>No</th>
                                <th>ID Barang</th>
                                <th>Jenis Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga Barang</th>
                                <th>Jumlah</th>
                                <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
