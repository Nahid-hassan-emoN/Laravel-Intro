<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
            function handleformSubmission(Request $request)
            {
                        dd($request->all());
            }

}