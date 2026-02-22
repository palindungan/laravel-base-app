<!-- Modal create-post -->
<div class="modal fade" id="modal-create-post" tabindex="-1" role="dialog" aria-labelledby="modal-create-post"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <form id="postForm" action="{{ route('web_posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_form_token" value="{{ Str::uuid() }}">
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
                                <div class="dropzone h-100" id="my-great-dropzone" style="min-height:60vh;"></div>
                            </div>

                            <!-- KANAN: Text -->
                            <div class="col-md-5 d-flex flex-column h-100">

                                <!-- Header -->
                                <div class="p-3 border-bottom fw-bold d-flex align-items-center">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('assets/img/profile.png') }}"
                                            class="avatar-img rounded-circle">
                                    </div>
                                    <span class="fw-bold ms-3">{{ Auth::user()->name }}</span>
                                </div>

                                <!-- Textarea -->
                                <div class="flex-grow-1 d-flex p-3">
                                    <textarea name="caption" rows="15" class="form-control border-0 shadow-none h-100" placeholder="Write a caption..."
                                        style="resize:none"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnShare" class="btn btn-primary">Share</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/plugin/dropzone/dropzone.min.js') }}"></script>

    <script>
        Dropzone.autoDiscover = false;

        const dz = new Dropzone("#my-great-dropzone", {
            url: "{{ route('web_posts.store') }}",
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 10,
            maxFiles: 10,
            paramName: "files",
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value
            }
        });

        document.getElementById('btnShare').addEventListener('click', function() {
            dz.processQueue();
        });

        dz.on("sendingmultiple", function(files, xhr, formData) {
            formData.append("caption", document.querySelector("textarea[name=caption]").value);
            formData.append("user_id", {{ auth()->id() }});
            formData.append("_form_token", document.querySelector("input[name=_form_token]").value);
        });

        dz.on("successmultiple", function(files, response) {
            console.log(response);

            dz.removeAllFiles();
            document.querySelector("textarea[name=caption]").value = "";

            post_index();

            $('#modal-create-post').modal('hide');
            alert("Post created successfully!");
        });

        dz.on("errormultiple", function(files, response) {
            console.log(response);
        });
    </script>
@endpush
