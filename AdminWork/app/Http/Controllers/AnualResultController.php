<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnualResultController extends Controller
{
    //
    public function index(){
        $CountMonthCases = [];

        for($i = 1;$i <= 12;$i++){
            $CountMonthCases[$i] = [
                'month' => date("F", mktime(0, 0, 0, $i, 10)),
                'count' => DB::table('cases')->where('user_id',auth()->user()->id)->whereMonth('created_at',$i)->count()
            ];
        }


        // $countSalary = DB::table('cases')->where('user_id',auth()->user()->id)->whereMonth('created_at',$i)->count();
        // if($countSalary < 100){
        //     echo $countSalary * 2;
        // }elseif($countSalary < 120){
        //     echo $countSalary * 3.5;
        // }elseif($countSalary > 135){
        //     echo $countSalary * 4;
        // }
        // dd($countSalary);

        return view('admin.annual-result.index',['CountMonthCases'=>$CountMonthCases]);

    }
}
