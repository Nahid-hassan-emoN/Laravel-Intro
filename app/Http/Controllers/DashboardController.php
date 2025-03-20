<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard(){
        $name = "Nahid";
        $age = 25;
        $course = "Laravel";
   
      return view('dashboard.home', compact('name', 'age', 'course'));
    //   return view('dashboard.home', ['name'=>$name, 'age'=>$age, 'course'=>$course, ]);
        
    }
}
