<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\JobApplication;
class JobController extends Controller
{
    public function showForm(){
        return view('applicationForm');
    }

      public function showTable(){
        return view('showApplicationTable');
      }
      public function show()
      {
          $data = JobApplication::all();
          return view('showApplicationTable',['a'=>$data]);;
      }
}
