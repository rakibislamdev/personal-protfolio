<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function showPersonalInfoPage()
    {
        return view('admin.pages.personal-info');
    }
}
