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
                <div class="card-header">Cập nhật blog game</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    </ul>
                </div>
                @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('blog.index')}}" class="btn btn-success">Liệt kê blog game</a>
                    <a href="{{route('blog.index')}}" class="btn btn-primary">Thêm blog game</a>
                    <form action="{{route('blog.update',[$blog->id])}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" value="{{$blog->title}}" id="slug" onkeyup="ChangeToSlug()" require placeholder="..." name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" class="form-control" value="{{$blog->slug}}" require placeholder="..." id="convert_slug" name="slug">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" class="form-control-file" name="image"  placeholder="...">
                            <img src="{{asset('uploads/blogs/'.$blog->image)}}" height="100px" weight="100px">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea id="ckeditor_desc" name="description" class="form-control" require placeholder="..."> value="{{$blog->description}}"</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Content</label>
                            <textarea name="content" id="ckeditor_blog" class="form-control" require placeholder="...">value="{{$blog->content}}"</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            
                            <select class="form-control" require name="status">
                                @if($blog->status==0)
                                <option value="1" selected>On</option>
                                <option value="0">Off</option>
                                @else
                                <option value="1">On</option>
                                <option value="0" selected >Off</option>
                                @endif
                            </select>

                            <select class="form-control" require name="kind_of_blog">
                                @if($blog->kind_of_blog=='Blogs')
                                <option value="Blogs" selected>Blogs</option>
                                <option value="huongdan">Hướng dẫn</option>
                                @else
                                <option value="Blogs" >Blogs</option>
                                <option value="huongdan" selected>Hướng dẫn</option>
                                @endif
                            </select>
                            
                            Loại tin
                        </div>
                        <button type="submit" class="btn btn-primary">Add Blogs</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection