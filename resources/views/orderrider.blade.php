@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-success">ลงทะเบียนขอรับยา</h2>
    <form>
        <div class="row">
            <div class="col-md-6">
                <!-- Row for Name Fields -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3 input-group input-group-sm">
                            {{-- <label for="account_title_th" class="form-label">คำนำหน้าชื่อ</label>
                            <input type="text" class="form-control" id="account_title_th" value="นาย"> --}}
                            <span class="input-group-text text-white" id="account_title_th">คำนำหน้าชื่อ</span>
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
                <div class="mb-3">
                    <label for="birth_date" class="form-label">วันเกิด</label>
                    <input type="date" class="form-control" id="birth_date" value="1999-04-22">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">เพศ</label>
                    <input type="text" class="form-control" id="gender" value="ชาย">
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">เบอร์โทรศัพท์</label>
                    <input type="text" class="form-control" id="mobile" value="0987654321">
                </div>
                <div class="mb-3">
                    <label for="mobile_other" class="form-label">เบอร์โทรศัพท์อื่น</label>
                    <input type="text" class="form-control" id="mobile_other" value="0995656548">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">อีเมล</label>
                    <input type="email" class="form-control" id="email" value="test@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">ที่อยู่</label>
                    <input type="text" class="form-control" id="address" value="125 หมู่ 7 ต.ศรีภูมิ อ.เมือง จ.เชียงใหม่ 50200">
                </div>
                <div class="mb-3">
                    <label for="house_no" class="form-label">บ้านเลขที่</label>
                    <input type="text" class="form-control" id="house_no" value="125">
                </div>
                <div class="mb-3">
                    <label for="moo" class="form-label">หมู่ที่</label>
                    <input type="text" class="form-control" id="moo" value="7">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="road" class="form-label">ถนน</label>
                    <input type="text" class="form-control" id="road" value="ถ.คลองน้ำไหล">
                </div>
                <div class="mb-3">
                    <label for="province" class="form-label">จังหวัด</label>
                    <input type="text" class="form-control" id="province" value="เชียงใหม่">
                </div>
                <div class="mb-3">
                    <label for="tambon" class="form-label">ตำบล</label>
                    <input type="text" class="form-control" id="tambon" value="ศรีภูมิ">
                </div>
                <div class="mb-3">
                    <label for="amphur" class="form-label">อำเภอ</label>
                    <input type="text" class="form-control" id="amphur" value="เมือง">
                </div>
                <div class="mb-3">
                    <label for="postal_code" class="form-label">รหัสไปรษณีย์</label>
                    <input type="text" class="form-control" id="postal_code" value="50200">
                </div>
                <div class="mb-3">
                    <label for="note" class="form-label">หมายเหตุ</label>
                    <textarea class="form-control" id="note">ทดลองลงทะเบียน</textarea>
                </div>
                <div class="mb-3">
                    <label for="lat" class="form-label">ละติจูด</label>
                    <input type="text" class="form-control" id="lat" value="18.790519">
                </div>
                <div class="mb-3">
                    <label for="lng" class="form-label">ลองจิจูด</label>
                    <input type="text" class="form-control" id="lng" value="98.970773">
                </div>
                <div class="mb-3">
                    <label for="drugLocationDesc" class="form-label">ตำแหน่งห้องยา</label>
                    <input type="text" class="form-control" id="drugLocationDesc" value="ห้องจ่ายยา ชั้น 2">
                </div>
                <div class="mb-3">
                    <label for="cinicLocationDesc" class="form-label">ตำแหน่งคลินิก</label>
                    <input type="text" class="form-control" id="cinicLocationDesc" value="อายุรกรรมต่อมไร้ท่อ">
                </div>
                <div class="mb-3">
                    <label for="coverageDesc" class="form-label">สิทธิการรักษา</label>
                    <input type="text" class="form-control" id="coverageDesc" value="ประกันสังคม รพ.ทดสอบ">
                </div>
                <div class="mb-3">
                    <label for="callback_url" class="form-label">Callback URL</label>
                    <input type="text" class="form-control" id="callback_url" value="https://Example_hospital.com/callback">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">ส่งข้อมูล</button>
    </form>
</div>
@endsection