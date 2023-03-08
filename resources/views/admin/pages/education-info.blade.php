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
@endsection

@section('content')
<!-- profile -->
<div class="card">
    <div class="card-header border-bottom">
        <h4 class="card-title">Educational Details</h4>
    </div>
    <div class="card-body">
        <!-- form -->
        <form class="mt-2 pt-50" id="educational_info_form" method="POST" action="{{ route('admin.education-info.store') }}">
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
                    <input type="text" id="start-date" name="start_date" class="date form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="end-date">End Date</label>
                    <input type="text" id="end-date" name="end_date" class="date form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
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
<div class="item-features">
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
                            <i data-feather='book-open'></i>
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

<script>
    // date picker
    $('.date').flatpickr();
    // educational info callback
    function educationalInfoCallback(data) {
        if (data.status == true) {
            notify('success', data.message, 'Educational Info');
            $('#educational_info_form').trigger('reset');
            window.location.reload();
        } else {
            notify('error', data.message, 'Educational Info');
            $.validator('educational_info_form', data.errors);
        }
    }




</script>

@endsection
