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
                    <a href="{{route('blog.create')}}" class="btn btn-success">Thêm danh mục game</a>
                    
                    <table class="table table-striped" id="myTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên blog</th>
                            <th>slug</th>
                            <th>Mô tả</th>
                            <th>Hiển thị</th>
                            <th>Hình ảnh</th>
                            <th>Loại bài viết</th>
                            <th>Quản lý</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $key => $blog)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->slug}}</td>
                            <td>{!!$blog->description!!}</td>
                            <td>
                                @if($blog->status==1)
                                On
                                @else
                                Off
                                @endif
                            </td>
                            <td><img src="{{asset('uploads/blogs/'.$blog->image)}}" height="100px" weight="100px"></td>
                            <td>
                                @if($blog->kind_of_blog=='Blogs')
                                Blogs
                                @else
                                Hướng Dẫn Sử Dụng
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('blog.destroy',[$blog->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Bạn muốn xóa blog game này không?');" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                                <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-warning">sửa</a>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $blogs->links('pagination::bootstrap-4') }} 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection