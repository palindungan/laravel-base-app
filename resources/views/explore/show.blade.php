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
                        <div class="col-md-7 d-flex align-items-center justify-content-center bg-dark">
                            <img src="{{ asset('kaiadmin_lite/examples/demo1/assets/img/blogpost.jpg') }}"
                                class="img-fluid" alt="Post Image">
                        </div>

                        <!-- KANAN: Komentar -->
                        <div class="col-md-5 d-flex flex-column" style="max-height: 90vh;">

                            <!-- Header -->
                            <div class="p-3 border-bottom fw-bold">
                                Komentar
                            </div>

                            <!-- List komentar (scroll) -->
                            <div class="flex-grow-1 overflow-auto p-3">
                                <div class="mb-3">
                                    <strong>User1</strong>
                                    <div>Wow keren banget!</div>
                                </div>
                                @for ($i = 0; $i < 30; $i++)
                                    <div class="mb-3">
                                        <strong>User2</strong>
                                        <div>Bagus!</div>
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
