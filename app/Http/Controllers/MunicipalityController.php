<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facades\App\Models\Municipality;

class MunicipalityController extends Controller
{
    public function getByDepartment(Request $request)
    {
        return Municipality::getByDepartment($request->idDepartment);
    }
}
