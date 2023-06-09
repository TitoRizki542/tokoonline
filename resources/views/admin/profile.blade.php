@extends('admin.master')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profil Pengguna</li>
        </ol>
    </nav>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <div class="card mb-2 shadow h-100 py-2">
                <div class="card-body text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 100px">
                    <h5 class="my-3">Tito Rizki (Aries.)</h5 <p class="text-muted mb-1">
                    <link rel="shortcut icon"
                        href="https://o.remove.bg/downloads/df7b37a7-312a-49f9-ab9b-e5fc150b05fc/download__1_-removebg-preview.png"
                        type="image/png">
                    <img src="">Magelang, No.1 Lolita<img>
                    </p>
                    <p class="text-muted mb-4">Jawa Tengah, Indonesia</p>
                    <div class="d-flex justify-content-center mb-2">
                        <button type="button" class="btn btn-outline-primary ms-1">Ubah</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mx-auto">
            <div class="card mb-2 shadow h-100 py-2">
                <div class="d-grid gap-1 d-md-flex justify-content-md-end mt-1 mb-2">
                    <a href="setting">
                        <i class="fa-solid fa-gear mx-3 mb-2"></i>
                    </a>
                </div>
                <div class="card-body text-left">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nama </p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Tito Rizki Purnomo</p>
                            </div>
                        </div>
                        <hr width="850">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Alamat</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Jawa Tengah</p>
                            </div>
                        </div>
                        <hr width="850">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">No HP</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">(+62)85728006071</p>
                            </div>
                        </div>
                        <hr width="850">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">titorizki@gmai.com</p>
                            </div>
                        </div>
                        <hr width="850">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Jenis Kelamin</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Laki Laki</p>
                            </div>
                        </div>
                        <hr width="850">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection