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
        p.cid as cardnum, p.hn as cardHN, p.pname as account_title_th, p.fname as firstname
        , p.lname as lastname, p.birthday as birth_date, vst.vn
        , IF(p.sex = 1, 'ชาย','หญิง') as gender, REPLACE(p.hometel,' ','') as mobile, p.mobile_phone_number as mobile_other
        , CONCAT(p.addrpart,' ม.',p.moopart,' ', addr.full_name,' ', addr.pocode) as address, p.email
        , p.addrpart as house_no, p.moopart as moo
        , pt.pttype as coverageCode, pt.name as coverageDesc , prv.province_name as province
        , dit.district_name as amphur, tab.tambol_name as tambon, addr.pocode as postal_code
        FROM (
        SELECT *,CONCAT(chwpart, amppart) as amppart2, CONCAT(chwpart, amppart,tmbpart) as tmbpart2  FROM patient WHERE hn = ?
        )as p
        INNER JOIN pttype as pt ON p.pttype = pt.pttype
        INNER JOIN pttype_spp as ps ON pt.pttype_spp_id = ps.pttype_spp_id
        INNER JOIN thaiaddress as addr ON p.addressid = addr.addressid
        INNER JOIN province as prv ON p.chwpart = prv.province_code  
        INNER JOIN district as dit ON p.amppart2 = dit.district_code
        INNER JOIN tambol as tab ON p.tmbpart2 = tab.tambol_code
        INNER JOIN (
            SELECT * FROM opitemrece WHERE hn = ? AND vstdate = CURDATE() AND icode = '3004818'
        ) as vst ON p.hn = vst.hn
        WHERE p.hn = ? AND p.death = 'N'
        LIMIT 10;
        ____SQL;

        DB::connection('mysql_his')->select("SET NAMES utf8"); //Error message => Malformed UTF-8 characters, possibly incorrectly encoded
        $infomation = DB::connection('mysql_his')->select($sql,[$hn, $hn, $hn]);   
            
            if (count($infomation) > 0){
                $infomation[0]->road                = "";
                $infomation[0]->landmark            = "";
                $infomation[0]->lat                 = "";
                $infomation[0]->lng                 = "";
                $infomation[0]->drugLocationId      = "";
                $infomation[0]->drugLocationDesc    = "";
                $infomation[0]->cinicLocationId     = "";
                $infomation[0]->cinicLocationDesc   = "";
                $infomation[0]->callback_url        = "https://cphconnect.detudomhospital.org/callback/healthrider";
                $infomation[0]->note                = "";
                $infomation[0]->road                = "";
                return response()->json($infomation , 200);
            }else{
                return response()->json(["status_code"=>204 ,"message"=>"ไม่มีข้อมูล"], 204);
            }           
        
    }
}


