<?php

namespace App\Http\Controllers;

use App\Models\EducationInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education_infos = EducationInfo::all();
        return view('admin.pages.education-info', compact('education_infos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $validation_rules = [
                'course_name' => 'required',
                'institute_name' => 'required',
                'start_date' => 'required',
                'end_date' => 'nullable',
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

    /**
     * Display the specified resource.
     *
     * get all education info
     */
    public function getEducationInfo()
    {
        $education_infos = EducationInfo::all();
        return Response::json($education_infos);
    }

    /**
     * edit the education info
     */
    public function edit(Request $request)
    {
        if ($request->ajax()) {
            $id = $request->id;
            $education_info = EducationInfo::find($id);
            return Response::json($education_info);
        }
    }

    /**
     * Update the education info
     */
    public function update(Request $request)
    {
        if($request->ajax()){
            $validation_rules = [
                'update_course_name' => 'required',
                'update_institute_name' => 'required',
                'update_start_date' => 'required',
                'update_end_date' => 'nullable',
                'update_course_details' => 'required',
            ];

            $validator = Validator::make($request->all(), $validation_rules);

            if ($validator->fails()) {
                return Response::json(['status' => false, 'message' => 'Please fix the following errors.', 'errors' => $validator->errors()]);
            } else {
                $data = EducationInfo::find($request->update_id);
                $data->course_name = $request->update_course_name;
                $data->institute_name = $request->update_institute_name;
                $data->start_date = $request->update_start_date;
                $data->end_date = $request->update_end_date;
                $data->course_details = $request->update_course_details;
                $data->save();
                return Response::json(['status' => true, 'message' => 'Education info updated successfully.']);
            }
        }
    }

    /**
     * delete the education info
     */
    public function deleteEducationInfo(Request $request)
    {
        if ($request->ajax()) {
            $delete = EducationInfo::find($request->id)->delete();
            if ($delete) {
                return Response::json(['status' => true, 'message' => 'Education info deleted successfully.']);
            } else {
                return Response::json(['status' => false, 'message' => 'Something went wrong.']);
            }
        }
    }
}
