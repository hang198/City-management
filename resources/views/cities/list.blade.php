@extends('home')
@section('title','Quản lý tỉnh thành ')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Tỉnh Thành</h1>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên tỉnh thành</th>
                    <th scope="col">Mã tỉnh thành</th>
                    <th scope="col">Số khách hàng</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                @foreach($cities as $key=>$city)
                    <tbody>
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $city->name }}</td>
                        <th scope="row">{{ $city->id }}</th>
                        <td>{{ count($city->customers) }}</td>
                        <td>
                            <a href="" class="btn btn-primary">Chi tiết</a>
                            <a href="{{ route('cities.edit',$city->id) }}" class="btn btn-success">Sửa</a>
                            <a href="{{ route('cities.destroy',$city->id) }}" class="btn btn-danger"
                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                        </td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
    <a href="{{ route('cities.create') }}">Thêm mới</a>
@endsection

