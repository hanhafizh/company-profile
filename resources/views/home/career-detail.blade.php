@extends('templates.main')

@section('title', 'career')

@section('content')
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">Our Careers</h4>
                <h1 class="display-5 mb-4">ADMIN. FC ACADEMY</h1>
            </div>
            <div class="mb-5">
                <ul
                    class="list-unstyled mb-1 mb-md-3 d-flex flex-column flex-md-row justify-content-center gap-3 text-start text-md-center">
                    {{-- Perusahaan --}}
                    <li><i class="bi bi-building"></i> Dewa Utd Indonesia</li>
                    {{-- Lokasi --}}
                    <li><i class="bi bi-geo-alt"></i> Tangerang, Banten</li>
                    {{-- Kategori --}}
                    <li><i class="bi bi-briefcase"></i> Administrasi & Dukungan Perkantoran</li>
                    {{-- Tipe --}}
                    <li><i class="bi bi-clock"></i> Full Time</li>
                </ul>
            </div>

            <div class="mb-5 alert alert-warning d-inline-block py-1 px-2" role="alert" style="font-size: 0.875rem;">
                Posted: 30+ hari yang lalu
            </div>

            <div class="mb-5 alert alert-danger d-inline-block py-1 px-2" role="alert" style="font-size: 0.875rem;">
                Deadline: 15 Mei 2025
            </div>

            <div class="row">
                <div class="col-12 mb-4">
                    <h5 class="mb-2">Requirement:</h5>
                    <ul>
                        <li>Pendidikan minimal SMA</li>
                        <li>Pengalaman minimal 1 tahun di posisi yang sama</li>
                        <li>Pengalaman minimal 1 tahun di bidang Sports (diutamakan pengalaman Club)</li>
                        <li>Dapat berbahasa Inggris aktif</li>
                        <li>Mahir menggunakan komputer (MS. Office, internet, web & editing)</li>
                        <li>Dapat segera bergabung</li>
                    </ul>
                </div>

                <div class="col-12 mb-4">
                    <h5 class="mb-2">Responsibility:</h5>
                    <ul>
                        <li>Menerima pendaftaran murid baru</li>
                        <li>Menginformasikan jadwal akademi</li>
                        <li>Mendata absensi murid</li>
                        <li>Surat-menyurat untuk keperluan tim</li>
                        <li>Realisasi kegiatan tim</li>
                        <li>Siap diberpabntukan untuk kebutuhan tim Pro</li>
                        <li>Dan lainnya</li>
                    </ul>
                </div>
            </div>
            <a href="#" class="btn btn-primary btn-xl">Lamar Kerja</a>
        </div>
    </div>
@endsection
