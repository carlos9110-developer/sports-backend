<?php

namespace App\Http\Controllers;

use Facades\App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //

    public function get()
    {
        return Department::get();
    }
}
