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
                <div class="card-header">Thêm phụ kiện game</div>
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
                    <a href="{{route('accessories.index')}}" class="btn btn-success">liệt kê phụ kiện game</a>
                    <form action="{{route('accessories.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" require placeholder="..." name="title">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" require name="status">
                                <option value="0">On</option>
                                <option value="1">Off</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Thuộc game</label>
                            <select class="form-control" require name="category_id">
                                @foreach($category as $key => $cate)
                                    <option value="{{$cate->id}}">{{$cate->title}}</option> 
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm phụ kiện</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection