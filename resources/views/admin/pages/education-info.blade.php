@extends('layouts.admin-layout')
@section('title', 'Education Info')

@section('vendor-css')
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin-assets/app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin-assets/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection

@section('page-css')
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin-assets/app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin-assets/app-assets/css/plugins/forms/pickers/form-pickadate.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css"> --}}
@endsection

@section('content')
<!-- profile -->
<div class="card">
    <div class="card-header border-bottom">
        <h4 class="card-title">Educational Details</h4>
    </div>
    <div class="card-body">
        <!-- form -->
        <form class="mt-2 pt-50" id="educational_info_form" method="POST"
            action="{{ route('admin.education-info.store') }}">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="course-name">Course Name</label>
                    <input type="text" name="course_name" value="" class="form-control" id="course-name" name="name" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="email">Institute Name</label>
                    <input type="text" class="form-control" value="" id="institute_name" name="institute_name" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="start-date">Start Date</label>
                    <input type="text" id="start-date" name="start_date" class="date form-control flatpickr-basic"
                        placeholder="YYYY-MM-DD" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="end-date">End Date</label>
                    <input type="text" id="end-date" name="end_date" class="date form-control flatpickr-basic"
                        placeholder="YYYY-MM-DD" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="course-details">Details</label>
                    <textarea name="course_details" class="form-control" id="course_details" rows="3"
                        placeholder="Textarea"></textarea>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-success w-50" type="button" id="edu_info_btn" onclick="_run(this)"
                        data-el="fg" data-form="educational_info_form" data-callback="educationalInfoCallback"
                        data-btnid="edu_info_btn">
                        <span class="align-middle d-sm-inline-block d-none">Submit</span>
                    </button>
                </div>
            </div>
        </form>
        <!--/ form -->
    </div>

</div>
{{-- <div class="item-features">
    <div class="row text-center">
        @if ($education_infos->count() == 0)
        <div class="col-12">
            <h4 class="text-center">No Educational Info Found</h4>
        </div>
        @else
        @foreach ($education_infos as $education_info)
        <div class="col-12 col-md-4 mb-4 mb-md-0">
            <div class="w-100">
                <div class="card">
                    <div class="card-body">
                        <div class="text-end">
                            <i data-feather='edit'></i>
                            <i data-feather='trash-2'></i>
                        </div>
                        <i class="cus-feather" data-feather='book-open'></i>
                        <h4 class="mt-2 mb-1">{{ $education_info->course_name }}</h4>
                        <p class="card-text">{{ $education_info->institute_name }}</p>
                        <p>{{ $education_info->course_details }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div> --}}
<div class="item-features">
    <div class="row text-center education-info-block">

    </div>
</div>

{{-- modal section --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Vertically Centered</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Croissant jelly-o halvah chocolate sesame snaps. Brownie caramels candy canes chocolate cake
                    marshmallow icing lollipop I love. Gummies macaroon donut caramels biscuit topping danish.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Accept</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-vendor-js')
<script src="{{ asset('admin-assets/app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
<script src="{{ asset('admin-assets/app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
<script src="{{ asset('admin-assets/app-assets/vendors/js/pickers/pickadate/picker.time.js') }}"></script>
<script src="{{ asset('admin-assets/app-assets/vendors/js/pickers/pickadate/legacy.js') }}"></script>
<script src="{{ asset('admin-assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('page-js')
<script src="{{ asset('admin-assets/app-assets/js/scripts/forms/form-wizard.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>

<script>
    // date picker
    $('.date').flatpickr();
    // feather icon
    // feather.replace();
     // realtime time education info show
    function realtimeEducationInfo() {
        $.ajax({
            url: "{{ route('admin.education-info.get') }}",
            type: "GET",
            success: function(data) {
                // console.log(data);
                // alert('kaj hoice');

                // Assuming `data` is an array of education info objects
                var container = $('.education-info-block');
                container.empty(); // Clear any previous content

                // Loop through the data and create a new card for each education info object
                data.forEach(function(info) {
                    var card = $('<div class="col-12 col-md-4 mb-4 mb-md-0">' +
                        '<div class="w-100">' +
                            '<div class="card">' +
                                '<div class="card-body">' +
                                    '<div class="text-end">' +
                                        '<button type="button" data-id="' + info.id + '" id="edu_edit_btn" class="btn btn-icon btn-icon rounded-circle btn-flat-success" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i data-feather="edit"></i></button>' +
                                        '<button type="button" data-id="' + info.id + '" id="edu_delete_btn" class="btn btn-icon btn-icon rounded-circle btn-flat-danger"><i data-feather="trash-2"></i></button>' +
                                        '</div>' +
                                    '<i class="cus-feather" data-feather="book-open"></i>' +
                                    '<h4 class="mt-2 mb-1">' + info.course_name + '</h4>' +
                                    '<p class="card-text">' + info.institute_name + '</p>' +
                                    '<p>' + info.course_details + '</p>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>');

                        container.append(card);
                        feather.replace();
                    });
            }
        });
    }

    realtimeEducationInfo();
    // educational info callback
    function educationalInfoCallback(data) {
        if (data.status == true) {
            notify('success', data.message, 'Educational Info');
            $('#educational_info_form').trigger('reset');
            // window.location.reload();
            realtimeEducationInfo();
        } else {
            notify('error', data.message, 'Educational Info');
            $.validator('educational_info_form', data.errors);
        }
    }

    // education edit

    $(document).on('click', '#edu_edit_btn', function() {
        var id = $(this).attr('data-id');

    })





</script>

@endsection
