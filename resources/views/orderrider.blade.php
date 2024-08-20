@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-success ">ลงทะเบียนขอรับยา</h2>
    <hr>
    <form>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <sapn for="birth_date"  class="input-group-text text-white" for="hn">HN</sapn>
                            <input type="text" class="form-control" id="hn" value="000088973">
                            <span class="input-group-text text-white" title="ค้นหา" id="fetch_hn"><i class="bi bi-search"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="hidden" id="coverageCode">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="coverageDesc" class="input-group-text text-white">สิทธิการรักษา</label>
                            <input type="text" class="form-control" id="coverageDesc" value="ประกันสังคม รพ.ทดสอบ">
                        </div>
                    </div>
                </div>
                <!-- Row for Name Fields -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3 input-group input-group-sm">                            
                            <span class="input-group-text text-white" for="account_title_th">คำนำหน้าชื่อ</span>
                            <input type="text" class="form-control" id="account_title_th" value="นาย" aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 input-group input-group-sm">
                            <span for="firstname" class="input-group-text text-white">ชื่อ</span>
                            <input type="text" class="form-control" id="firstname" value="ทดสอบ">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3 input-group input-group-sm">
                            <span for="lastname" class="input-group-text text-white">นามสกุล</span>
                            <input type="text" class="form-control" id="lastname" value="ทดลอง">
                        </div>
                    </div>
                </div>
                 {{-- --}} 
                 <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="birth_date" class="input-group-text text-white">วันเกิด</label>
                            <input type="date" class="form-control" id="birth_date" value="1999-04-22">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="gender" class="input-group-text text-white" >เพศ</label>
                            <input type="text" class="form-control" id="gender" value="ชาย">
                        </div>
                    </div>                    
                 </div>
                
                 <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="mobile" class="input-group-text text-white">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" id="mobile" value="0987654321">
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="mobile_other" class="input-group-text text-white">เบอร์โทรศัพท์อื่น</label>
                            <input type="text" class="form-control" id="mobile_other" value="0995656548">
                        </div>
                    </div>
                 </div>
                
                <br>
                <h2 class="text-success">ข้อมูลที่อยู่</h2>
                <hr>
                <div class="mb-3 input-group input-group-sm">
                    <label for="address" class="input-group-text text-white">ที่อยู่</label>
                    <input type="text" class="form-control" id="address" value="125 หมู่ 7 ต.ศรีภูมิ อ.เมือง จ.เชียงใหม่ 50200">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="house_no" class="input-group-text text-white">บ้านเลขที่</label>
                            <input type="text" class="form-control" id="house_no" value="125">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="moo" class="input-group-text text-white">หมู่ที่</label>
                            <input type="text" class="form-control" id="moo" value="7">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="road" class="input-group-text text-white">ถนน</label>
                            <input type="text" class="form-control" id="road" value="ถ.คลองน้ำไหล">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="tambon" class="input-group-text text-white">ตำบล</label>
                            <input type="text" class="form-control" id="tambon" value="ศรีภูมิ">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="amphur" class="input-group-text text-white">อำเภอ</label>
                            <input type="text" class="form-control" id="amphur" value="เมือง">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="province" class="input-group-text text-white">จังหวัด</label>
                            <input type="text" class="form-control" id="province" value="เชียงใหม่">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="postal_code" class="input-group-text text-white">รหัสไปรษณีย์</label>
                            <input type="text" class="form-control" id="postal_code" value="50200">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="email" class="input-group-text text-white">อีเมล</label>
                            <input type="email" class="form-control" id="email" value="test@gmail.com">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="lat" class="input-group-text text-white">ละติจูด</label>
                            <input type="text" class="form-control" id="lat" value="18.790519">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="lng" class="input-group-text text-white">ลองจิจูด</label>
                            <input type="text" class="form-control" id="lng" value="98.970773">
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="drugLocationDesc" class="input-group-text text-white">ตำแหน่งห้องยา</label>
                            <input type="text" class="form-control" id="drugLocationDesc" value="ห้องจ่ายยา ชั้น 2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 input-group input-group-sm">
                            <label for="cinicLocationDesc" class="input-group-text text-white">ตำแหน่งคลินิก</label>
                            <input type="text" class="form-control" id="cinicLocationDesc" value="อายุรกรรมต่อมไร้ท่อ">
                        </div>
                    </div>
                </div>
                
                <div class="mb-3 input-group input-group-sm">
                    <label for="callback_url" class="input-group-text text-white">Callback URL</label>
                    <input type="text" class="form-control" id="callback_url" value="https://Example_hospital.com/callback">
                </div>
                <div class="mb-3 input-group input-group-sm">
                    <label for="note" class="input-group-text text-white">หมายเหตุ</label>
                    <textarea class="form-control" id="note">ทดลองลงทะเบียน</textarea>
                </div>
            </div>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary"><i class="bi bi-floppy2"></i> ส่งข้อมูล</button>
        </div>
        
    </form>
</div>

<script>
    document.getElementById('fetch_hn').addEventListener('click', function(){
        axios.get('/patient',{params:{ hn:88973 }})
        .then(res => {
            console.log(res.data);
        })
        .catch(error => {
            console.error(error);
            })
        });
</script>

@endsection