<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class HomeController extends Controller
{
    public function home() 
    {
        return Student::select('*')->get();
          where('age','>',30)
        ->orderBy('id','DESC')
        ->get();
    }
}
