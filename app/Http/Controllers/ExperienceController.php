<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.experience-info');
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
                'company_name' => 'required',
                'designation' => 'required',
                'start_date' => 'required',
                'end_date' => 'nullable',
                'experience_details' => 'required',
            ];

            $validator = Validator::make($request->all(), $validation_rules);

            if ($validator->fails()) {
                return Response::json(['status' => false, 'message' => 'Please fix the following errors.', 'errors' => $validator->errors()]);
            } else {
                $store = Experience::create($request->all());
                if ($store) {
                    return Response::json(['status' => true, 'message' => 'Experience info added successfully.']);
                } else {
                    return Response::json(['status' => false, 'message' => 'Something went wrong.']);
                }
            }
        }
    }

    /**
     *
     * get all experience info
     */
    public function getExperienceInfo(Request $request)
    {
        if ($request->ajax()) {
            $experiences = Experience::all();
            return Response::json($experiences);
        }
    }

    /**
     * edit the specified resource from storage.
     **/
    public function edit(Request $request)
    {
        if ($request->ajax()) {
            $experience = Experience::find($request->id);
            return Response::json($experience);
        }
    }

    /**
     * Update the specified resource in storage.
     *update experience info
     */
    public function update(Request $request)
    {
        if ($request->ajax()) {
            $validation_rules = [
                'update_company_name' => 'required',
                'update_designation' => 'required',
                'update_start_date' => 'required',
                'update_end_date' => 'nullable',
                'update_exp_details' => 'required',
            ];

            $validator = Validator::make($request->all(), $validation_rules);

            if ($validator->fails()) {
                return Response::json(['status' => false, 'message' => 'Please fix the following errors.', 'errors' => $validator->errors()]);
            }else {
                $experience = Experience::find($request->id);
                $experience->company_name = $request->update_company_name;
                $experience->designation = $request->update_designation;
                $experience->start_date = $request->update_start_date;
                $experience->end_date = $request->update_end_date;
                $experience->experience_details = $request->update_exp_details;
                $update = $experience->save();
                if ($update) {
                    return Response::json(['status' => true, 'message' => 'Experience info updated successfully.']);
                } else {
                    return Response::json(['status' => false, 'message' => 'Something went wrong.']);
                }
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteExperienceInfo(Request $request)
    {
        if ($request->ajax()) {
            $experience = Experience::find($request->id);
            $delete = $experience->delete();
            if ($delete) {
                return Response::json(['status' => true, 'message' => 'Experience info deleted successfully.']);
            } else {
                return Response::json(['status' => false, 'message' => 'Something went wrong.']);
            }
        }
    }
}
