@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Materi Kuliah</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Materi Kuliah</li>
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

                            <a id="btnTambahMateriKuliah" data-bs-target="#createModal" data-bs-toggle="modal"
                                class="btn btn-primary" style="display: none">
                                <i class="feather-plus me-2"></i>
                                <span>Tambah Materi Kuliah</span>
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
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @elseif (session('deleteSuccess'))
                    <div class="alert alert-success" role="alert">
                        {{ session('deleteSuccess') }}
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
                                                <th>Mata Kuliah</th>
                                                <th>Judul</th>
                                                <th>Materi</th>
                                                <th style="width: 40px" class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($materials as $material)
                                                <tr class="single-item">
                                                    <td>{{ $material->course->name }}</td>
                                                    <td>{{ $material->title }}</td>
                                                    <td><a href="{{ route('materials.download', $material->id) }}"
                                                            class="btn btn-primary btn-md w-50 text-dark"><i
                                                                class="feather-download me-2"></i>Download</a></td>
                                                    <td style="width: 40px" class="text-end"><a href="javascript:void(0)"
                                                            class="d-flex me-1"
                                                            data-bs-target="#deleteModal{{ $material->id }}"
                                                            data-bs-toggle="modal">
                                                            <div class="avatar-text avatar-md" data-bs-toggle="tooltip"
                                                                data-bs-trigger="hover" title="Hapus Materi">
                                                                <i class="feather feather-trash"></i>
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

    <form action="{{ url('materials') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Materi Kuliah</h5>
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
                                <label for="nameBasic" class="form-label">Upload File</label>
                                <input type="file" name="file_path" class="custom-file-upload btn btn-light" />
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

    @foreach ($materials as $material)
        <form action="{{ route('materials.destroy', $material->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal fade" id="deleteModal{{ $material->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Materi Kuliah</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                <h5>Materi Kuliah <span class="text-primary">{{ $material->course->name }}</span> akan
                                    dihapus!
                                </h5>
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
    @endforeach
@endsection
