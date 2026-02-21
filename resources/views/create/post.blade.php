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

                        <!-- KIRI: Gambar -->
                        <div class="col-md-7 p-0">
                            <form action="/target" class="dropzone" id="my-great-dropzone" style="height: 60vh;"></form>
                        </div>

                        <!-- KANAN: Text -->
                        <div class="col-md-5 d-flex flex-column h-100">

                            <!-- Header -->
                            <div class="p-3 border-bottom fw-bold d-flex align-items-center">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('kaiadmin_lite/examples/demo1/assets/img/jm_denis.jpg') }}"
                                        class="avatar-img rounded-circle">
                                </div>
                                <span class="fw-bold ms-3">Hizrian</span>
                            </div>

                            <!-- Textarea -->
                            <div class="flex-grow-1 d-flex p-3">
                                <textarea rows="15" class="form-control border-0 shadow-none h-100" placeholder="Write a caption..."
                                    style="resize:none"></textarea>
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

@push('scripts')
    <script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/plugin/dropzone/dropzone.min.js') }}"></script>

    <script>
        Dropzone.options.myGreatDropzone = { // camelized version of the `id`
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        };
    </script>
@endpush
