<script>
    function disableSubmitButton(form) {
        const button = form.querySelector('button[type="submit"]');
        if (button) {
            button.disabled = true;
            button.innerHTML = 'Loading...';
        }
    }
</script>

<script>
    $(document).ready(function() {
        $('.select2').select2({
            theme: "bootstrap"
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.datetimepicker').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
        });
        $('.datepicker').datetimepicker({
            format: 'YYYY-MM-DD',
        });
        $('.timepicker').datetimepicker({
            format: 'HH:mm:ss',
        });
    });
</script>
