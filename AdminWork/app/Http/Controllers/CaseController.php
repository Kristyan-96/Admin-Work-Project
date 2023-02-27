<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cases;


class CaseController extends Controller
{
    //


    public function index(){

        // $cases = DB::table('cases')->get();
        $cases = auth()->user()->cases()->get();
        return view('admin.cases.index',['cases' => $cases]);

    }

    public function create(){

        $parts = DB::table('parts')->get();
        return view('admin.cases.create',['parts'=> $parts]);

    }

    public function store(){

        $inputs = request()->validate([

            'theme' => 'required',
            'owner' => 'required',
            'machine_number' => 'required',
            'parts' => 'required',
            'repair_description' => 'required',

        ]);

        $parts = $inputs['parts'];
        $repair_description = $inputs['repair_description'];
        $inputs['parts'] = implode(',',$parts);
        $inputs['repair_description'] = implode(',',$repair_description);


        $requestNum = request('machine_number');
        $collect = DB::table('machines')->where('number',$requestNum)->first();
        // dd($collect);
        if($collect){

            auth()->user()->cases()->create($inputs);
            session()->flash('case-created', 'Case created');
            return redirect()->route('cases.create');

        }else{

            session()->flash('case-not-created', 'That machine number not exists');
            return redirect()->route('cases.create');

        }
    }

    public function destroy(Cases $case){

        $case->delete();
        session()->flash('case-deleted', 'Case was deleted');
        return back();
    }

    public function view(Cases $case){

        return view('admin.cases.view',['case' => $case]);

    }

}
