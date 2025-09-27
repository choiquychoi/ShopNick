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
                <div class="card-header"> Cập nhật Nick game</div>
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
                    <a href="{{route('nick.index')}}" class="btn btn-success">liệt kê nick game</a>
                    <a href="{{route('nick.index')}}" class="btn btn-success">thêm nick game</a>
                    <form action="{{ route('nick.update', $nick->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" value="{{$nick->title}}" id="slug" require placeholder="..." name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="text" class="form-control" value="{{$nick->price}}" id="slug" require placeholder="..." name="price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" class="form-control-file" name="image"  placeholder="...">
                            <img src="{{asset('uploads/nick/'.$nick->image)}}" height="100px" weight="100px">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description" class="form-control" require placeholder="..."> {{$nick->description}} </textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" require name="status">
                                @if($nick->status==1)
                                <option value="1" selected>On</option>
                                <option value="0">Off</option>
                                @else
                                <option value="1">On</option>
                                <option value="0" selected >Off</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Thuộc game</label>
                            <select  required class="form-control " require name="category_id">
                                <option value="0">---Chọn Game cần Thêm</option>
                                @foreach($category as $key => $cate)
                                    <option value="{{$cate->id}}" {{$cate->id==$nick->category_id ? 'selected' : ''}}>{{$cate->title}}</option> 
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Thuộc game</label>
                            <textarea name="attribute" class="form-control" require placeholder="..."> {{$nick->attribute}} </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection