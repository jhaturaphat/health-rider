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
        $hn = $request->query('hn');
        
        if(strlen($hn) < 9){
            $hn = str_pad($hn, 9, "0", STR_PAD_LEFT);  //ใส่่ 000000000 หน้า HN ให้ครบ 9 หลัก
        }
        
        $sql = <<<____SQL
            SELECT 
            p.hn as cardHN, p.pname, p.fname, p.lname, p.birthday, IF(p.sex = 1, 'ชาย','หญิง') as gender, p.hometel
            , CONCAT(p.addrpart,' ม.',p.moopart,' ', addr.full_name,' ', addr.pocode) as address, p.email
            , pt.pttype, pt.name
            FROM patient as p
            INNER JOIN pttype as pt ON p.pttype = pt.pttype
            INNER JOIN pttype_spp as ps ON pt.pttype_spp_id = ps.pttype_spp_id
            INNER JOIN thaiaddress as addr ON p.addressid = addr.addressid      
            WHERE p.hn = ?
            LIMIT 100;
        ____SQL;

        DB::connection('mysql_his')->select("SET NAMES utf8"); //Error message => Malformed UTF-8 characters, possibly incorrectly encoded
        $infomation = DB::connection('mysql_his')->select($sql,[$hn]);   

        // $visitnumber = DB::connection('mysql_his')->select("")
        $infomation[0]['lat'] = '';
        $infomation[0]['lng'] = '';

        // return $infomation;
        return response()->json($infomation);
    }
}

/*{
    "cardHN": "000088973",
    "pname": "นาย",
    "fname": "จตุรภัทร",
    "lname": "ศิริบูรณ์",
    "birthday": "1982-01-05",
    "gender": "ชาย",
    "hometel": "081 3907061",
    "address": "320 ม.21 ต.เมืองเดช อ.เดชอุดม จ.อุบลราชธานี 34160",
    "email": "งานคอมพิวเตอร์",
    "pttype": "21",
    "name": "ข้าราชการ กรมบัญชีกลาง รูด EDC"
}*/
