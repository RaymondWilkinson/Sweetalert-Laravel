@if(Session::has('flash_message'))
    <script>
        swal({
            title: "{{ Session::get('flash_message.title') }}",
            text: "{{ Session::get('flash_message.message') }}",
            type: "{{ Session::get('flash_message.level') }}",
            timer: 2200,
            showConfirmButton: false
        });
    </script>
@endif

@if(Session::has('flash_message_overlay'))
    <script>
        swal({
            title: "{{ Session::get('flash_message_overlay.title') }}",
            text: "{{ Session::get('flash_message_overlay.message') }}",
            type: "{{ Session::get('flash_message_overlay.level') }}",
            confirmButtonText: "Okay",
            html: true
        });
    </script>
@endif