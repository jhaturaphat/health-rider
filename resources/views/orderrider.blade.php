@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-success ">ลงทะเบียนขอรับยา</h2>
    <hr>
    <form name="register">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3 input-group input-group-sm">
                            <sapn for="cardHN" class="input-group-text text-white" for="hn">HN</sapn>
                            <input type="text" class="form-control" id="cardHN" value="">
                            <span class="input-group-text text-white" title="ค้นหา" id="fetch_hn"><i class="bi bi-search"></i></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3 input-group input-group-sm">    
                            <sapn for="vn" class="input-group-text text-white" for="hn">VN</sapn>   
                            <input type="text" class="form-control" id="vn" value="" disabled>  
                        </div>
                    </div>
                    <div class="col-md-6">                        
                        <div class="mb-3 input-group input-group-sm">
                            <label for="coverageDesc" class="input-group-text text-white">สิทธิการรักษา</label>
                            <input type="hidden" id="coverageCode" disabled>
                            <input type="text" class="form-control" id="coverageDesc" value="" disabled>
                        </div>
                    </div>
                </div>
                <!-- Row for Name Fields -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3 input-group input-group-sm">                            
                            <span class="input-group-text text-white" for="account_title_th">คำนำหน้าชื่อ</span>
                            <input type="text" class="form-control" id="account_title_th" value="" aria-describedby="basic-addon3" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 input-group input-group-sm">
                            <span for="firstname" class="input-group-text text-white">ชื่อ</span>
                            <input type="text" class="form-control" id="firstname" value="" disabled>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3 input-group input-group-sm">
                            <span for="lastname" class="input-group-text text-white">นามสกุล</span>
                            <input type="text" class="form-control" id="lastname" value="" disabled>
                        </div>
                    </div>
                </div>
                 {{-- --}} 
                 <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="birth_date" class="input-group-text text-white">วันเกิด</label>
                            <input type="date" class="form-control" id="birth_date" value="" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="gender" class="input-group-text text-white" >เพศ</label>
                            <input type="text" class="form-control" id="gender" value="ชาย" disabled>
                        </div>
                    </div>                    
                 </div>
                
                 <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="mobile" class="input-group-text text-white">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" id="mobile" value="" disabled>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="mobile_other" class="input-group-text text-white">เบอร์โทรศัพท์อื่น</label>
                            <input type="text" class="form-control" id="mobile_other" value="" disabled>
                        </div>
                    </div>
                 </div>
                
                <br>
                <h2 class="text-success">ข้อมูลที่อยู่</h2>
                <hr>
                <div class="mb-3 input-group input-group-sm">
                    <label for="address" class="input-group-text text-white">ที่อยู่</label>
                    <input type="text" class="form-control" id="address" value="" disabled>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="house_no" class="input-group-text text-white">บ้านเลขที่</label>
                            <input type="text" class="form-control" id="house_no" value="" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="moo" class="input-group-text text-white">หมู่ที่</label>
                            <input type="text" class="form-control" id="moo" value="" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="road" class="input-group-text text-white">ถนน</label>
                            <input type="text" class="form-control" id="road" value="" disabled>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="tambon" class="input-group-text text-white">ตำบล</label>
                            <input type="text" class="form-control" id="tambon" value="" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="amphur" class="input-group-text text-white">อำเภอ</label>
                            <input type="text" class="form-control" id="amphur" value="" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="province" class="input-group-text text-white">จังหวัด</label>
                            <input type="text" class="form-control" id="province" value="" disabled>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="postal_code" class="input-group-text text-white">รหัสไปรษณีย์</label>
                            <input type="text" class="form-control" id="postal_code" value="" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="email" class="input-group-text text-white">อีเมล</label>
                            <input type="email" class="form-control" id="email" value="" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="lat" class="input-group-text text-white">ละติจูด</label>
                            <input type="text" class="form-control" id="lat" value="" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="lng" class="input-group-text text-white">ลองจิจูด</label>
                            <input type="text" class="form-control" id="lng" value="" disabled>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="drugLocationDesc" class="input-group-text text-white">ตำแหน่งห้องยา</label>
                            <input type="hidden" id="drugLocationId">                            
                            <select class="form-select form-select-sm" aria-label=".form-select-lg example" id="drugLocationDesc">                                
                                <option value="b5">อาคาร 5 ชั้น 1</option>
                                <option value="er">ตึกอุบัติเหตุชั้น 1</option>
                                <option value="50th">อาคารศูนย์สิทธิ์</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="cinicLocationDesc" class="input-group-text text-white">ตำแหน่งคลินิก</label>
                            <input type="hidden" id="cinicLocationId">                            
                            <select class="form-select form-select-sm" aria-label=".form-select-lg example" id="cinicLocationDesc">                                
                                <option value="b5f1">ห้องจ่ายยา OPD</option>
                                <option value="erf1">ห้องจ่ายยา ER</option>
                                <option value="50thf1">ห้องจ่ายยา 50th</option>
                            </select> 
                        </div>
                    </div>
                </div>
                
                <div class="mb-3 input-group input-group-sm">
                    <label for="callback_url" class="input-group-text text-white">Callback URL</label>
                    <input type="text" class="form-control" id="callback_url" value="https://Example_hospital.com/callback" disabled>
                </div>
                <div class="mb-3 input-group input-group-sm">
                    <label for="note" class="input-group-text text-white">หมายเหตุ</label>
                    <textarea class="form-control" id="note">ทดลองลงทะเบียน</textarea>
                </div>
            </div>
        </div>
        <div class="d-grid">
            <button type="submit" id="register" class="btn btn-primary"><i class="bi bi-floppy2"></i> ส่งข้อมูล</button>
        </div>
        
    </form>
</div>

<script>
    let obj = {};
    document.getElementById('fetch_hn').addEventListener('click', async function(){
        const hn = document.getElementById("cardHN").value;
        await axios.get('/patient',{params:{ hn:hn }})
        .then(res => {    
            console.log(obj);
            if(res.status == 200){
                obj = res.data[0];                
                document.getElementById("cardHN").value             = obj.cardHN;
                document.getElementById("vn").value                 = obj.vn;
                document.getElementById("coverageCode").value       = obj.coverageCode;
                document.getElementById("coverageDesc").value       = obj.coverageDesc;
                document.getElementById("account_title_th").value   = obj.account_title_th;
                document.getElementById("firstname").value          = obj.firstname;
                document.getElementById("lastname").value           = obj.lastname;
                document.getElementById("birth_date").value         = obj.birth_date;
                document.getElementById("gender").value             = obj.gender;
                document.getElementById("mobile").value             = obj.mobile;
                document.getElementById("mobile_other").value       = obj.mobile_other;
                document.getElementById("address").value            = obj.address;
                document.getElementById("house_no").value           = obj.house_no;
                document.getElementById("moo").value                = obj.moo;
                document.getElementById("road").value               = obj.road;
                document.getElementById("tambon").value             = obj.tambon;
                document.getElementById("amphur").value             = obj.amphur;
                document.getElementById("province").value           = obj.province;
                document.getElementById("postal_code").value        = obj.postal_code;
                document.getElementById("email").value              = obj.email;
                document.getElementById("lat").value                = obj.lat;
                document.getElementById("lng").value                = obj.lng;
                document.getElementById("cinicLocationId").value    = obj.cinicLocationId;
                document.getElementById("cinicLocationDesc").value  = obj.cinicLocationDesc;
                document.getElementById("callback_url").value       = obj.callback_url;
                document.getElementById("note").value               = obj.note;
            }else{
                Swal.fire({
                        title : res.status,
                        text: res.statusText,
                        icon: "question"
                    });
            }
        })
        .catch(err => {
            console.error(err);
            Swal.fire({
                        title : "เกิดข้อผิดพลาด",
                        text: "ติดต่อแอดมินโทร 155",
                        icon: "error"
                    });
            })
        });

    document.getElementById("register").addEventListener('click', function(e){
        e.preventDefault();
        const hospitalKey       = "{{env('HOSPITAL_KEY')}}";
        const drugLocationDesc  = document.getElementById('drugLocationDesc');
        const cinicLocationDesc = document.getElementById('cinicLocationDesc');

        obj.note                = document.getElementById("note").value;
        obj.drugLocationId      = drugLocationDesc.options[drugLocationDesc.selectedIndex].text;
        obj.cinicLocationId     = cinicLocationDesc.options[cinicLocationDesc.selectedIndex].text;

        // console.log(obj); return;
        axios.post("https://telepharma.one.th/management/api/vhv_transport_center/register_formDrug", obj, {
            headers: {
                'Content-Type': 'application/json',
                'hospitalKey': hospitalKey
            }
        })
        .then(res=>{              
            switch(res.data.status_code){
                case "200": 
                    Swal.fire({
                        title : res.data.status_code,
                        text: res.data.message,
                        icon: "success"
                    });
                    break;
                case "400":
                    Swal.fire({
                        title : res.data.status_code,
                        text: res.data.message,
                        icon: "error"
                    });
                    break;
                default:
                    console.log(res); 
            } 
            
        })
        .catch(err => {
            console.error(error);
        });
        
    });
</script>

@endsection