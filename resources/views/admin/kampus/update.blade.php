@extends('layout.template-admin')

@section('content')
    <form class="row" action="" method="POST" enctype="multipart/form-data">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Kampus</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="nama_kampus">Nama Kampus</label>
                                <input type="text" id="nama_kampus" name="nama_kampus" class="form-control"
                                    value="Universitas Bahaudin Mudhary Madura" placeholder="Masukkan Nama Kampus">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Tipe Kampus</label>
                                <br><br>
                                <label class="radio-inline me-3">
                                    <input type="radio" name="tipe_kampus" value="negeri">
                                    Negeri
                                </label>
                                <label class="radio-inline me-3">
                                    <input type="radio" name="tipe_kampus" value="swasta" checked>
                                    Swasta
                                </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="deskripsi">Deskripsi Singkat</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi optio saepe sequi tempore voluptate ipsam fuga consequuntur! Consequuntur dolores temporibus laborum itaque eius accusamus sint quae? Libero reprehenderit sit minima.</textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="akreditasi">Akreditasi Institusi</label>
                                <select class="default-select form-control wide mb-3" id="akreditasi" name="akreditasi">
                                    <option disabled>-- Pilih Akreditasi --</option>
                                    <option value="A">A</option>
                                    <option value="B" selected>B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="website">Website Resmi</label>
                                <input type="text" id="website" name="website" class="form-control" value="https://www.uniba.ac.id"
                                    placeholder="Masukkan Website Resmi">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="logo">Logo Kampus</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Upload</span>
                                    <div class="form-file">
                                        <input type="file" class="form-file-input form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Informasi Lokasi</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="provinsi">Provinsi</label>
                            <div class="col-sm-9">
                                <select class="default-select form-control wide mb-3" id="provinsi" name="provinsi">
                                    <option disabled>-- Pilih Provinsi --</option>
                                    <option value="Jawa Timur" selected>Jawa Timur</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Bali">Bali</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="kota">Kota/Kabupaten</label>
                            <div class="col-sm-9">
                                <select class="default-select form-control wide mb-3" id="kota" name="kota">
                                    <option disabled>-- Pilih Kota/Kabupaten --</option>
                                    <option value="Surabaya" selected>Surabaya</option>
                                    <option value="Bandung">Bandung</option>
                                    <option value="Denpasar">Denpasar</option>
                                </select>
                            </div>
                        </div>
                        <fieldset class="mb-3">
                            <div class="row">
                                <label class="col-form-label col-sm-3 pt-0" for="alamat">Alamat Lengkap</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="alamat" name="alamat">Lorem ipsum dolor sit amet consectetur, adipisicing elit. At ipsam iusto tempore dolore minus, facilis cumque nulla beatae aspernatur non dolorem? Officiis tempore voluptatibus commodi quas est quisquam architecto alias.</textarea>
                                </div>
                            </div>
                        </fieldset>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    <button type="reset" class="btn btn-warning btn-sm">Reset</button>
                    <a href="/kampus" class="btn btn-danger btn-sm">Batal</a>
                </div>
            </div>
        </div>
    </form>
@endsection
