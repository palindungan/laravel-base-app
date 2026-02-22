@extends('components.layouts.master1.main')

@section('sidebar.explore.is_active', 'active')

@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-4">
                <button type="button" class="btn p-0 border-0 bg-transparent" data-bs-toggle="modal"
                    data-bs-target="#instagramModal">
                    <div class="card card-profile card-post card-round insta-hover">
                        <div class="img-wrapper">
                            <img src="{{ asset('kaiadmin_lite/examples/demo1/assets/img/blogpost.jpg') }}"
                                alt="Card image cap">

                            <div class="hover-info">
                                <div class="hover-stats">
                                    <span>❤️ 4000</span>
                                    <span>💬 2000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>

    @include('explore.show')
    @include('create.post')
@endsection

@push('styles')
    @include('explore.style')
@endpush
