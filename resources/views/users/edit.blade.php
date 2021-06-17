@extends('layout.app')
@section('title', 'Users')
@section('main_title', 'Users Edit')
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
    <form action="{{ route('user.update', $data->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="helperText">Name</label>
        <input value="{{ old('name', $data->name) }}" type="text" id="helperText" name="name" class="form-control" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="helperText">Email</label>
        <input value="{{ old('email', $data->email) }}" type="email" id="helperText" name="email" class="form-control" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="helperText">Current Password</label>
        <input value="{{ old('password', $data->password) }}" type="password" id="helperText" class="form-control" name="current_password" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="helperText">New Password</label>
        <input type="password" id="helperText" class="form-control" name="password" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="helperText">Retype Password</label>
        <input type="password" id="helperText" class="form-control" name="password_confirmation" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="helperText">Image</label>
        <input value="{{ old('image', $data->image) }}" type="file" id="helperText" class="form-control" name="image" placeholder="Image">
      </div>
      <button class="btn btn-primary">Sumbit</button>
    </div>
  </form>
</div>
@endsection