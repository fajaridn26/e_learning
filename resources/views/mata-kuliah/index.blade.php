@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Mata Kuliah</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Mata Kuliah</li>
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
                            @if (auth()->user()->role === 'Dosen')
                                <a data-bs-target="#createModal" data-bs-toggle="modal" class="btn btn-primary">
                                    <i class="feather-plus me-2"></i>
                                    <span>Tambah Mata Kuliah</span>
                                </a>
                            @elseif (auth()->user()->role === 'Mahasiswa')
                                <a data-bs-target="#createModalMahasiswa" data-bs-toggle="modal" class="btn btn-primary">
                                    <i class="feather-plus me-2"></i>
                                    <span>Tambah Mata Kuliah</span>
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
                @elseif(session('deleteSuccess'))
                    <div class="alert alert-success" role="alert">
                        {{ session('deleteSuccess') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                @if (auth()->user()->role === 'Dosen')
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="projectList">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Mata Kuliah</th>
                                                    <th>Deskripsi</th>
                                                    <th style="width: 120px;" class="text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($courses as $course)
                                                    <tr class="single-item">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $course->name }}</td>
                                                        <td>{{ $course->description }}</td>
                                                        <td style="width: 120px;" class="text-end">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <a href="javascript:void(0)" class="d-flex me-1"
                                                                    data-bs-target="#editModal{{ $course->id }}"
                                                                    data-bs-toggle="modal">
                                                                    <div class="avatar-text avatar-md"
                                                                        data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                        title="Edit Mata Kuliah">
                                                                        <i class="feather feather-edit"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="javascript:void(0)" class="d-flex me-1"
                                                                    data-bs-target="#deleteModal{{ $course->id }}"
                                                                    data-bs-toggle="modal">
                                                                    <div class="avatar-text avatar-md"
                                                                        data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                        title="Hapus Mata Kuliah">
                                                                        <i class="feather feather-trash"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @elseif (auth()->user()->role === 'Mahasiswa')
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="projectList">
                                            <thead>
                                                <tr>
                                                    <th class="wd-30">
                                                        <div class="btn-group mb-1">
                                                            <div class="custom-control custom-checkbox ms-1">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="checkAllProject">
                                                                <label class="custom-control-label"
                                                                    for="checkAllProject"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>Mata Kuliah</th>
                                                    <th>Deskripsi</th>
                                                    <th class="text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($courses as $course)
                                                    <tr class="single-item">
                                                        <td>
                                                            <div class="item-checkbox ms-1">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input checkbox"
                                                                        id="checkBox_1{{ $course->id }}">
                                                                    <label class="custom-control-label"
                                                                        for="checkBox_1{{ $course->id }}"></label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>{{ $course->course->name }}</td>
                                                        <td>{{ $course->course->name }}</td>
                                                        <td>
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <a href="projects-view.html" class="avatar-text avatar-md">
                                                                    <i class="feather feather-eye"></i>
                                                                </a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0)"
                                                                        class="avatar-text avatar-md"
                                                                        data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                        <i class="feather feather-more-horizontal"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-target="#editModal{{ $course->id }}"
                                                                                data-bs-toggle="modal">
                                                                                <i class="feather feather-edit-3 me-3"></i>
                                                                                <span>Edit</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-target="#deleteModal{{ $course->id }}"
                                                                                data-bs-toggle="modal">
                                                                                <i
                                                                                    class="feather feather-trash-2 me-3"></i>
                                                                                <span>Delete</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <form action="{{ url('courses') }}" method="POST">
        @csrf
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Mata Kuliah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Nama Mata Kuliah</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Deskripsi</label>
                                <textarea name="description" rows="4" class="form-control"></textarea>
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

    <form id="enrollForm" method="POST">
        @csrf
        <div class="modal fade" id="createModalMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Daftar Mata Kuliah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Nama Mata Kuliah</label>
                                <select name="course_id" id="courseSelect" class="form-select">
                                    <option value="" disabled selected>Pilih Mata Kuliah</option>
                                    @foreach ($datas as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
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


    @foreach ($courses as $course)
        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal fade" id="editModal{{ $course->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Mata Kuliah</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Nama Mata Kuliah</label>
                                    <input type="text" name="name" value="{{ $course->name }}"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Deskripsi</label>
                                    <textarea name="description" rows="4" class="form-control">{{ $course->description }}</textarea>
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

        <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal fade" id="deleteModal{{ $course->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Mata Kuliah</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                <h5>Mata kuliah <span class="text-primary">{{ $course->name }}</span> akan dihapus!
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

    <script>
        document.getElementById('courseSelect').addEventListener('change', function() {
            let courseId = this.value;
            let form = document.getElementById('enrollForm');

            if (courseId) {
                form.action = `/courses/${courseId}/enroll`;
            }
        });
    </script>

@endsection
