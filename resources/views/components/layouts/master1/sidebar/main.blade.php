<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">

            {{-- <a href="" class="logo">
                <img src="{{ asset('kaiadmin_lite/examples/demo1/assets/img/kaiadmin/logo_light.svg') }}"
                    alt="navbar brand" class="navbar-brand" height="20">
            </a> --}}
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>

        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item @yield('sidebar.explore.is_active')">
                    <a href="{{ route('explore.index') }}">
                        <i class="far fa-compass"></i>
                        <p>Explore</p>
                    </a>
                </li>
                <li class="nav-item @yield('sidebar.create.is_active')">
                    <a href="#" role="button" onclick="modal_create_post_show()">
                        <i class="fas fa-plus"></i>
                        <p>Create</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->

@push('scripts')
    <script>
        function modal_create_post_show() {
            $('html').removeClass('nav_open');

            $('#modal-create-post').modal('show');
        }
    </script>
@endpush
