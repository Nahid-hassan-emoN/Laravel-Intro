<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
    function index($id){
        return "Article ID: ".$id;
    }
    function showArticle($pageNumber, $type ){
        return "Article Page Number:= ".$pageNumber ." Article Type: ".$type;
    }
}
