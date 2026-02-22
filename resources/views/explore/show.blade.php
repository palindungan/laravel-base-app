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
                            <div class="flex-grow-1 overflow-auto p-3" id="post_comment_box">
                                {{-- <div class="mb-3 d-flex">
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
                                @endfor --}}
                            </div>

                            <!-- ACTION BAR -->
                            <div class="border-top p-2 pt-3">
                                <div class="d-flex align-items-center gap-3 action-bar">

                                    <!-- Like -->
                                    <button class="btn btn-link p-0 like-btn" type="button" onclick="modal_explore_show_like()">
                                        <i class="far fa-heart fa-lg"></i>
                                    </button>

                                    <!-- Comment -->
                                    <label class="btn btn-link p-0 comment-btn" for="post_comment_text" role="button">
                                        <i class="far fa-comment fa-lg"></i>
                                    </label>

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
                                    <input type="text" class="form-control border-0" id="post_comment_text"
                                        placeholder="Add a comment..."
                                        onkeydown="if(event.key === 'Enter') post_comment_store()">
                                    <button class="btn btn-primary" onclick="post_comment_store()">Post</button>
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
        var modal_explore_show_post_id = null;

        function modal_explore_show(post_id) {
            modal_explore_show_post_id = post_id;

            modal_explore_show_is_liked = false

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
                    let commentsHtml = `
                        <div class="mb-3 d-flex">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/profile.png') }}" class="avatar-img rounded-circle">
                            </div>
                            <div class="ms-3 comment-text">
                                <strong>${data.user.name}</strong>
                                <span class="ms-1">${data.caption}</span>
                            </div>
                        </div>
                    `;

                    data.post_comments.forEach(comment => {
                        commentsHtml += `
                            <div class="mb-3 d-flex">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('assets/img/profile.png') }}" class="avatar-img rounded-circle">
                                </div>
                                <div class="ms-3 comment-text">
                                    <strong>${comment.user.name}</strong>
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
                    modal_explore_show_is_liked = data.is_liked_by_current_user;

                    /* =========================
                       DATE
                    ========================= */
                    $('.post-date').text(data.created_at_formatted);
                },
                error: function(xhr) {
                    console.log(xhr.status, xhr.responseText);
                }
            });

            $('#modal-explore-show').modal('show');
        }

        function modal_explore_show_reload_comment(post_id) {
            modal_explore_show_post_id = post_id;

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

                    /* =========================
                       COMMENTS
                    ========================= */
                    let commentsHtml = `
                        <div class="mb-3 d-flex">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/profile.png') }}" class="avatar-img rounded-circle">
                            </div>
                            <div class="ms-3 comment-text">
                                <strong>${data.user.name}</strong>
                                <span class="ms-1">${data.caption}</span>
                            </div>
                        </div>
                    `;

                    data.post_comments.forEach(comment => {
                        commentsHtml += `
                            <div class="mb-3 d-flex">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('assets/img/profile.png') }}" class="avatar-img rounded-circle">
                                </div>
                                <div class="ms-3 comment-text">
                                    <strong>${comment.user.name}</strong>
                                    <span class="ms-1">${comment.text}</span>
                                </div>
                            </div>
                        `;
                    });

                    $('.flex-grow-1.overflow-auto').html(commentsHtml);

                    $(`#post-comments-${data.id}`).text(data.post_comments_count);

                    let box = $('#post_comment_box');
                    box.scrollTop(box[0].scrollHeight);
                },
                error: function(xhr) {
                    console.log(xhr.status, xhr.responseText);
                }
            });
        }

        function post_comment_store() {
            const commentText = $('#post_comment_text').val();
            if (!commentText) {
                alert('Comment cannot be empty');
                return;
            }

            getCsrfCookie(function() {
                $.ajax({
                    url: "{{ url('/api/v1/post_comments') }}",
                    type: "POST",
                    xhrFields: {
                        withCredentials: true
                    },
                    data: {
                        post_id: modal_explore_show_post_id,
                        text: commentText
                    },
                    success: function(res) {
                        console.log('================/api/v1/post_comments (POST)================');
                        console.log(res);
                        console.log('=============================================');

                        // Clear input
                        $('#post_comment_text').val('');

                        // Refresh comments
                        modal_explore_show_reload_comment(modal_explore_show_post_id);
                    },
                    error: function(xhr) {
                        console.log(xhr.status, xhr.responseText);
                    }
                });
            });
        }

        var modal_explore_show_is_liked = false;

        function modal_explore_show_like() {
            const post_id = modal_explore_show_post_id;
            const status = modal_explore_show_is_liked ? 'unlike' : 'like';

            getCsrfCookie(function() {
                $.ajax({
                    url: "{{ url('/api/v1/post_likes') }}",
                    type: "POST",
                    xhrFields: {
                        withCredentials: true
                    },
                    data: {
                        post_id: post_id,
                        status: status
                    },
                    success: function(res) {
                        console.log('================/api/v1/post_likes (POST)================');
                        console.log(res);
                        console.log('=============================================');

                        // Toggle like status
                        modal_explore_show_is_liked = !modal_explore_show_is_liked;

                        // Refresh like count
                        $.ajax({
                            url: "{{ url('/api/v1/posts') }}/" + post_id,
                            type: "GET",
                            xhrFields: {
                                withCredentials: true
                            },
                            success: function(res) {
                                console.log('================/api/v1/posts/' + post_id +
                                    '================');
                                console.log(res);
                                console.log(
                                    '=============================================');

                                // todo: render data
                                const data = res.data;

                                $(`#post-likes-${data.id}`).text(data
                                    .post_likes_count);

                                $('#likeCount').text(data.post_likes_count);
                            }
                        });
                    },
                    error: function(xhr) {
                        console.log(xhr.status, xhr.responseText);
                    }
                });
            });
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
            color: #262626 !important;
            transition: 0.15s;
        }

        .action-bar i {
            font-size: 22px;
        }
    </style>
@endpush
