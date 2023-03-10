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
{{--
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css"> --}}
@endsection

@section('content')
<!-- profile -->
<div class="card">
    <div class="card-header border-bottom">
        <h4 class="card-title">Experience Details</h4>
    </div>
    <div class="card-body">
        <!-- form -->
        <form class="mt-2 pt-50" id="experience-info-form" method="POST"
            action="{{ route('admin.experience-info.store') }}">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="course-name">Desingnation Name</label>
                    <input type="text" name="designation"  class="form-control" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="email">Company Name</label>
                    <input type="text" class="form-control" name="company_name" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="start-date">Start Date</label>
                    <input type="text" name="start_date" class="date form-control flatpickr-basic"
                        placeholder="YYYY-MM-DD" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="end-date">End Date</label>
                    <input type="text" name="end_date" class="date form-control flatpickr-basic"
                        placeholder="YYYY-MM-DD" />
                </div>
                <div class="col-12 col-sm-12 mb-1">
                    <label class="form-label" for="course-details">Details</label>
                    <textarea name="experience_details" class="form-control" rows="3"
                        placeholder="Write something about your working experience"></textarea>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-success w-50" type="button" id="exp_info_btn" onclick="_run(this)"
                        data-el="fg" data-form="experience-info-form" data-callback="experienceInfoCallback"
                        data-btnid="exp_info_btn">
                        <span class="align-middle d-sm-inline-block d-none">Submit</span>
                    </button>
                </div>
            </div>
        </form>
        <!--/ form -->
    </div>

</div>
<div class="item-features">
    <div class="row text-center experience-info-block">

    </div>
</div>

{{-- modal section --}}
<div class="modal fade" id="update-exp-modal" tabindex="-1" aria-labelledby="updateExperienccModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Update Education Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mt-2 pt-50" id="update-exp-form" method="POST"
                    action="{{ route('admin.experience-info.update') }}">
                    @csrf
                    <input type="hidden" name="id" id="update-id">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label" for="course-name">Designation</label>
                            <input type="text" name="update_designation" value="" id="update-designation" class="form-control" />
                        </div>
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label" for="email">Company Name</label>
                            <input type="text" class="form-control" value="" id="update-company-name"
                                name="update_company_name" />
                        </div>
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label" for="start-date">Start Date</label>
                            <input type="text" id="update-start-date" name="update_start_date"
                                class="date form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                        </div>
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label" for="end-date">End Date</label>
                            <input type="text" id="update-end-date" name="update_end_date"
                                class="date form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                        </div>
                        <div class="col-12 col-sm-12 mb-1">
                            <label class="form-label" for="course-details">Details</label>
                            <textarea name="update_exp_details" class="form-control" id="update-exp-details"
                                rows="3" placeholder="Textarea"></textarea>
                        </div>

                        <div class="col-12 text-center">
                            <button class="btn btn-success w-50" type="button" id="update_exp_btn" onclick="_run(this)"
                                data-el="fg" data-form="update-exp-form" data-callback="updateExperienceInfoCallback"
                                data-btnid="update_exp_btn">
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
    function realtimeExperienceInfo() {
        $.ajax({
            url: "{{ route('admin.experience-info.get') }}",
            type: "GET",
            success: function(data) {

                // Assuming `data` is an array of education info objects
                var container = $('.experience-info-block');
                container.empty(); // Clear any previous content

                // Loop through the data and create a new card for each education info object
                data.forEach(function(info) {
                    var startDate = new Date(info.start_date);
                    var startYear = startDate.getFullYear();
                    if (info.end_date == null) {
                        var endYear = 'Present';
                    } else {
                        var endDate = new Date(info.end_date);
                        var endYear = endDate.getFullYear();
                    }
                    var card = $('<div class="col-12 col-md-4 mb-4 mb-md-0">' +
                        '<div class="w-100">' +
                            '<div class="card">' +
                                '<div class="card-body">' +
                                    '<div class="d-flex justify-content-between">' +
                                        '<div>' +
                                            '<span class="badge bg-light-primary">' + startYear + ' - ' + endYear + '</span>' +
                                        '</div>' +
                                        '<div>' +
                                            '<button type="button" data-id="' + info.id + '" id="exp_edit_btn" class="btn btn-icon btn-icon rounded-circle btn-flat-success" data-bs-toggle="modal" data-bs-target="#update-exp-modal"><i data-feather="edit"></i></button>' +
                                            '<button type="button" data-id="' + info.id + '" id="exp_delete_btn" class="btn btn-icon btn-icon rounded-circle btn-flat-danger"><i data-feather="trash-2"></i></button>' +
                                        '</div>' +
                                        '</div>' +
                                    '<i class="cus-feather" data-feather="book-open"></i>' +
                                    '<h4 class="mt-2 mb-1">' + info.designation + '</h4>' +
                                    '<p class="card-text">' + info.company_name + '</p>' +
                                    '<p>' + info.experience_details + '</p>' +
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

    realtimeExperienceInfo();
    // educational info callback
    function experienceInfoCallback(data) {
        if (data.status == true) {
            notify('success', data.message, 'Experience Info');
            $('#experience-info-form').trigger('reset');
            // window.location.reload();
            realtimeExperienceInfo();
        } else {
            notify('error', data.message, 'Educational Info');
            $.validator('experience-info-form', data.errors);
        }
    }

    // education edit
    $(document).on('click', '#exp_edit_btn', function() {
        var id = $(this).attr('data-id');
        $.ajax({
            url: "{{ route('admin.experience-info.edit') }}",
            type: "GET",
            data: {
                id: id
            },
            success: function(data) {
                // console.log(data);
                $('#update-id').val(data.id);
                $('#update-designation').val(data.designation);
                $('#update-company-name').val(data.company_name);
                $('#update-start-date').val(data.start_date);
                $('#update-end-date').val(data.end_date);
                $('#update-exp-details').val(data.experience_details);
            }
        });

    });

    // education update callback
    function updateExperienceInfoCallback(data) {
        if (data.status == true) {
            notify('success', data.message, 'Experience Info');
            $('#update-exp-form').trigger('reset');
            $('#update-exp-modal').modal('hide');
            realtimeExperienceInfo();
        } else {
            notify('error', data.message, 'Experience Info');
            $.validator('update-exp-form', data.errors);
        }
    }

// delete education info
    $(document).on('click', '#exp_delete_btn', function() {
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
                    url: "{{ route('admin.experience-info.delete') }}",
                    type: "GET",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        // console.log(data);
                        if (data.status == true) {
                            notify('success', data.message, 'Educational Info');
                            realtimeExperienceInfo();
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
