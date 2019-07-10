<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worktime;
use App\Employee;

class RecordController extends Controller
{
    public function __construct(
        Worktime $worktimes,
        Employee $employees)
    {
        $this->employees = $employees;
        $this->worktimes = $worktimes;
    }

    public function index(){

        $employees = $this->employees->all();
        return view("record.index",["employees"=>$employees]);
    }

    public function detail($id){
        $employee = $this->employees->find($id);

        return view("record.record",[
            "employee"=>$employee,
            ]);

    }

    public function record(Request $request,$id){
        $employee = $this->employees->find($id);

        if(isset($request->start)){
            $this->worktimes->create([
                'employee_id' => $id, 
                'start'=>'a',
                'end'=>'v',
                'is_rest'=>'1',
                ]);
        }elseif(isset($request->rest)){
            $this->worktimes->create([
                'employee_id' => $id,
                'is_rest' => true, 
                ]);
        }elseif(isset($request->return)){
            $this->worktimes->create([
                'employee_id' => $id, 
                'is_rest' => true, 
                ]);
        }elseif(isset($request->end)){
            $this->worktimes->create([
                'employee_id' => $id, 
                ]);
        };

        return view("record/record",[
            "employee"=>$employee,
            ]);
    }
}
