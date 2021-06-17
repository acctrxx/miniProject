@extends('layout.app')
@section('title', 'Categories')
@section('main_title', 'Categories Create')
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
    <form action="{{ route('category.update', $data->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="helperText">Categories</label>
        <input value="{{ old('name', $data->name) }}" type="text" id="helperText" name="name" class="form-control" placeholder="Name">
      </div>
      <button class="btn btn-primary">Sumbit</button>
    </div>
  </form>
</div>
@endsection