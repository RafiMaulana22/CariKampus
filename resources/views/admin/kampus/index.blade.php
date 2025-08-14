@extends('layout.template-admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Kampus</h4>
                    <a href="/kampus/tambah" class="btn btn-primary btn-sm">Tambah Kampus</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kampus</th>
                                    <th>Lokasi</th>
                                    <th>Tipe</th>
                                    <th>Manajemen Prodi</th>
                                    <th>Manajemen Fasilitas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Universitas Indonesia</td>
                                    <td>Depok</td>
                                    <td>Negeri</td>
                                    <td>
                                        <a href="/kampus/id/prodi" class="btn btn-primary btn-sm">Lihat Prodi</a>
                                    </td>
                                    <td>
                                        <a href="/kampus/id/fasilitas" class="btn btn-primary btn-sm">Lihat Fasilitas</a>
                                    </td>
                                    <td>
                                        <a href="/kampus/id/detail" class="btn btn-primary btn-sm">Lihat Detail</a>
                                        <a href="/kampus/id/edit" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/kampus/id/hapus" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kampus</th>
                                    <th>Lokasi</th>
                                    <th>Tipe</th>
                                    <th>Manajemen Prodi</th>
                                    <th>Manajemen Fasilitas</th>
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
