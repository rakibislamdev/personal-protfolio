<?php

namespace App\Http\Controllers;

use App\Models\CodingSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class CodingSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.coding-skills');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $validation_rules = [
                'skill_name' => 'required',
                'skill_level' => 'required|numeric|min:1|max:100',
            ];

            $validator = Validator::make($request->all(), $validation_rules);

            if ($validator->fails()) {
                return Response::json(['status' => false, 'message' => 'Please fix the following errors.', 'errors' => $validator->errors()]);
            } else {
                $store = CodingSkill::create($request->all());
                if ($store) {
                    return Response::json(['status' => true, 'message' => 'Coding skill added successfully.']);
                } else {
                    return Response::json(['status' => false, 'message' => 'Something went wrong.']);
                }
            }
        }
    }

    /**
     * show all coding skill.
     */
    public function getCodingSkill(Request $request)
    {
        if ($request->ajax()) {
            $coding_skills = CodingSkill::all();
            return Response::json($coding_skills);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        if ($request->ajax()) {
            $coding_skill = CodingSkill::where('id', $request->id)->first();
            return Response::json($coding_skill);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->ajax()) {
            $validation_rules = [
                'skill_name' => 'required',
                'skill_level' => 'required|numeric|min:1|max:100',
            ];

            $validator = Validator::make($request->all(), $validation_rules);

            if ($validator->fails()) {
                return Response::json(['status' => false, 'message' => 'Please fix the following errors.', 'errors' => $validator->errors()]);
            } else {
                $update = CodingSkill::where('id', $request->id)->update([
                    'skill_name' => $request->skill_name,
                    'skill_level' => $request->skill_level,
                ]);
                if ($update) {
                    return Response::json(['status' => true, 'message' => 'Coding skill updated successfully.']);
                } else {
                    return Response::json(['status' => false, 'message' => 'Something went wrong.']);
                }
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            $delete = CodingSkill::where('id', $request->id)->delete();
            if ($delete) {
                return Response::json(['status' => true, 'message' => 'Coding skill deleted successfully.']);
            } else {
                return Response::json(['status' => false, 'message' => 'Something went wrong.']);
            }
        }
    }
}
