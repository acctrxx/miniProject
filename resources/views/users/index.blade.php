@extends('layout.app')
@section('title', 'Users')
@section('main_title', 'Users Page')
@section('content')
    <div class="row">
      <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>List Users</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>IMAGE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($data as $item)
                                <tr>
                                    <td class="text-bold-500">{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td class="text-bold-500"><img style="height: 40px;" src="{{ asset('profile/' . $item->image) }}" alt=""></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('user.edit', $item->id) }}"><i class="bi bi-pencil-square" style="font-size: 25px;"></i></a>
                                            <div class="mx-2">|</div>
                                            <a href="{{ route('user.delete', $item->id) }}"><i class="bi bi-trash-fill" style="font-size: 25px; color: red;"></i></a>
                                         </div>
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection