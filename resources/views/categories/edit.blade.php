@extends('layout.app')
@section('title', 'Categories')
@section('main_title', 'Categories Edit')
@section('content')
<a href="{{ url('categories/all') }}" class="btn btn-warning mb-3">Edit</a>
<div class="card">
  <div class="card-header">
    <h4>Input Data</h4>
  </div>
    <div class="card-body">
      <div class="form-group">
        <label for="helperText">Name</label>
        <input type="text" id="helperText" class="form-control" placeholder="Name">
      </div>
    </div>
</div>
@endsection