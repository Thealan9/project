@if (session('success'))
<div class="alert alert-success" role="alert" id="success-alert">
    {{ session('success') }}
</div>
@endif

@if (session('nosuccess'))
<div class="alert alert-danger" role="alert" id="error-alert">
    {{ session('nosuccess') }}
</div>
@endif

<script>
    setTimeout(() => {
        let successAlert = document.getElementById('success-alert');
        let errorAlert = document.getElementById('error-alert');

        [successAlert, errorAlert].forEach(alert => {
            if (alert) {
                alert.style.transition = "opacity 0.5s";
                alert.style.opacity = "0";
                setTimeout(() => alert.remove(), 500);
            }
        });
    }, 2000);
</script>
