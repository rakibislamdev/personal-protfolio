<?php

namespace App\Http\Controllers;

use App\Models\EducationInfo;
use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class InformationController extends Controller
{
    public function showPersonalInfoPage()
    {
        $personal_infos = PersonalInfo::first();
        return view('admin.pages.personal-info', compact('personal_infos'));
    }

    // store personal info
    public function storePersonalInfo(Request $request)
    {
        if ($request->ajax()) {
            $validation_rules = [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'description' => 'required',
                'address' => 'required',
                'profile_img_1' => 'nullable',
                'profile_img_2' => 'nullable',
            ];

            $validator = Validator::make($request->all(), $validation_rules);

            if ($validator->fails()) {
                return Response::json(['status' => false, 'message' => 'Please fix the following errors.', 'errors' => $validator->errors()]);
            } else {
                $data = PersonalInfo::first();
                if (!$data) {
                    $data = new PersonalInfo([
                        'name' => $request->name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'description' => $request->description,
                        'address' => $request->address,
                        'profile_img_1' => $request->profile_img_1,
                        'profile_img_2' => $request->profile_img_2,
                    ]);
                    $data->save();
                    return Response::json(['status' => true, 'message' => 'Personal info added successfully.']);
                } else {
                    $data->name = $request->name;
                    $data->email = $request->email;
                    $data->phone = $request->phone;
                    $data->description = $request->description;
                    $data->address = $request->address;
                    $data->profile_img_1 = $request->profile_img_1;
                    $data->profile_img_2 = $request->profile_img_2;
                    $data->save();
                    return Response::json(['status' => true, 'message' => 'Personal info updated successfully.']);
                }
            }
        }
    }

    // show education info page
    public function showEducationInfoPage()
    {
        $education_infos = EducationInfo::all();
        return view('admin.pages.education-info', compact('education_infos'));
    }

    // store education info
    public function storeEducationInfo(Request $request)
    {
        if ($request->ajax()) {
            $validation_rules = [
                'course_name' => 'required',
                'institute_name' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'course_details' => 'required',
            ];

            $validator = Validator::make($request->all(), $validation_rules);

            if ($validator->fails()) {
                return Response::json(['status' => false, 'message' => 'Please fix the following errors.', 'errors' => $validator->errors()]);
            } else {
                $store = EducationInfo::create($request->all());
                if ($store) {
                    return Response::json(['status' => true, 'message' => 'Education info added successfully.']);
                } else {
                    return Response::json(['status' => false, 'message' => 'Something went wrong.']);
                }
            }
        }
    }
}
