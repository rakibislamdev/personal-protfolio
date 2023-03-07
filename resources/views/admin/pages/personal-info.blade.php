@extends('layouts.admin-layout')
@section('title', 'Personal Info')

@section('content')
<!-- profile -->
<div class="card">
    <div class="card-header border-bottom">
        <h4 class="card-title">Personal Details</h4>
    </div>
    <div class="card-body">
        <!-- form -->
        <form class="mt-2 pt-50" id="personal_info_form" method="POST" action="{{ route('admin.personal-info.store') }}">
            @csrf
            <div class="row">
                {{-- <div class="col-12 col-sm-6 mb-1">
                    <!-- image section -->
                    <div class="d-flex">
                        <a href="#" class="me-25">
                            <img src="{{ asset('admin-assets/app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                id="profile-1" class="upload-profile-1 rounded me-50" alt="profile image"
                                height="100" width="100" />
                        </a>
                        <!-- upload and reset button -->
                        <div class="d-flex align-items-end mt-75 ms-1">
                            <div>
                                <label for="main-profile" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                <input type="file" id="profile-1-upload" hidden accept="image/*" />
                                <button type="button" id="profile-1-reset"
                                    class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                            </div>
                        </div>
                        <!--/ upload and reset button -->
                    </div>
                    <!--/ image section -->
                </div> --}}
                {{-- <div class="col-12 col-sm-6 mb-1">
                    <!-- image section -->
                    <div class="d-flex">
                        <a href="#" class="me-25">
                            <img src="{{ asset('admin-assets/app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                                id="profile-2" class="upload-profile-2 rounded me-50" alt="profile image"
                                height="100" width="100" />
                        </a>
                        <!-- upload and reset button -->
                        <div class="d-flex align-items-end mt-75 ms-1">
                            <div>
                                <label for="main-profile" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                <input type="file" id="profile-2-upload" hidden accept="image/*" />
                                <button type="button" id="profile-2-reset"
                                    class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                            </div>
                        </div>
                        <!--/ upload and reset button -->
                    </div>
                    <!--/ image section -->
                </div> --}}

                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" name="name" value="{{ $personal_infos ? $personal_infos->name : '' }}" class="form-control" id="accountFirstName" name="name"
                        placeholder="John" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" value="{{ $personal_infos ? $personal_infos->email : '' }}" id="email" name="email" placeholder="Email" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="phone">Phone Number</label>
                    <input type="text" class="form-control account-number-mask" value="{{ $personal_infos ? $personal_infos->phone : '' }}" id="phone" name="phone"
                        placeholder="Phone Number" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="address">Address</label>
                    <input type="text" class="form-control" value="{{ $personal_infos ? $personal_infos->address : '' }}" id="address" name="address" placeholder="Your Address" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="description">Textarea</label>
                    <textarea name="description" class="form-control" id="description" rows="3"
                        placeholder="Textarea">{{ $personal_infos ? $personal_infos->description : '' }}</textarea>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="button" id="personal_info_btn" onclick="_run(this)" data-el="fg"
                        data-form="personal_info_form" data-callback="personalInfoCallback" data-btnid="personal_info_btn">
                        <span class="align-middle d-sm-inline-block d-none">Submit</span>
                    </button>
                </div>
            </div>
        </form>
        <!--/ form -->
    </div>
</div>
@endsection

@section('page-js')
<script src="{{ asset('admin-assets/app-assets/js/scripts/forms/form-wizard.js') }}"></script>

<script>

    // personal info callback
    function personalInfoCallback(data) {
        if (data.status == true) {
            notify('success', data.message, 'Personal Info');
        } else {
            notify('error', data.message, 'Personal Info');
            $.validator('personal_info_form', data.errors);
        }
    }

    // var form = $('#personal_info_form');
    // var pro_1_img = $('#profile-1');
    // var pro_1_upload_btn = $('#profile-1-upload');
    // var pro_1_uploaded_img = $('.upload-profile-1');
    // var pro_1_reset_btn = $('#profile-1-reset');

    // // Update user photo on click of button
    // if (pro_1_uploaded_img) {
    //   var resetImage = pro_1_uploaded_img.attr('src');
    //   pro_1_upload_btn.on('change', function (e) {
    //     var reader_1 = new FileReader_1();
    //     var files_1 = e.target.files;
    //     reader_1.onload = function () {
    //       if (pro_1_img) {
    //         pro_1_img.attr('src', reader_1.result);
    //       }
    //     };
    //     reader_1.readAsDataURL(files_1[0]);
    //   });

    //   pro_1_reset_btn.on('click', function () {
    //     pro_1_uploaded_img.attr('src', resetImage);
    //   });
    // }

    // var form = $('#personal_info_form');
    // var pro_2_img = $('#profile-2');
    // var pro_2_upload_btn = $('#profile-2-upload');
    // var pro_2_uploaded_img = $('.upload-profile-2');
    // var pro_2_reset_btn = $('#profile-2-reset');

    // // Update user photo on click of button
    // if (pro_2_uploaded_img) {
    //   var resetImage = pro_2_uploaded_img.attr('src');
    //   pro_2_upload_btn.on('change', function (e) {
    //     var reader = new FileReader();
    //     var files = e.target.files;
    //     reader.onload = function () {
    //       if (pro_2_img) {
    //         pro_2_img.attr('src', reader.result);
    //       }
    //     };
    //     reader.readAsDataURL(files[0]);
    //   });

    //   pro_2_reset_btn.on('click', function () {
    //     pro_2_uploaded_img.attr('src', resetImage);
    //   });
    // }


</script>

@endsection
