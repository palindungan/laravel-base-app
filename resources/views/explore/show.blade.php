<!-- Modal -->
<div class="modal fade" id="instagramModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content position-relative">

            <!-- Close button -->
            <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"
                aria-label="Close" style="z-index:1056;"></button>

            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row g-0">

                        <!-- KIRI: Gambar -->
                        <div class="col-md-7 bg-dark p-0" style="max-height: 90vh;">
                            <div class="img-wrapper h-100 d-flex justify-content-center align-items-center">
                                <img src="{{ asset('kaiadmin_lite/examples/demo1/assets/img/blogpost.jpg') }}"
                                    class="img-fluid object-fit-cover" alt="Konten Gambar" />
                            </div>
                        </div>

                        <!-- KANAN: Komentar -->
                        <div class="col-md-5 d-flex flex-column" style="max-height: 90vh;">

                            <!-- Header -->
                            <div class="p-3 border-bottom fw-bold">
                                <div class="avatar">
                                    <img src="{{ asset('kaiadmin_lite/examples/demo1/assets/img/jm_denis.jpg') }}"
                                        alt="..." class="avatar-img rounded-circle">
                                </div>
                                <span class="profile-username">
                                    <span class="fw-bold ms-2">Hizrian</span>
                                </span>
                            </div>

                            <!-- List komentar (scroll) -->
                            <div class="flex-grow-1 overflow-auto p-3">
                                <div class="mb-3 d-flex align-items-start">
                                    <div class="avatar">
                                        <img src="{{ asset('kaiadmin_lite/examples/demo1/assets/img/jm_denis.jpg') }}"
                                            alt="..." class="avatar-img rounded-circle">
                                    </div>
                                    <div class="ms-3">
                                        <strong>User1</strong>
                                        <span>Terima kasih!</span>
                                    </div>
                                </div>
                                @for ($i = 0; $i < 30; $i++)
                                    <div class="mb-3 d-flex align-items-start">
                                        <div class="avatar">
                                            <img src="{{ asset('kaiadmin_lite/examples/demo1/assets/img/jm_denis.jpg') }}"
                                                alt="..." class="avatar-img rounded-circle">
                                        </div>
                                        <div class="ms-3">
                                            <strong>User2</strong>
                                            <span>Sangat bagus, saya suka sekali dengan foto ini!</span>
                                        </div>
                                    </div>
                                @endfor
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
