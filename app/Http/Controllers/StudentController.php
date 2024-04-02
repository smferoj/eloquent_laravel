<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentProfile;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  // public function create(){
  //   $obj = new Student;
  //   $obj->name = 'SM';
  //   $obj->email = 'sm.feroj@gmail.com';
  //   $obj->age = '45';
  //   $obj->country = 'Bd';
  //   $obj->save();
  // }

  // public function index(){
  //   $all_data = Student::get();
  //   dd($all_data);

  // }
  // public function index(){
  //   $all_data = Student::where('country','USA')->orderBy('name', 'asc')->get();
  //   dd($all_data);

  
  // public function index(){
  //   $data = Student::find(2);
  //   dd($data);
  // }
  // public function index(){
  //   $data = Student::findOrFail(2);
  //   dd($data);
  // }


  // public function index(){
  //   $data = Student::where('name', 'Farhan')->first();
  //   dd($data);

  // }

// public function update(){
//   // $data = Student::find(3);
//   $data = Student::where('id',2)->first();
//   $data->age = "65";
//   $data->save();
// }
// public function delete(){
//   // $data = Student::find(3);
//   $data = Student::where('id',2)->first();
//   $data->delete();
// }


 public function all(){
  // $single = Student::with('profile')->first();
  // dd($single);
  
  // $single = Student::with('profile')->find(1);
  // dd($single);

  // $allStudents = Student::with('profile')->get();
  // dd($allStudents);


  // ======== reverse ====

  $studentProfile = StudentProfile::with('student')->find(1);
  dd($studentProfile);
  
 }

}
