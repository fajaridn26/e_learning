@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Tugas</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Tugas</li>
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
                            @if (auth()->user()->role === 'Dosen')
                                <a data-bs-target="#createModal" data-bs-toggle="modal" class="btn btn-primary">
                                    <i class="feather-plus me-2"></i>
                                    <span>Tambah Tugas</span>
                                </a>
                            @endif
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
                @elseif(session('updateSuccess'))
                    <div class="alert alert-success" role="alert">
                        {{ session('updateSuccess') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    @if (auth()->user()->role === 'Dosen')
                                        <table class="table table-hover" id="projectList">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Mata Kuliah</th>
                                                    <th>Judul</th>
                                                    <th>Deskripsi</th>
                                                    <th>Deadline</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($assignments as $assignment)
                                                    <tr class="single-item">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $assignment->course->name }}</td>
                                                        <td>{{ $assignment->title }}</td>
                                                        <td>{{ $assignment->description }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($assignment->deadline)->format('d F Y H:i') }}
                                                        </td>
                                                        <td>
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <a href="{{ route('submissions.tugas-mahasiswa', $assignment->id) }}"
                                                                    class="d-flex me-1"
                                                                    data-alert-target="invoicSendMessage">
                                                                    <div class="avatar-text avatar-md"
                                                                        data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                        title="Tugas Mahasiswa">
                                                                        <i class="feather feather-eye"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @elseif (auth()->user()->role === 'Mahasiswa')
                                        <table class="table table-hover" id="projectList">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Mata Kuliah</th>
                                                    <th>Judul</th>
                                                    <th>Deskripsi</th>
                                                    <th>Deadline</th>
                                                    <th>Nilai</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($assignments as $assignment)
                                                    <tr class="single-item">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $assignment->course->name }}</td>
                                                        <td>{{ $assignment->title }}</td>
                                                        <td>{{ $assignment->description }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($assignment->deadline)->format('d F Y H:i') }}
                                                        </td>
                                                        <td>{{ $assignment->submission->first()?->score ?? 0 }}</td>
                                                        <td>
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <a href="javascript:void(0)" class="d-flex me-1"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kumpulkanTugas{{ $assignment->id }}">
                                                                    <div class="avatar-text avatar-md"
                                                                        data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                        title="Kumpulkan Tugas">
                                                                        <i class="feather feather-send"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <form action="{{ url('assignments') }}" method="POST">
        @csrf
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Tugas</h5>
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
                                <label for="nameBasic" class="form-label">Judul</label>
                                <input type="text" name="title" class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Deskripsi</label>
                                <textarea name="description" rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Deadline</label>
                                <input type="datetime-local" name="deadline" class="form-control" />
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

    @foreach ($assignments as $assignment)
        <form action="{{ url('submissions') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="kumpulkanTugas{{ $assignment->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Kumpulkan Tugas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Upload File</label>
                                    <input type="file" name="file_path" class="custom-file-upload btn btn-light" />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="assignment_id" value="{{ $assignment->id }}">
                        <input type="hidden" name="student_id" value="{{ auth()->id() }}">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection
