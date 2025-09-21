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
                <div class="card-header">Liệt kê blog game</div>
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
                    <a href="{{route('blog.index')}}" class="btn btn-success">liệt kê blog game</a>
                    <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="slug" onkeyup="ChangeToSlug()" require placeholder="..." name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" class="form-control" require placeholder="..." id="convert_slug" name="slug">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" class="form-control-file" name="image"  placeholder="...">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea id="ckeditor_desc" name="description" class="form-control" require placeholder="..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Content</label>
                            <textarea name="content" id="ckeditor_blog" class="form-control" require placeholder="..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            
                            <select class="form-control" require name="status">
                                <option value="1">on</option>
                                <option value="0">off</option>
                            </select>

                            <label for="exampleFormControlSelect1">Loại tin</label>
                            
                            <select class="form-control" require name="kind_of_blog">
                                <option value="Blogs">Blogs</option>
                                <option value="huongdan">Hướng dẫn</option>
                            </select>

                        </div>
                        <button type="submit" class="btn btn-primary">Add Blogs</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection