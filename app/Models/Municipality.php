<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request;

class Municipality extends Model
{
    use HasFactory;

    public function getByDepartment(int $departmentId)
    {
        return Municipality::where('department_id', $departmentId)->get();
    }
}
