<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UseController extends Controller
{
    public function index(){
        return "หน้า user";
    }
    public function create(){
        return "หน้า user";
    }
    public function showName($name){
        return "สวัสดี $name";
    }
    public function showNameAndage($name,$age){
        return "สวัสดี $name อายุ $age";
    }
}
