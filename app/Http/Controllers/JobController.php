<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobApplication;
class JobController extends Controller
{
    public function showForm(){
        return view('showApplicationTable');
    }
}
