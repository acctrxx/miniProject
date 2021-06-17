@extends('layout.app')
@section('title', 'Articles')
@section('main_title', 'Articles Create')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card">
  <div class="card-header">
    <h4>Input Data</h4>
  </div>
  <div class="card-body">
    <form action="{{ route('article.update', $data->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="helperText">Title</label>
        <input value="{{ old('title', $data->title) }}" type="text" id="helperText" name="title" class="form-control" placeholder="Title">
      </div>
      <div class="form-group">
        <div class="form-group mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Content</label>
          <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{ old('content', $data->content) }}</textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupSelect01">User</label>
          <select class="form-select" id="inputGroupSelect01" name="user_id">
            @foreach ($users as $user)
              <option value="{{ $user->id }}" {{ $user->id == $data->user_id ? 's elected' : '' }}>{{ $user->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupSelect01">Category</label>
          <select class="form-select" id="inputGroupSelect01" name="category_id">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}" {{ $category->id == $data->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="helperText">Image</label>
        <input value="{{ old('image'), $data->image }}" type="file" id="helperText" class="form-control" name="image_file" placeholder="Image">
      </div>
      <button class="btn btn-primary">Sumbit</button>
    </div>
  </form>
</div>
@endsection