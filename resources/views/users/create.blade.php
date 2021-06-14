@extends('layout.app')
@section('title', 'Users')
@section('main_title', 'Users Create')
@section('content')
<a href="{{ url('users/all') }}" class="btn btn-primary mb-3">Create</a>
<div class="card">
  <div class="card-header">
    <h4>Input Data</h4>
  </div>
    <div class="card-body">
      <div class="form-group">
        <label for="helperText">Name</label>
        <input type="text" id="helperText" class="form-control" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="helperText">Rate</label>
        <input type="text" id="helperText" class="form-control" placeholder="Rate">
      </div>
      <div class="form-group">
        <label for="helperText">Skill</label>
        <input type="text" id="helperText" class="form-control" placeholder="Skill">
      </div>
      <div class="form-group">
        <label for="helperText">Type</label>
        <input type="text" id="helperText" class="form-control" placeholder="Type">
      </div>
      <div class="form-group">
        <label for="helperText">Location</label>
        <input type="text" id="helperText" class="form-control" placeholder="Location">
      </div>
    </div>
</div>
@endsection