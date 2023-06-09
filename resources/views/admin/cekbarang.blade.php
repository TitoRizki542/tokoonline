@extends('admin.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid" style="min-height: 73vh">

  <!-- Page Heading -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Produksi</li>
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
          <div class="d-grid gap-1 d-md-flex justify-content-md-end mt-1 mb-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i
                class="fa-solid fa-cart-plus mx-2"></i> Tambah Barang</button>
          </div>
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

<!-- Modal Tambah Barang -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Jenis Barang</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option value="1">Buah</option>
              <option value="2">Sayur</option>
              <option value="3">Peralatan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Barang</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Harga Barang</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jumlah Barang</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile">Pilih Gambar</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>
</div>
@endsection