<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Department;
use App\Models\Subject;
use Illuminate\Http\Request;
class HomeController extends Controller
{ 
   public function index()
   {
       return view("Home.index");
   }

  
   public function create()
   {
       //
   }

   
   public function store(Request $request)
   {
    dd(Department::find(2)->subjects()->attach(['department_id'=>2, 'subject_id'=>3]));
   }

   
   public function show($id)
   {
       //
   }

   
   public function edit($id)
   {
       //
   }

  
   public function update(Request $request, $id)
   {
       //
   }

   
   public function destroy($id)
   {
       //
   }
}
