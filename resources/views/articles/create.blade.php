@extends('layout.app')
@section('title', 'Articles')
@section('main_title', 'Articles Create')
@section('content')
<a href="{{ url('articles/all') }}" class="btn btn-primary mb-3">Create</a>
<div class="card">
  <div class="card-header">
    <h4>Input Data</h4>
  </div>
    <div class="card-body">
      <div class="form-group">
        <label for="helperText">Title</label>
        <input type="text" id="helperText" class="form-control" placeholder="Title">
      </div>
      <div class="form-group">
        <label for="helperText">Content</label>
        <textarea type="text" id="helperText" class="form-control" placeholder="Content"></textarea>
      </div>
      <div class="form-group">
        <label for="helperText">Category</label>
        <input type="text" id="helperText" class="form-control" placeholder="Category">
      </div>
      <div class="form-group">
        <label for="helperText">Date</label>
        <input type="text" id="helperText" class="form-control" placeholder="Date">
      </div>
      <div class="form-group">
        <label for="helperText">Image</label>
        <input type="file" id="helperText" class="form-control">
      </div>
    </div>
</div>
@endsection