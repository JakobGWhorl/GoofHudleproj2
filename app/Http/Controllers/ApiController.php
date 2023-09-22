<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobApplication;
class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        function store(Request $request){
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
          }
    
    }

    /**
     * Display the specified resource.
     */
   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    function check(Request $request, $id){
        $id=JobApplication::where('id', $request-> id);
            foreach($id as $JobApplication){
                if($id == $id ){
                    return view('showApplicationTable');
                }
            }
      }
}
