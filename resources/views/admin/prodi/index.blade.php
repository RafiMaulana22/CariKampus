@extends('layout.template-admin')

@section('content')
    <div class="text-end">
        <a href="/kampus" class="btn btn-danger btn-sm">Kembali ke Daftar Kampus</a>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Program Studi</h4>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahProgramStudi">
                        Tambah Program Studi
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jurusan</th>
                                    <th>Akreditasi</th>
                                    <th>Biaya Masuk</th>
                                    <th>UKT/SPP per Semester</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>S1 Informatika</td>
                                    <td>Unggul</td>
                                    <td>Rp 15.000.000</td>
                                    <td>Rp 1.000.000 - Rp 10.000.000</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editProgramStudi-id">
                                            Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </td>
                                </tr>

                                {{--  Modal Edit  --}}
                                <div class="modal fade" id="editProgramStudi-id">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <form action="" method="POST">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Program Studi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="basic-form">
                                                        <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                <label class="form-label" for="jurusan">
                                                                    Nama Jurusan
                                                                </label>
                                                                <input type="text" id="jurusan" name="jurusan"
                                                                    class="form-control" value="Informatika"
                                                                    placeholder="Masukkan Nama Jurusan">
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="jenjang">Jenjang</label>
                                                                <select class="default-select form-control wide mb-3"
                                                                    id="jenjang" name="jenjang">
                                                                    <option disabled>-- Pilih Jenjang --</option>
                                                                    <option value="D1">D1</option>
                                                                    <option value="D2">D2</option>
                                                                    <option value="D3">D3</option>
                                                                    <option value="S1" selected>S1</option>
                                                                    <option value="S2">S2</option>
                                                                    <option value="S3">S3</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="akreditasi">
                                                                    Akreditasi Jurusan
                                                                </label>
                                                                <select class="default-select form-control wide mb-3"
                                                                    id="akreditasi" name="akreditasi">
                                                                    <option disabled>-- Pilih Akreditasi --
                                                                    </option>
                                                                    <option value="Unggul" selected>Unggul</option>
                                                                    <option value="Baik">Baik</option>
                                                                    <option value="Cukup">Cukup</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-md-12">
                                                                <label class="form-label" for="uang_pangkal">
                                                                    Uang Pangkal / Biaya Masuk
                                                                </label>
                                                                <input type="number" id="uang_pangkal" name="uang_pangkal"
                                                                    class="form-control" value="15000000"
                                                                    placeholder="Masukkan Uang Pangkal / Biaya Masuk">
                                                            </div>
                                                            <div class="mb-3 col-md-12">
                                                                <label class="form-label" for="">
                                                                    UKT/SPP per Semester (Rentang)
                                                                </label>
                                                                <div class="mb-3 row">
                                                                    <label class="col-sm-3 col-form-label" for="ukt_dari">
                                                                        Dari
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="number" id="ukt_dari" name="ukt_dari"
                                                                            class="form-control" value="1000000"
                                                                            placeholder="Masukkan UKT/SPP Dari">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label class="col-sm-3 col-form-label" for="ukt_hingga">
                                                                        Hingga
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="number" id="ukt_hingga"
                                                                            name="ukt_hingga" class="form-control"
                                                                            value="10000000"
                                                                            placeholder="Masukkan UKT/SPP Hingga">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light btn-sm"
                                                        data-bs-dismiss="modal">
                                                        Batal
                                                    </button>
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Update Prodi
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Jurusan</th>
                                    <th>Akreditasi</th>
                                    <th>Biaya Masuk</th>
                                    <th>UKT/SPP per Semester</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  Modal Tambah  --}}
    <div class="modal fade" id="tambahProgramStudi">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Program Studi Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="basic-form">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="jurusan">Nama Jurusan</label>
                                    <input type="text" id="jurusan" name="jurusan" class="form-control"
                                        placeholder="Masukkan Nama Jurusan">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="jenjang">Jenjang</label>
                                    <select class="default-select form-control wide mb-3" id="jenjang" name="jenjang">
                                        <option selected disabled>-- Pilih Jenjang --</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="akreditasi">Akreditasi Jurusan</label>
                                    <select class="default-select form-control wide mb-3" id="akreditasi"
                                        name="akreditasi">
                                        <option selected disabled>-- Pilih Akreditasi --</option>
                                        <option value="Unggul">Unggul</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Cukup">Cukup</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="uang_pangkal">Uang Pangkal / Biaya Masuk</label>
                                    <input type="number" id="uang_pangkal" name="uang_pangkal" class="form-control"
                                        placeholder="Masukkan Uang Pangkal / Biaya Masuk">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="">UKT/SPP per Semester (Rentang)</label>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="ukt_dari">Dari</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="ukt_dari" name="ukt_dari" class="form-control"
                                                placeholder="Masukkan UKT/SPP Dari">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="ukt_hingga">Hingga</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="ukt_hingga" name="ukt_hingga" class="form-control"
                                                placeholder="Masukkan UKT/SPP Hingga">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light btn-sm" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Prodi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
