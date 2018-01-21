<script src="{{asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js')}}"
        type="text/javascript">
</script>
<script src="{{asset('assets/pages/scripts/ui-sweetalert.min.js')}}" type="text/javascript">
</script>

@if(session()->has('success'))
    <script>
        swal("{{ trans('main.done') }} ", "{{ trans('main.success_message') }}", "success");
    </script>
@endif

@if(session()->has('error'))
    <script>
        swal("error", "You clicked the button!", "error");
    </script>
@endif
