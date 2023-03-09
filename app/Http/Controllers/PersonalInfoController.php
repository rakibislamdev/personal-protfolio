<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class PersonalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal_infos = PersonalInfo::first();
        return view('admin.pages.personal-info', compact('personal_infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
