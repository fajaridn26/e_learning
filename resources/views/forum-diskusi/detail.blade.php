@extends('layouts.app')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Detail Diskusi</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Detail Diskusi</li>
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
                            <div class="card-body">
                                <div class="task-comment pb-4">
                                    @foreach ($discussions as $discussion)
                                        <div class="mb-2 d-flex align-items-center justify-content-between">
                                            <div>
                                                <h5>Mata Kuliah <span
                                                        class="text-primary">{{ $discussion->course->name }}</span>
                                                </h5>
                                                <p class="fs-12 text-muted mb-0">{{ $discussion->content }}
                                                </p>
                                            </div>
                                            <a href="javascript:void(0);"
                                                class="">{{ $discussion->replies->count() }}
                                                Komentar
                                            </a>
                                        </div>
                                    @endforeach
                                    <hr class="border-dashed my-4">
                                    <!--! BEGIN: comment !-->
                                    {{-- <div class="d-flex mb-4"> --}}
                                    {{-- <div class="avatar-image me-3">
                                            <a href="javascript:void(0);">
                                                <img src="assets/images/avatar/1.png" class="img-fluid" alt="">
                                            </a>
                                        </div> --}}
                                    @forelse ($replies as $item)
                                        <div class="mb-4">
                                            <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                                                <span>{{ $item->users->name }}</span>
                                                <span
                                                    class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                                                <span
                                                    class="fs-10 text-uppercase text-muted d-none d-sm-block">{{ $item->created_at->locale('id')->diffForHumans() }}</span>
                                            </a>
                                            <div class="d-flex align-items-center">
                                                <p class="p-3 fs-12 bg-gray-200 rounded mb-0">{{ $item->content }}</p>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="d-flex justify-content-center">
                                            <p>Belum ada komentar</p>
                                        </div>
                                    @endforelse
                                    {{-- </div> --}}
                                </div>
                                <form class="commentForm" data-discussion-id="{{ $discussion->id }}">
                                    <div class="input-group mb-4">
                                        <input type="text" name="content" class="form-control"
                                            placeholder="Your comment..." aria-describedby="suffixId">
                                        <button type="submit" class="input-group-text">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.querySelectorAll(".commentForm").forEach(form => {
            form.addEventListener("submit", function(e) {
                e.preventDefault();

                const discussionId = this.dataset.discussionId;

                fetch(`/api/discussions/${discussionId}/replies`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': 'Bearer ' + localStorage.getItem('token'),
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            content: this.content.value
                        })
                    })
                    .then(async res => {
                        if (res.status === 401) throw new Error("UNAUTHORIZED");
                        if (!res.ok) {
                            const err = await res.json();
                            throw new Error(err.message || "Terjadi kesalahan");
                        }
                        return res.json();
                    })
                    .then(data => {
                        alert(data.message);
                        this.reset();
                        location.reload();
                    })
                    .catch(err => {
                        console.log(err);
                        if (err.message === "UNAUTHORIZED") {
                            alert("Session habis, silakan login ulang");
                            window.location.href = "/login";
                        } else {
                            alert(err.message);
                        }
                    });
            });
        });
    </script>
@endsection
