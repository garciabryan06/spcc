<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index() {
    	return view('students.index');
    }

    public function changePassword() {
    	return view('students.change-password');
    }

    public function viewSubject() {
    	return view('students.view-subject');
    }
}
