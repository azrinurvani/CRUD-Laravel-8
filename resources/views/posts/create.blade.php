@extends('layouts.main')

@section('title')
 Create Posts
@endsection

@section('content')
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"> 
    @csrf <!-- ini adalah input token yg wajib dan di hide, untuk pengecekan nilai token di inspect pada browser-->
    <!-- title -->
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title">
    </div>
    <!-- thumbnail -->
    <div class="form-group">
        <label for="thumbnail">Thumbnail</label>
        <input class="form-control" type="file" name="thumbnail">
    </div>
   <!-- content -->
   <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="content" cols="30" rows="4"></textarea>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Create" name="btnSubmit">
    </div>
</form>
@endsection