@extends('layouts.app')
@section('navbar')
    <div class="container">
        @include('admin.include.navbar')
    </div>
@endsection
@section('content')

<div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Liệt kê danh mục game</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('accessories.create')}}" class="btn btn-success">Thêm Phụ kiện game</a>

                    <table class="table table-striped" id="myTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên tiêu đề phụ </th>
                            <th>Hiển thị</th>
                            <th>Thuộc danh mục</th>
                            <th>Quản lý</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($accessories as $key => $access)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$access->title}}</td>
                            <td>
                                @if($access->status==0)
                                On
                                @else
                                Off
                                @endif
                            </td>
                            <td>{{$access->category->title}}</td>
                            <td>
                                <form action="{{ route('accessories.destroy',[$access->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Bạn muốn xóa phụ kiện game này không?');" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                                <a href="{{route('accessories.edit',$access->id)}}" class="btn btn-warning">sửa</a>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $accessories->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection