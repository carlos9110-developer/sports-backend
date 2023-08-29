<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facades\App\Models\ServiceProvider;

class ServiceProviderController extends Controller
{
    public function get()
    {
        return ServiceProvider::get();
    }
}
