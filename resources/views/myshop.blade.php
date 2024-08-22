@extends('layouts.myapp')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card">
                    <h6>เกี่ยวกับร้าน IT Shop</h6>
                </div>
                <div class="card-body">
                    <li>ที่อยู่: {{$address}}</li>
                    <li>เบอร์โทร: {{$mobilephone}}</li>
                    <li>ที่ตั้งร้าน: {{$location}}</li>
                </div>
            </div>
        </div>
    </div>
@endsection