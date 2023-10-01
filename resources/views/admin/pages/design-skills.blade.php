@extends('layouts.admin-layout')
@section('title', 'Design Skills Info')

@section('vendor-css')
<link rel="stylesheet" type="text/css"
    href="{{ asset('admin-assets/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}">
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
        <h4 class="card-title">Design Skills</h4>
    </div>
    <div class="card-body">
        <!-- form -->
        <form class="mt-2 pt-50" id="design-skill-form" method="POST" action="{{ route('admin.design-skill.store') }}">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="email">Skill Name</label>
                    <input type="text" class="form-control" name="skill_name" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label w-100" for="course-name">Skill Level</label>
                    <div class="input-group input-group-lg w-100">
                        <input type="number" name="skill_level" class="touchspin" value="" />
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-success w-50" type="button" id="design_skill_btn" onclick="_run(this)"
                        data-el="fg" data-form="design-skill-form" data-callback="designSkillCallback"
                        data-btnid="design_skill_btn">
                        <span class="align-middle d-sm-inline-block d-none">Submit</span>
                    </button>
                </div>
            </div>
        </form>
        <!--/ form -->
    </div>

</div>
<div class="item-features">
    <div class="card">
        <div class="card-body">
            <div class="row design-skill-block">

            </div>
        </div>
    </div>
</div>

{{-- modal section --}}
<div class="modal fade" id="update-design-skill-modal" tabindex="-1" aria-labelledby="updateExperienccModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Update Education Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mt-2 pt-50" id="update-design-skill-form" method="POST"
                    action="{{ route('admin.design-skill.update') }}">
                    @csrf
                    <input type="hidden" name="id" id="update-id">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label" for="course-name">Skill Name</label>
                            <input type="text" name="skill_name" value="" id="update-name" class="form-control" />
                        </div>
                        <div class="col-12 col-sm-6 mb-1">
                            <label class="form-label" for="email">Skill Level</label>
                            <input type="text" class="form-control" value="" id="update-skill-level"
                                name="skill_level" />
                        </div>

                        <div class="col-12 text-center">
                            <button class="btn btn-success w-50" type="button" id="update_design_skill_btn"
                                onclick="_run(this)" data-el="fg" data-form="update-design-skill-form"
                                data-callback="updateDesignSkillCallback" data-btnid="update_design_skill_btn">
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
<script src="{{ asset('admin-assets/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js') }}"></script>
@endsection

@section('page-js')
<script src="{{ asset('admin-assets/app-assets/js/scripts/forms/form-number-input.js') }}"></script>
<script src="{{ asset('admin-assets/app-assets/js/scripts/forms/form-wizard.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>

<script>
    // realtime design skill show
    function realtimeDesignSkill() {
        $.ajax({
            url: "{{ route('admin.design-skill.get') }}",
            type: "GET",
            success: function(data) {

                console.log(data);
                // Assuming `data` is an array of education info objects
                var container = $('.design-skill-block');
                container.empty(); // Clear any previous content
                // Loop through the data and create a new card for each education info object
                data.forEach(function(info) {
                    var card = $('<div class="col-12 col-sm-6 mb-1 border-end">' +
                        '<div class="d-flex justify-content-between mb-1">' +
                            '<div class="skill-name">' + info.skill_name +'</div>' +
                            '<div>' +
                                '<button class="btn btn-icon btn-flat-success edit-skill" data-id="'+ info.id +'" data-bs-toggle="modal" data-bs-target="#update-design-skill-modal"><i data-feather="edit"></i></button>' +
                                '<button class="btn btn-icon btn-flat-danger delete-skill" data-id="'+ info.id +'"><i data-feather="trash"></i></button>' +
                            '</div>' +
                        '</div>' +
                        '<div class="progress progress-bar-success">' +
                            '<div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="45" aria-valuemax="100"style="width: ' + info.skill_level +'%">'+ info.skill_level +'%</div>' +
                        '</div>' +
                    '</div>');

                        container.append(card);
                        feather.replace();
                    });
            }
        });
    }

    realtimeDesignSkill();

    // educational info callback
    function designSkillCallback(data) {
        if (data.status == true) {
            notify('success', data.message, 'design Skill');
            $('#design-skill-form').trigger('reset');
            realtimeDesignSkill();
        } else {
            notify('error', data.message, 'design Skill');
            $.validator('design-skill-form', data.errors);
        }
    }

    // edit design skill
    $(document).on('click', '.edit-skill', function() {
        var id = $(this).attr('data-id');
        $.ajax({
            url: "{{ route('admin.design-skill.edit') }}",
            type: "GET",
            data: {
                id: id
            },
            success: function(data) {
                console.log(data);
                $('#update-id').val(data.id);
                $('#update-name').val(data.skill_name);
                $('#update-skill-level').val(data.skill_level);
            }
        });
    });

    // update design skill callback
    function updateDesignSkillCallback(data) {
        if (data.status == true) {
            notify('success', data.message, 'design Skill');
            $('#update-design-skill-modal').modal('hide');
            $('#update-design-skill-form').trigger('reset');
            realtimeDesignSkill();
        } else {
            notify('error', data.message, 'design Skill');
            $.validator('update-design-skill-form', data.errors);
        }
    }

    // delete design skill
    $(document).on('click', '.delete-skill', function() {
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
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    url: "{{ route('admin.design-skill.delete') }}",
                    type: "GET",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        if (data.status == true) {
                            notify('success', data.message, 'design Skill');
                            realtimedesignSkill();
                        } else {
                            notify('error', data.message, 'design Skill');
                        }
                    }
                });
            }
        });
    });
</script>

@endsection
