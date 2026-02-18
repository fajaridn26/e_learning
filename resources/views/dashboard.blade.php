@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="row">
                    <div class="col-12">
                        <div class="card text-white rounded-3 p-4 mb-4"
                            style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <div>
                                    <h3 class="fw-bold text-white mb-2">Selamat Datang, {{ auth()->user()->name }}!</h3>
                                    <p class="mb-2">Semoga hari ini produktif dan menyenangkan.</p>
                                    <small>Terus eksplorasi, belajar, dan berkembang setiap hari.</small>
                                </div>
                                <div>
                                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135761.png" alt="Learning"
                                        style="width: 100px; height: 100px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Footer ] start -->
        {{-- @include('layouts.footer') --}}
        <!-- [ Footer ] end -->
    </main>
@endsection
