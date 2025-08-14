@extends('layout.template-admin')

@section('content')
    <div class="text-end">
        <a href="/kampus" class="btn btn-danger btn-sm">Kembali ke Daftar Kampus</a>
    </div>
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo rounded"></div>
                    </div>
                    <div class="profile-info">
                        <div class="profile-photo">
                            <img src="{{ asset('assets') }}/public/assets/images/profile/profile.png"
                                class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="profile-details">
                            <div class="profile-name px-3 pt-2">
                                <h4 class="text-primary mb-0">Universitas Bahaudin Mudhary Madura</h4>
                                <p>Swasta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-statistics">
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="m-b-0">8</h3>
                                            <span>Program Studi</span>
                                        </div>
                                        <div class="col">
                                            <h3 class="m-b-0">100</h3>
                                            <span>Fasilitas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#informasi-umum" data-bs-toggle="tab" class="nav-link active show">
                                        Informasi Umum
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#program-studi" data-bs-toggle="tab" class="nav-link">Program Studi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#fasilitas" data-bs-toggle="tab" class="nav-link">Fasilitas</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="informasi-umum" class="tab-pane fade active show">
                                    <div class="profile-about-me">
                                        <div class="pt-4 border-bottom-1 pb-3">
                                            <h4 class="text-primary">Deskripsi Singkat</h4>
                                            <p class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                Soluta, voluptatibus dolorum error voluptates illo impedit omnis
                                                perspiciatis unde perferendis itaque eos officiis, quidem laudantium
                                                repudiandae ratione aliquid. Quo, distinctio! Ut.</p>
                                        </div>
                                    </div>
                                    <div class="profile-personal-info">
                                        <h4 class="text-primary mb-4">Personal Information</h4>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">
                                                    Nama Kampus
                                                    <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7">
                                                <span>Universitas Bahaudin Mudhary Madura</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">
                                                    Tipe Kampus
                                                    <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7">
                                                <span>Swasta</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">
                                                    Akreditasi Institusi
                                                    <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7">
                                                <span>Baik</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">
                                                    Provinsi
                                                    <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7">
                                                <span>Jawa Timur</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">
                                                    Kota/Kabupaten
                                                    <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7">
                                                <span>Sumenep</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">
                                                    Alamat Lengkap
                                                    <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7">
                                                <span>Batuan</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">
                                                    Website Resmi
                                                    <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7">
                                                <span>
                                                    <a href="">https://www.example.com</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="program-studi" class="tab-pane fade">
                                    <div class="pt-3">
                                        <div id="accordion-ten" class="accordion accordion-header-shadow accordion-rounded">
                                            <div class="accordion__item">
                                                <div class="accordion__header collapsed accordion__header--primary"
                                                    data-bs-toggle="collapse" data-bs-target="#header-shadow_collapseOne">
                                                    <span class="accordion__header--icon"></span>
                                                    <span class="accordion__header--text">Informatika</span>
                                                    <span class="accordion__header--indicator"></span>
                                                </div>
                                                <div id="header-shadow_collapseOne" class="collapse accordion__body show"
                                                    data-bs-parent="#accordion-ten">
                                                    <div class="accordion__body--text">
                                                        <div class="row mb-2">
                                                            <div class="col-sm-3 col-5">
                                                                <h5 class="f-w-500">
                                                                    Jenjang
                                                                    <span class="pull-end">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-sm-9 col-7">
                                                                <span>S1</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-sm-3 col-5">
                                                                <h5 class="f-w-500">
                                                                    Akreditasi
                                                                    <span class="pull-end">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-sm-9 col-7">
                                                                <span>Unggul</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion__item">
                                                <div class="accordion__header collapsed accordion__header--info"
                                                    data-bs-toggle="collapse" data-bs-target="#header-shadow_collapseTwo">
                                                    <span class="accordion__header--icon"></span>
                                                    <span class="accordion__header--text">Sistem Informasi</span>
                                                    <span class="accordion__header--indicator"></span>
                                                </div>
                                                <div id="header-shadow_collapseTwo" class="collapse accordion__body"
                                                    data-bs-parent="#accordion-ten">
                                                    <div class="accordion__body--text">
                                                        <div class="row mb-2">
                                                            <div class="col-sm-3 col-5">
                                                                <h5 class="f-w-500">
                                                                    Jenjang
                                                                    <span class="pull-end">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-sm-9 col-7">
                                                                <span>S1</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-sm-3 col-5">
                                                                <h5 class="f-w-500">
                                                                    Akreditasi
                                                                    <span class="pull-end">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-sm-9 col-7">
                                                                <span>Baik</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="fasilitas" class="tab-pane fade">
                                    <div class="my-post-content pt-3 row">
                                        <div class="col-xl-6 profile-uoloaded-post border-bottom-1 pb-5">
                                            <img src="{{ asset('assets') }}/public/assets/images/profile/8.jpg"
                                                alt="" class="img-fluid w-100 rounded">
                                            <a class="post-title" href="">
                                                <h3 class="text-black">Perpustakaan</h3>
                                            </a>
                                            <p>
                                                A wonderful serenity has take possession of my entire soul like these sweet
                                                morning of spare which enjoy whole heart.A wonderful serenity has take
                                                possession of my entire soul like these sweet morning
                                                of spare which enjoy whole heart.
                                            </p>
                                        </div>
                                        <div class="col-xl-6 profile-uoloaded-post border-bottom-1 pb-5">
                                            <img src="{{ asset('assets') }}/public/assets/images/profile/9.jpg"
                                                alt="" class="img-fluid w-100 rounded">
                                            <a class="post-title" href="">
                                                <h3 class="text-black">Edutorium Jhege Tembhe</h3>
                                            </a>
                                            <p>
                                                A wonderful serenity has take possession of my entire soul like these sweet
                                                morning of spare which enjoy whole heart.A wonderful serenity has take
                                                possession of my entire soul like these sweet morning
                                                of spare which enjoy whole heart.
                                            </p>
                                        </div>
                                        <div class="col-xl-6 profile-uoloaded-post pb-3">
                                            <img src="{{ asset('assets') }}/public/assets/images/profile/8.jpg"
                                                alt="" class="img-fluid w-100 rounded">
                                            <a class="post-title" href="">
                                                <h3 class="text-black">Aula Tuan Ghube</h3>
                                            </a>
                                            <p>
                                                A wonderful serenity has take possession of my entire soul like these sweet
                                                morning of spare which enjoy whole heart.A wonderful serenity has take
                                                possession of my entire soul like these sweet morning
                                                of spare which enjoy whole heart.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="replyModal">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Post Reply</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <textarea class="form-control" rows="4">Message</textarea>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger light"
                                            data-bs-dismiss="modal">btn-close</button>
                                        <button type="button" class="btn btn-primary">Reply</button>
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
