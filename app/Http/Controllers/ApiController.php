<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use DataTables;
use Dotenv\Result\Success;

class ApiController extends Controller
{
    public function get_all_emp(Request $request) {
        $employee = Employee::get()->toJson(JSON_PRETTY_PRINT);
        if(!is_null($request)){

            if ($request->ajax()) {
                $employee = Employee::latest()->get();
                return Datatables::of($employee)
                        ->addIndexColumn()
                        ->addColumn('action', function($row){

                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                                return $btn;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }

        return view("home", compact("employee"));
      }
    }



    public function get_emp_by_id($id) {
        if (Employee::where('id', $id)->exists()) {
            $employee = Employee::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return view("home", compact("employee"));
          } else {
            return response()->json([
              "message" => "employee not found"
            ], 404);
          }
    }

    public function create_emp(Request $request) {
        $employee = new Employee;
        $employee->fname = $request->fname;
        $employee->lname = $request->lname;
        $employee->age = $request->age;
        $employee->bday = date("Y-m-d", strtotime($request->bday));;
        $employee->position = $request->position;
        $employee->save();
        $json_data[]=array(
            "success" => 'Create Success',
            "error" => 'Error'
        );
        return response($json_data);
    }

    public function update_emp(Request $request, $id) {
        if (Employee::where('id', $id)->exists()) {
            $employee = Employee::find($id);
            $employee->fname = is_null($request->fname) ? $employee->fname : $request->fname;
            $employee->lname = is_null($request->lname) ? $employee->lname : $request->lname;
            $employee->age = is_null($request->age) ? $employee->age : $request->age;
            $employee->bday = is_null($request->bday) ? $employee->bday : $request->bday;
            $employee->position = is_null($request->position) ? $employee->position : $request->position;
            $employee->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "employee not found"
            ], 404);

        }
    }

    public function delete_emp($id) {
        if(Employee::where('id', $id)->exists()) {
            $employee = Employee::find($id);
            $employee->delete();

            return response()->json([
              "message" => "records deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "employee not found"
            ], 404);
          }
    }
}
