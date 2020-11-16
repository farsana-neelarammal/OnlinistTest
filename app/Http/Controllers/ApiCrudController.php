<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ApiCrudController extends Controller
{
    function index(){
        $student = Student::get();
        $data = ["status"=>"success", "record"=> $student];
        return response()->json($data,200);
    }

    function show($id){
        $student = Student::find($id);
        $data = ["status"=>"success", "record"=> $student];
        return response()->json($data,200);
    }

    function store(request $req){
        $student = Student::create($req->all());
        $data = ["status"=>"success", "record"=> $student];
        return response()->json($data,200);
    }

    function update(request $req, $id){
        $student= Student::find($id);
        $student->update($req->all());
        $data = ["status"=>"success", "record"=> $student];
        return response()->json($data,200);
    }

    function destroy(request $req,$id){
        Student::find($id)->delete();
        $data = ["status"=>"success", "record"=>null];
        return response()->json($data,200);
    }
}
