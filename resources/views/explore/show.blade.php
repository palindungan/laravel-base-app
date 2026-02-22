<!-- Modal -->
<div class="modal fade" id="modal-explore-show" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content position-relative">

            <!-- Close button -->
            <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"
                aria-label="Close" style="z-index:1056;"></button>

            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row g-0">

                        <!-- KIRI: Carousel Gambar (Bootstrap default) -->
                        <div class="col-md-7 bg-dark p-0" style="max-height: 90vh;">
                            <div id="postCarousel" class="carousel slide h-100" data-bs-touch="true">

                                <!-- Indicators -->
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#postCarousel" data-bs-slide-to="0"
                                        class="active"></button>
                                    <button type="button" data-bs-target="#postCarousel" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#postCarousel" data-bs-slide-to="2"></button>
                                </div>

                                <!-- Wrapper gambar -->
                                <div class="carousel-inner h-100">
                                    <div class="carousel-item active h-100">
                                        <img src="{{ asset('kaiadmin_lite/examples/demo1/assets/img/blogpost.jpg') }}"
                                            class="d-block w-100 h-100 object-fit-cover" alt="Gambar 1">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="{{ asset('kaiadmin_lite/examples/demo1/assets/img/bg-404.jpeg') }}"
                                            class="d-block w-100 h-100 object-fit-cover" alt="Gambar 2">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="{{ asset('kaiadmin_lite/examples/demo1/assets/img/jm_denis.jpg') }}"
                                            class="d-block w-100 h-100 object-fit-cover" alt="Gambar 3">
                                    </div>
                                </div>

                                <!-- Controls -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#postCarousel"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#postCarousel"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>

                            </div>
                        </div>

                        <!-- KANAN: Komentar -->
                        <div class="col-md-5 d-flex flex-column" style="max-height: 90vh;">

                            <!-- Header -->
                            <div class="p-3 border-bottom fw-bold d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('kaiadmin_lite/examples/demo1/assets/img/jm_denis.jpg') }}"
                                        alt="..." class="avatar-img rounded-circle">
                                </div>
                                <span class="fw-bold ms-3">Hizrian</span>
                            </div>

                            <!-- List komentar (scroll) -->
                            <div class="flex-grow-1 overflow-auto p-3">
                                <div class="mb-3 d-flex">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('kaiadmin_lite/examples/demo1/assets/img/jm_denis.jpg') }}"
                                            alt="..." class="avatar-img rounded-circle">
                                    </div>

                                    <div class="ms-3 comment-text">
                                        <strong>User1</strong>
                                        <span class="ms-1">
                                            Terima kasih!
                                        </span>
                                    </div>
                                </div>
                                @for ($i = 0; $i < 30; $i++)
                                    <div class="mb-3 d-flex">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ asset('kaiadmin_lite/examples/demo1/assets/img/jm_denis.jpg') }}"
                                                alt="..." class="avatar-img rounded-circle">
                                        </div>

                                        <div class="ms-3 comment-text">
                                            <strong>User2</strong>
                                            <span class="ms-1">
                                                Sangat bagus, saya suka sekali dengan foto ini yang luar biasa indah dan
                                                penuh makna Sangat bagus, saya suka sekali dengan foto ini yang luar
                                                biasa indah dan
                                                penuh makna
                                                Sangat bagus, saya suka sekali dengan foto ini yang luar biasa indah dan
                                                penuh makna
                                            </span>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <!-- ACTION BAR -->
                            <div class="border-top p-2 pt-3">
                                <div class="d-flex align-items-center gap-3 action-bar">

                                    <!-- Like -->
                                    <button class="btn btn-link p-0 like-btn" type="button">
                                        <i class="far fa-heart fa-lg"></i>
                                    </button>

                                    <!-- Comment -->
                                    <button class="btn btn-link p-0 comment-btn" type="button">
                                        <i class="far fa-comment fa-lg"></i>
                                    </button>

                                </div>

                                <div class="like-count mt-1">
                                    <strong><span id="likeCount">120</span> likes</strong>
                                </div>

                                <div class="post-date">
                                    2 hari yang lalu
                                </div>
                            </div>

                            <!-- Input komentar -->
                            <div class="border-top p-2">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0"
                                        placeholder="Tambah komentar...">
                                    <button class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function modal_explore_show(post_id) {
            $.ajax({
                url: "{{ url('/api/v1/posts') }}/" + post_id,
                type: "GET",
                xhrFields: {
                    withCredentials: true
                },
                success: function(res) {
                    console.log('================/api/v1/posts/' + post_id + '================');
                    console.log(res);
                    console.log('=============================================');

                    // todo: render data
                    const data = res.data;

                    // Clear
                    $('#postCarousel .carousel-indicators').empty();
                    $('#postCarousel .carousel-inner').empty();
                    $('.flex-grow-1.overflow-auto').empty();

                    /* =========================
                       CAROUSEL
                    ========================= */
                    let indicators = '';
                    let slides = '';

                    data.post_files.forEach((file, index) => {
                        indicators += `
                            <button type="button"
                                data-bs-target="#postCarousel"
                                data-bs-slide-to="${index}"
                                class="${index === 0 ? 'active' : ''}">
                            </button>
                        `;

                        slides += `
                            <div class="carousel-item ${index === 0 ? 'active' : ''} h-100">
                                <img src="${file.file_path_storage}"
                                    class="d-block w-100 h-100 object-fit-cover">
                            </div>
                        `;
                    });

                    $('#postCarousel .carousel-indicators').html(indicators);
                    $('#postCarousel .carousel-inner').html(slides);

                    /* =========================
                       HEADER USER
                    ========================= */
                    $('.col-md-5 .border-bottom').html(`
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('assets/img/profile.png') }}" class="avatar-img rounded-circle">
                        </div>
                        <span class="fw-bold ms-3">${data.user.name}</span>
                    `);

                    /* =========================
                       COMMENTS
                    ========================= */
                    let commentsHtml = '';

                    data.post_comments.forEach(comment => {
                        commentsHtml += `
                            <div class="mb-3 d-flex">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('assets/img/profile.png') }}" class="avatar-img rounded-circle">
                                </div>
                                <div class="ms-3 comment-text">
                                    <strong>User ${comment.user_id}</strong>
                                    <span class="ms-1">${comment.text}</span>
                                </div>
                            </div>
                        `;
                    });

                    $('.flex-grow-1.overflow-auto').html(commentsHtml);

                    /* =========================
                       LIKE COUNT
                    ========================= */
                    $('#likeCount').text(data.post_likes_count);

                    /* =========================
                       DATE
                    ========================= */
                    const createdAt = new Date(data.created_at);
                    const now = new Date();
                    const diffDays = Math.floor((now - createdAt) / (1000 * 60 * 60 * 24));
                    $('.post-date').text(diffDays + ' hari yang lalu');
                },
                error: function(xhr) {
                    console.log(xhr.status, xhr.responseText);
                }
            });

            $('#modal-explore-show').modal('show');
        }
    </script>
@endpush

@push('styles')
    <style>
        .like-btn {
            color: #262626;
            transition: 0.15s;
        }

        .like-btn.liked {
            color: #ed4956;
            transform: scale(1.15);
        }

        .comment-btn {
            color: #262626;
            transition: 0.15s;
        }

        .action-bar i {
            font-size: 22px;
        }
    </style>
@endpush
