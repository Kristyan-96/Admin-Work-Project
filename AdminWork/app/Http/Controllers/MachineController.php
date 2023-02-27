<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MachineController extends Controller
{
    //

    public function index(){

        $machines = DB::table('machines')->get();
        return view('admin.machines.index',['machines' => $machines]);

    }

    public function create(){

        return view('admin.machines.create');

    }

    public function store(){

        $inputs = request()->validate([

            'model' => 'required',
            'number' => 'required|min:6|max:6',

        ]);
        $machine = DB::table('machines')->where('number',request('number'))->first();
        if($machine){
            session()->flash('machine-exist', 'Machine already exist');
            return redirect()->route('machines.index');
        }else{

            auth()->user()->machine()->create($inputs);
            session()->flash('machine-created', 'Machine created');
            return redirect()->route('machines.index');

        }



    }

    public function destroy(Machine $machine){

        $machine->delete();
        session()->flash('machine-deleted', 'Machine -  ' . $machine->number . ' was deleted');
        return back();

    }
}
