<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facades\App\Models\Activity;

class ActivityController extends Controller
{
    public function get()
    {
        return Activity::get();
    }
}
