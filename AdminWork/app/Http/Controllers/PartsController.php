<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartsController extends Controller
{
    //
    public function index(){

        $parts = DB::table('parts')->get();
        return view('admin.parts.index',['parts'=>$parts]);

    }

    public function store(){

        $inputs = request()->validate([
            'name' => 'required',
        ]);

    //    DB::table('parts')->insert($inputs);
        Part::create($inputs);
        return back();

    }

    public function destroy(Part $part){

        $part->delete();
        return back();


    }
}
