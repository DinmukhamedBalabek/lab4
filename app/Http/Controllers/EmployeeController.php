<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee');
    }

    public function store(Request $request)
    {
        $employee = new Employee();

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->post = $request->input('post');
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/employee/',$filename);
            $employee->image = $filename;
        }else{
            return $request;
            $employee->image= '';
        }

        $employee->save();

        return view('employee')->with('employee',$employee);
    } 

}
