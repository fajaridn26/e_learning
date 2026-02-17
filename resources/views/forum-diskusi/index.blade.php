@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Forum Diskusi</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Forum Diskusi</li>
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
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            {{-- <a href="javascript:void(0);" class="btn btn-icon btn-light-brand" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">
                                <i class="feather-bar-chart"></i>
                            </a> --}}
                            {{-- <div class="dropdown">
                                <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                                    data-bs-auto-close="outside">
                                    <i class="feather-filter"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-primary rounded-circle d-inline-block me-3"></span>
                                        <span>Alls</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-indigo rounded-circle d-inline-block me-3"></span>
                                        <span>On Hold</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-warning rounded-circle d-inline-block me-3"></span>
                                        <span>Pending</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-success rounded-circle d-inline-block me-3"></span>
                                        <span>Finished</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-danger rounded-circle d-inline-block me-3"></span>
                                        <span>Declined</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-teal rounded-circle d-inline-block me-3"></span>
                                        <span>In Progress</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-success rounded-circle d-inline-block me-3"></span>
                                        <span>Not Started</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-warning rounded-circle d-inline-block me-3"></span>
                                        <span>My Projects</span>
                                    </a>
                                </div>
                            </div> --}}
                            {{-- <div class="dropdown">
                                <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                                    data-bs-auto-close="outside">
                                    <i class="feather-paperclip"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-pdf me-3"></i>
                                        <span>PDF</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-csv me-3"></i>
                                        <span>CSV</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-xml me-3"></i>
                                        <span>XML</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-txt me-3"></i>
                                        <span>Text</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-exe me-3"></i>
                                        <span>Excel</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-printer me-3"></i>
                                        <span>Print</span>
                                    </a>
                                </div>
                            </div> --}}
                            <a data-bs-target="#createModal" data-bs-toggle="modal" class="btn btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Tambah Topik Diskusi</span>
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
            <div id="collapseOne" class="accordion-collapse collapse page-header-collapse">
                <div class="accordion-body pb-2">
                    <div class="row">
                        <div class="col-xxl-3 col-md-6">
                            <div class="card stretch stretch-full">
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">Not Started</span>
                                        <span class="fs-24 fw-bolder d-block">04</span>
                                    </a>
                                    <div class="pt-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                                <span>Invoices Awaiting</span>
                                                <i class="feather-link-2 fs-10 ms-1"></i>
                                            </a>
                                            <div>
                                                <span class="fs-12 text-muted">$5,569</span>
                                                <span class="fs-11 text-muted">(56%)</span>
                                            </div>
                                        </div>
                                        <div class="progress mt-2 ht-3">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 56%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card stretch stretch-full">
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">In Progress</span>
                                        <span class="fs-24 fw-bolder d-block">06</span>
                                    </a>
                                    <div class="pt-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                                <span>Projects In Progress</span>
                                                <i class="feather-link-2 fs-10 ms-1"></i>
                                            </a>
                                            <div>
                                                <span class="fs-12 text-muted">16 Completed</span>
                                                <span class="fs-11 text-muted">(78%)</span>
                                            </div>
                                        </div>
                                        <div class="progress mt-2 ht-3">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 78%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card stretch stretch-full">
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">Cancelled</span>
                                        <span class="fs-24 fw-bolder d-block">02</span>
                                    </a>
                                    <div class="pt-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                                <span>Converted Leads</span>
                                                <i class="feather-link-2 fs-10 ms-1"></i>
                                            </a>
                                            <div>
                                                <span class="fs-12 text-muted">52 Completed</span>
                                                <span class="fs-11 text-muted">(63%)</span>
                                            </div>
                                        </div>
                                        <div class="progress mt-2 ht-3">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 63%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card stretch stretch-full">
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">Finished</span>
                                        <span class="fs-24 fw-bolder d-block">25</span>
                                    </a>
                                    <div class="pt-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                                <span>Conversion Rate</span>
                                                <i class="feather-link-2 fs-10 ms-1"></i>
                                            </a>
                                            <div>
                                                <span class="fs-12 text-muted">$2,254</span>
                                                <span class="fs-11 text-muted">(46%)</span>
                                            </div>
                                        </div>
                                        <div class="progress mt-2 ht-3">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 46%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="projectList">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Mata Kuliah</th>
                                                <th>Topik Diskusi</th>
                                                <th>Tanggal</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($discussions as $discussion)
                                                <tr class="single-item">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $discussion->user->name }}</td>
                                                    <td>{{ $discussion->course->name }}</td>
                                                    <td>{{ $discussion->content }}</td>
                                                    <td>{{ $discussion->created_at->format('d F Y H:i') }}</td>
                                                    <td><a href="{{ route('discussions.detail-diskusi', $discussion->id) }}"
                                                            class="d-flex me-1" data-alert-target="invoicSendMessage">
                                                            <div class="avatar-text avatar-md" data-bs-toggle="tooltip"
                                                                data-bs-trigger="hover" title="Detail Diskusi">
                                                                <i class="feather feather-eye"></i>
                                                            </div>
                                                        </a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <form id="discussionForm">
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Topik Diskusi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Mata Kuliah</label>
                                <select name="course_id" id="courseSelect" class="form-select">
                                    <option value="" disabled selected>Pilih Mata Kuliah</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Topik Diskusi</label>
                                <input type="text" name="content" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.getElementById("discussionForm").addEventListener("submit", function(e) {
            e.preventDefault();

            fetch('/api/discussions', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('token'),
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        course_id: document.getElementById("courseSelect").value,
                        content: this.content.value
                    })
                })
                .then(res => {
                    if (!res.ok) throw new Error("Unauthorized");
                    return res.json();
                })
                .then(data => {
                    alert("Diskusi berhasil dibuat!");
                    location.reload();
                })
                .catch(err => {
                    console.log(err);
                    alert("Session habis, silakan login ulang");
                    window.location.href = "/login";
                });
        });
    </script>
@endsection
