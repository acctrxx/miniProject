@extends('layout.app')
@section('title', 'Categories')
@section('main_title', 'Categories Create')
@section('content')
<a href="{{ url('categories/all') }}" class="btn btn-primary mb-3">Create</a>
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