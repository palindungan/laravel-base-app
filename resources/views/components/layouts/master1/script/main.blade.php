<!--   Core JS Files   -->
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/core/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/core/bootstrap.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}">
</script>

<!-- Chart JS -->
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/plugin/chart.js/chart.min.js') }}"></script>

<!-- jQuery Sparkline -->
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}">
</script>

<!-- Chart Circle -->
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/plugin/datatables/datatables.min.js') }}"></script>

<!-- Bootstrap Notify -->
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}">
</script>

<!-- jQuery Vector Maps -->
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/plugin/jsvectormap/world.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

<!-- Kaiadmin JS -->
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/kaiadmin.min.js') }}"></script>

<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/plugin/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/plugin/moment/moment.min.js') }}"></script>
<script src="{{ asset('kaiadmin_lite/examples/demo1/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js') }}">
</script>

@include('components.layouts.master1.script.form')

@stack('scripts')

<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    $.ajaxSetup({
        xhrFields: {
            withCredentials: true
        },
        headers: {
            'X-XSRF-TOKEN': decodeURIComponent(
                document.cookie
                .split('; ')
                .find(row => row.startsWith('XSRF-TOKEN='))
                ?.split('=')[1] || ''
            )
        }
    });

    function getCsrfCookie(callback) {
        $.ajax({
            url: "{{ url('/sanctum/csrf-cookie') }}",
            type: "GET",
            xhrFields: {
                withCredentials: true
            },
            success: function() {
                callback();
            }
        });
    }
</script>
