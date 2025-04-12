<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   function sayHello(){
       return response()->json([
              'name' => 'Nahid',
              'age' => 25,
              'course' => 'Laravel'
       ]);
   }

   function courseName(){
         return "Laravel_152";
   }
}
