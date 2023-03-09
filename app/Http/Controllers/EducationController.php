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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
