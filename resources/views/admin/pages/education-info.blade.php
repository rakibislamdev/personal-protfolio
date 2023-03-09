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
                <div class="col-12 col-sm-12 mb-1">
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
<div class="modal fade" id="update-edu-modal" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Update Education Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mt-2 pt-50" id="update_edu_form" method="POST" action="{{ route('admin.education-info.update') }}">
                    @csrf
                    <input type="hidden" name="update_id" id="update-id">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label" for="course-name">Course Name</label>
                            <input type="text" name="update_course_name" value="" class="form-control" id="update-course-name" name="name" />
                        </div>
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label" for="email">Institute Name</label>
                            <input type="text" class="form-control" value="" id="update-institute-name" name="update_institute_name" />
                        </div>
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label" for="start-date">Start Date</label>
                            <input type="text" id="update-start-date" name="update_start_date" class="date form-control flatpickr-basic"
                                placeholder="YYYY-MM-DD" />
                        </div>
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label" for="end-date">End Date</label>
                            <input type="text" id="update-end-date" name="update_end_date" class="date form-control flatpickr-basic"
                                placeholder="YYYY-MM-DD" />
                        </div>
                        <div class="col-12 col-sm-12 mb-1">
                            <label class="form-label" for="course-details">Details</label>
                            <textarea name="update_course_details" class="form-control" id="update-course-details" rows="3"
                                placeholder="Textarea"></textarea>
                        </div>

                        <div class="col-12 text-center">
                            <button class="btn btn-success w-50" type="button" id="update_info_btn" onclick="_run(this)" data-el="fg"
                                data-form="update_edu_form" data-callback="updateInfoCallback" data-btnid="update_info_btn">
                                <span class="align-middle d-sm-inline-block d-none">Update</span>
                            </button>
                        </div>
                    </div>
                </form>
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
                    var startDate = new Date(info.start_date);
                    var startYear = startDate.getFullYear();
                    var endDate = new Date(info.end_date);
                    var endYear = endDate.getFullYear();
                    var card = $('<div class="col-12 col-md-4 mb-4 mb-md-0">' +
                        '<div class="w-100">' +
                            '<div class="card">' +
                                '<div class="card-body">' +
                                    '<div class="d-flex justify-content-between">' +
                                        '<div>' +
                                            '<span class="badge bg-light-primary">' + startYear + ' - ' + endYear + '</span>' +
                                        '</div>' +
                                        '<div>' +
                                            '<button type="button" data-id="' + info.id + '" id="edu_edit_btn" class="btn btn-icon btn-icon rounded-circle btn-flat-success" data-bs-toggle="modal" data-bs-target="#update-edu-modal"><i data-feather="edit"></i></button>' +
                                            '<button type="button" data-id="' + info.id + '" id="edu_delete_btn" class="btn btn-icon btn-icon rounded-circle btn-flat-danger"><i data-feather="trash-2"></i></button>' +
                                        '</div>' +
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

        $.ajax({
            url: "{{ route('admin.education-info.edit') }}",
            type: "GET",
            data: {
                id: id
            },
            success: function(data) {
                // console.log(data);
                $('#update-id').val(data.id);
                $('#update-course-name').val(data.course_name);
                $('#update-institute-name').val(data.institute_name);
                $('#update-start-date').val(data.start_date);
                $('#update-end-date').val(data.end_date);
                $('#update-course-details').val(data.course_details);
            }
        });

    });

    // education update callback
    function updateInfoCallback(data) {
        if (data.status == true) {
            notify('success', data.message, 'Educational Info');
            $('#update_edu_form').trigger('reset');
            $('#update-edu-modal').modal('hide');
            realtimeEducationInfo();
        } else {
            notify('error', data.message, 'Educational Info');
            $.validator('update_edu_form', data.errors);
        }
    }

// delete education info
    $(document).on('click', '#edu_delete_btn', function() {
        var id = $(this).attr('data-id');

        Swal.fire({
            title: 'Are you sure?',
            text: "You want delete this information!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            customClass: {
                confirmButton: 'btn btn-primary',
                cancelButton: 'btn btn-outline-danger ms-1'
            },
            buttonsStyling: false
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    url: "{{ route('admin.education-info.delete') }}",
                    type: "GET",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        // console.log(data);
                        if (data.status == true) {
                            notify('success', data.message, 'Educational Info');
                            realtimeEducationInfo();
                        } else {
                            notify('error', data.message, 'Educational Info');
                        }
                    }
                });
            }
        });
    });



</script>

@endsection
