<meta name="csrf-token" content="{{ csrf_token() }}">

<script>

    $('#ajaxloader_country').hide();
    $('#ajaxloader_university').hide();


    $('#country_id').change(function () {

    var country_id = $('#country_id').val();
    var _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({

        url: '{{ route('getUniversityByCountryId') }}',
        type: 'GET',
        data: {
            'country_id': country_id,
            '_token':_token
        },
        success: function ($data) {
            $('#ajaxloader_country').hide();
            $.each($data ,function (key,value) {
               $('#university_id').append('<option value="'+ value['id']+'" >'+ value.university_trans[0]['name'] +'</option>');
           });
        },
        error: function () {
            alert('fail');

        },
        beforeSend: function () {
            $('#ajaxloader_country').show();

        }

    });
});


</script>

<script>
    // get University By Faculty Id
    $('#university_id').change(function () {

        var university_id = $('#university_id').val();
        var _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: '{{ route('getFacultyByUniversityId') }}',
            type: 'GET',
            data: {
                'university_id': university_id,
                '_token':_token
            },
            success: function ($data) {
                $('#ajaxloader_university').hide();

                $.each($data ,function (key,value) {
                    $('#faculty_id').append('<option value="'+ value['id']+'" >'+ value.faculty_trans[0]['name'] +'</option>');
                });
            },
            error: function () {
                alert('fail');

            },
            beforeSend: function () {
                $('#ajaxloader_university').show();

            }

        });
    });


</script>


