@extends('layouts.app')
@section('navbar')
    <div class="container">
        @include('admin.include.navbar')
    </div>
@endsection
@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật danh mục game</div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('category.index')}}" class="btn btn-success">liệt danh mục game</a>
                    <a href="{{route('category.create')}}" class="btn btn-success">Thêm danh mục game</a>
                    <form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" require value="{{$category->title}}" placeholder="..." name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" class="form-control-file" name="image"  placeholder="...">
                            <img src="{{asset('uploads/category/'.$category->image)}}" height="100px" weight="100px">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description" class="form-control" require placeholder="...">{{$category->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" require name="status">
                                @if($category->status==0)
                                <option value="0" selected>On</option>
                                <option value="1">Off</option>
                                @else
                                <option value="0">On</option>
                                <option value="1" selected >Off</option>
                                @endif
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection