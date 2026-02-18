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
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
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
                                            <a href="javascript:void(0);" class="">{{ $discussion->replies->count() }}
                                                Komentar
                                            </a>
                                        </div>
                                    @endforeach
                                    <hr class="border-dashed my-4">
                                    <div id="reply-container">
                                        @forelse ($replies as $item)
                                            <div class="mb-4">
                                                <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                                                    <span>{{ $item->user->name }}</span>
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
                                    </div>
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

    <script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            var pusher = new Pusher("{{ env('REVERB_APP_KEY') }}", {
                cluster: "",
                enabledTransports: ['ws', 'wss'],
                forceTLS: "{{ env('REVERB_SCHEME') }}" === 'https',
                wsHost: "{{ env('REVERB_HOST') }}",
                wsPort: {{ env('REVERB_PORT') }},
                wssPort: {{ env('REVERB_PORT') }},
                authEndpoint: '/broadcasting/auth',
                auth: {
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                }
            });

            var channel = pusher.subscribe("private-discussions.{{ $discussion->id }}");

            channel.bind("ReplyCreated", function(e) {
                const container = document.getElementById("reply-container");

                const html = `
        <div class="mb-4">
            <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                <span>${e.user.name}</span>
                <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                <span class="fs-10 text-uppercase text-muted d-none d-sm-block">${e.created_at}</span>
            </a>
            <div class="d-flex align-items-center">
                <p class="p-3 fs-12 bg-gray-200 rounded mb-0">${e.content}</p>
            </div>
        </div>`;
                container.insertAdjacentHTML("afterbegin", html);
            });

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
                            this.reset();
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

        });
    </script>
@endsection
