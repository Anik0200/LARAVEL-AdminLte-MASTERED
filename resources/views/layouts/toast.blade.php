@if (session('success'))
    <script>
        Swal.fire({
            icon: "success",
            title: "success",
            text: "{{ session('success') }}",
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: "error",
            title: "error",
            text: "{{ session('error') }}",
        });
    </script>
@endif
