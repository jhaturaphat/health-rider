<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\OrederRider;

class OrderRiderController extends Controller
{
    public function Orderrider(){
        return view('orderrider');
    }

    public function Patient(Request $request){
        $hn = $request->term;
        if(strlen($hn) < 9){
            $hn = str_pad($request->term,9,"0",STR_PAD_LEFT);  //ใส่่ 000000000 หน้า HN ให้ครบ 9 หลัก
        }
        
        $sql = <<<____SQL
        SELECT
        *
        FROM patient
        WHERE hn='?'
        ____SQL;

        DB::connection('mysql_his')->select("SET NAMES utf8");
        $results = DB::connection('mysql_his')->select($sql,[$hn]);       
        return response()->json($results);
    }
}
