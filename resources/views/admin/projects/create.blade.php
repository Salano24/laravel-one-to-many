@extends('layouts.admin')
@section('content')
<div class="container">
<h1 class="py-5">Add new Project</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
        <form action="{{route('admin.projects.store')}}" method="post" class="card p-3" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title <strong class="text-danger">*</strong></label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="add title" aria-describedby="titleHlper" value="{{old('title')}}">
        </div>

        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="cover_image">Cover Image</label>
            <input type="file" class="form-control" name="cover_image" id="cover_image" placeholder="Add a cover image" aria-describedby="coverImgHelper">
            <small id="coverImgHelper" class="form-text text-muted">Add a cover image</small>
        </div>
        @error('cover')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Description <strong class="text-danger">*</strong></label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="4" placeholder="add text">{{old('description')}}</textarea>
        </div>

        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection