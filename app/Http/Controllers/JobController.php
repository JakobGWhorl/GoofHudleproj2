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
      public function show(Request $request)
      {
          $request -> validate([
            'first_name'=>'required',
            'last_name'=> 'required',
            'email'=> 'required',
            'address'=> 'required',
            'education'=> 'required',
            'years_of_exp'=> 'required',
         ]);
        $product = $request->all();
         JobApplication::create($product);
         $data = JobApplication::all();
          return view('showApplicationTable',['a'=>$data]);;
      }
}
