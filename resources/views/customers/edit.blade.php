@extends('home')
@section('title', 'Thêm mới khách hàng')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới khách hàng</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('customers.store',$customer->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" value="{{ $customer->name }}" class="form-control" name="name"  placeholder="Enter name" >
                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="{{ $customer->email }}" class="form-control" name="email" placeholder="Enter email" >
                        @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input type="date" value="{{ $customer->date }}" class="form-control" name="dob" >
                        @if($errors->has('dob'))
                            <span class="text-danger">{{ $errors->first('dob') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Tỉnh thành</label>
                        <select class="form-control" name="city_id">
                            @foreach($cities as $city)
                                <option
                                    @if($customer->city_id == $city->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{$city->id}}">{{$city->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

