<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Department;
use App\Models\Faculty;


class HomeController extends Controller
{
    public function faculty() 
    {
        return Faculty::select('*')
          ->with('departments')
          ->get();
    }
}
