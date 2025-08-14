@extends('layout.template-admin')

@section('content')
    <div class="text-end">
        <a href="/kampus" class="btn btn-danger btn-sm">Kembali ke Daftar Kampus</a>
    </div>
    <div class="row mt-3">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Fasilitas Baru</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label class="form-label" for="nama_fasilitas">Nama Fasilitas</label>
                                <input type="text" id="nama_fasilitas" name="nama_fasilitas" class="form-control"
                                    placeholder="Masukkan Nama Fasilitas">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label" for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label" for="foto_fasilitas">Foto Fasilitas</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Upload</span>
                                    <div class="form-file">
                                        <input type="file" class="form-file-input form-control" name="foto_fasilitas">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Tambah Fasilitas</button>
                        <button type="reset" class="btn btn-warning btn-sm">Reset</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Fasilitas</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Fasilitas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Perpustakaan</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Fasilitas</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
