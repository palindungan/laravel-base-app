<!-- Modal create-post -->
<div class="modal fade" id="modal-create-post" tabindex="-1" role="dialog" aria-labelledby="modal-create-post"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fw-bold" id="modal-title-create-post">
                    Create New Post
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Share</button>
            </div>
        </div>
    </div>
</div>
