<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class UserController extends Controller
{
    public function index()
    {
        $students = student::orderBy('first_name')->get();
        return view('Info.index', compact('students'));
    }
}
