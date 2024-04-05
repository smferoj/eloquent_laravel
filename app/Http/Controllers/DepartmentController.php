<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
   public function all(){

    //  $data = Department::with('employee')->find(1);
    //   dd($data);
//     $data = Department::with('employee')->get();
//        dd($data);
//    }
    $data = Employee::with('department')->get();
       dd($data);
   }
}
