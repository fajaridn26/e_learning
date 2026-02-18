@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Laporan & Statistik</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Laporan & Statistik</li>
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
                        {{-- <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <div id="reportrange" class="reportrange-picker d-flex align-items-center">
                                <span class="reportrange-picker-field"></span>
                            </div>
                            <div class="dropdown filter-dropdown">
                                <a class="btn btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                                    data-bs-auto-close="outside">
                                    <i class="feather-filter me-2"></i>
                                    <span>Filter</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Role"
                                                checked="checked">
                                            <label class="custom-control-label c-pointer" for="Role">Role</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Team"
                                                checked="checked">
                                            <label class="custom-control-label c-pointer" for="Team">Team</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Email"
                                                checked="checked">
                                            <label class="custom-control-label c-pointer" for="Email">Email</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Member"
                                                checked="checked">
                                            <label class="custom-control-label c-pointer" for="Member">Member</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Recommendation"
                                                checked="checked">
                                            <label class="custom-control-label c-pointer"
                                                for="Recommendation">Recommendation</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create New</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-filter me-3"></i>
                                        <span>Manage Filter</span>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <!-- [Mini Card] start -->
                    {{-- <div class="col-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="hstack justify-content-between mb-4 pb-">
                                    <div>
                                        <h5 class="mb-1">Email Reports</h5>
                                        <span class="fs-12 text-muted">Email Campaign Reports</span>
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light-brand">View Alls</a>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-2 col-lg-4 col-md-6">
                                        <div class="card stretch stretch-full border border-dashed border-gray-5">
                                            <div class="card-body rounded-3 text-center">
                                                <i class="bi bi-envelope fs-3 text-primary"></i>
                                                <div class="fs-4 fw-bolder text-dark mt-3 mb-1">50,545</div>
                                                <p
                                                    class="fs-12 fw-medium text-muted text-spacing-1 mb-0 text-truncate-1-line">
                                                    Total Email</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-lg-4 col-md-6">
                                        <div class="card stretch stretch-full border border-dashed border-gray-5">
                                            <div class="card-body rounded-3 text-center">
                                                <i class="bi bi-envelope-plus fs-3 text-warning"></i>
                                                <div class="fs-4 fw-bolder text-dark mt-3 mb-1">25,000</div>
                                                <p
                                                    class="fs-12 fw-medium text-muted text-spacing-1 mb-0 text-truncate-1-line">
                                                    Email Sent</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-lg-4 col-md-6">
                                        <div class="card stretch stretch-full border border-dashed border-gray-5">
                                            <div class="card-body rounded-3 text-center">
                                                <i class="bi bi-envelope-check fs-3 text-success"></i>
                                                <div class="fs-4 fw-bolder text-dark mt-3 mb-1">20,354</div>
                                                <p
                                                    class="fs-12 fw-medium text-muted text-spacing-1 mb-0 text-truncate-1-line">
                                                    Emails Delivered</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-lg-4 col-md-6">
                                        <div class="card stretch stretch-full border border-dashed border-gray-5">
                                            <div class="card-body rounded-3 text-center">
                                                <i class="bi bi-envelope-open fs-3 text-indigo"></i>
                                                <div class="fs-4 fw-bolder text-dark mt-3 mb-1">12,422</div>
                                                <p
                                                    class="fs-12 fw-medium text-muted text-spacing-1 mb-0 text-truncate-1-line">
                                                    Emails Opened</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-lg-4 col-md-6">
                                        <div class="card stretch stretch-full border border-dashed border-gray-5">
                                            <div class="card-body rounded-3 text-center">
                                                <i class="bi bi-envelope-heart fs-3 text-teal"></i>
                                                <div class="fs-4 fw-bolder text-dark mt-3 mb-1">6,248</div>
                                                <p
                                                    class="fs-12 fw-medium text-muted text-spacing-1 mb-0 text-truncate-1-line">
                                                    Emails Clicked</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-lg-4 col-md-6">
                                        <div class="card stretch stretch-full border border-dashed border-gray-5">
                                            <div class="card-body rounded-3 text-center">
                                                <i class="bi bi-envelope-slash fs-3 text-danger"></i>
                                                <div class="fs-4 fw-bolder text-dark mt-3 mb-1">2,047</div>
                                                <p
                                                    class="fs-12 fw-medium text-muted text-spacing-1 mb-0 text-truncate-1-line">
                                                    Emails Bounce</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- [Mini Card] end -->
                    <!-- [Visitors Overview] start -->

                    <!-- [Visitors Overview] end -->
                    <!-- [Browser States] start -->
                    <!-- [Browser States] end -->
                    <!-- [Mini Card] start -->
                    <!-- [Marketing Campaign] start -->
                    <div class="col-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Jumlah Mahasiswa Per Mata Kuliah</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Collapse/Expand">
                                            <a href="#" class="avatar-text avatar-xs bg-gray-300"
                                                data-bs-toggle="collapse"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="#" class="avatar-text avatar-xs bg-danger"
                                                data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="#" class="avatar-text avatar-xs bg-warning"
                                                data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="#" class="avatar-text avatar-xs bg-success"
                                                data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div id="mata-kuliah-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Marketing Campaign] end -->
                    <!-- [Leads Overview] start -->
                    <div class="col-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Tugas</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger"
                                                data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning"
                                                data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success"
                                                data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div id="target-donut" class="d-flex justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [Leads Overview] end -->
                    <!-- [Projects Stats] start -->
                    <div class="col-12">
                        <div class="card stratch">
                            <div class="card-header">
                                <h5 class="card-title">Tugas dan Nilai Mahasiswa</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger"
                                                data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning"
                                                data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success"
                                                data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive project-report-table">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Total Tugas</th>
                                                <th scope="col">Nilai Minimal</th>
                                                <th scope="col">Nilai Maksimal</th>
                                                <th scope="col">Nilai Rata-Rata</th>
                                                <th scope="col" class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($students as $item)
                                                <tr>
                                                    <td><span class="fw-bold text-dark">{{ $item->name }}</span>
                                                    </td>
                                                    <td><span class="">{{ $item->submission_count }}</span></td>
                                                    <td><span class="">{{ $item->submission_min_score ?? 0 }}</span>
                                                    </td>
                                                    <td><span class="">{{ $item->submission_max_score ?? 0 }}</span>
                                                    </td>
                                                    <td><span
                                                            class="">{{ round($item->submission_avg_score ?? 0) }}</span>
                                                    </td>
                                                    <td><a href="{{ route('reports.students', $item->id) }}"
                                                            class="d-flex me-1">
                                                            <div class="avatar-text avatar-md ms-auto"
                                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                title="Detail">
                                                                <i class="feather-arrow-right"></i>
                                                            </div>
                                                        </a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Projects Stats] end -->
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        {{-- <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
            <p><span>By: <a target="_blank" href="https://wrapbootstrap.com/user/theme_ocean"
                        target="_blank">theme_ocean</a></span> • <span>Distributed by: <a target="_blank"
                        href="https://themewagon.com" target="_blank">ThemeWagon</a></span></p>
            <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div>
        </footer> --}}
        <!-- [ Footer ] end -->
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/reports/courses')
                .then(res => res.json())
                .then(response => {
                    new ApexCharts(document.querySelector("#mata-kuliah-bar-chart"), {
                        chart: {
                            type: "bar",
                            height: 370,
                            toolbar: {
                                show: !1
                            }
                        },
                        series: [{
                            name: "Jumlah Mahasiswa",
                            data: response.data ?? [],
                        }, ],
                        plotOptions: {
                            bar: {
                                horizontal: !1,
                                endingShape: "rounded",
                                columnWidth: "30%",
                            },
                        },
                        dataLabels: {
                            enabled: !1,
                            offsetX: -6,
                            style: {
                                fontSize: "12px",
                                colors: ["#fff"]
                            },
                        },
                        stroke: {
                            show: !1,
                            width: 1,
                            colors: ["#fff"]
                        },
                        colors: ["#3454d1"],
                        xaxis: {
                            categories: response.labels ?? [],
                            axisBorder: {
                                show: !1
                            },
                            axisTicks: {
                                show: !1
                            },
                            labels: {
                                rotate: 0,
                                style: {
                                    colors: "#64748b",
                                    fontFamily: "Inter"
                                },
                            },
                        },
                        yaxis: {
                            min: 0,
                            forceNiceScale: true,
                            labels: {
                                formatter: function(val) {
                                    return parseInt(val).toLocaleString("id");
                                },
                                style: {
                                    color: "#64748b",
                                    fontFamily: "Inter"
                                },
                            },
                        },
                        grid: {
                            strokeDashArray: 3,
                            borderColor: "#e9ecef"
                        },
                        tooltip: {
                            y: {
                                formatter: function(e) {
                                    return +e + " Mahasiswa";
                                },
                            },
                            style: {
                                colors: "#64748b",
                                fontFamily: "Inter"
                            },
                        },
                        legend: {
                            show: !1,
                            fontFamily: "Inter",
                            labels: {
                                colors: "#64748b"
                            },
                        },
                    }).render();
                })
        })
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/reports/assignments')
                .then((res) => res.json())
                .then((response) => {
                    new ApexCharts(
                        document.querySelector("#target-donut"), {
                            chart: {
                                width: 328,
                                type: "donut"
                            },
                            dataLabels: {
                                enabled: !1
                            },
                            series: response.data ?? [],
                            labels: response.labels ?? [],
                            colors: ["#16c666", "#ea4d4c"],
                            stroke: {
                                width: 0,
                                lineCap: "round"
                            },
                            legend: {
                                show: true,
                                position: "bottom",
                            },
                            plotOptions: {
                                pie: {
                                    donut: {
                                        size: "85%",
                                        labels: {
                                            show: true,
                                            total: {
                                                show: true,
                                                label: "Tugas",
                                                color: "#333",
                                            },
                                        },
                                    },
                                },
                            },
                            responsive: [{
                                breakpoint: 380,
                                options: {
                                    chart: {
                                        width: 280
                                    },
                                    legend: {
                                        show: true
                                    },
                                },
                            }, ],
                            tooltip: {
                                y: {
                                    formatter: function(val) {
                                        return val;
                                    },
                                },
                                style: {
                                    colors: "#A0ACBB",
                                    fontFamily: "Inter"
                                },
                            },
                        },
                    ).render();
                });
        })
    </script>
@endsection
