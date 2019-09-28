@extends('home')
@section('title', 'Thêm mới khách hàng')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Cập nhật tỉnh thành</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('cities.update',$city->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên tỉnh</label>
                        <input type="text" value="{{ $city->name }}" class="form-control" name="name"  placeholder="Enter name">
                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">OK</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

