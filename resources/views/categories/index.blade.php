@extends('layout.app')
@section('title', 'Categories')
@section('active4', 'active')
@section('main_title', 'Categories Page')
@section('content')
    <div class="row">
      <div class="row" id="table-hover-row">
        <div class="col-12">
            <a href="{{ url('categories/create') }}" class="btn btn-primary mb-3">Create</a>
            <div class="card">
                <div class="card-header">
                  <h4>List Categories</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-500">Bitcoin Miner</td>
                                    <td>
                                      <a href="{{ url('categories/edit') }}" class="btn btn-warning">Edit</a>
                                        |
                                      <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">Sports</td>
                                    <td>
                                      <a href="{{ url('categories/edit') }}" class="btn btn-warning">Edit</a>
                                        |
                                      <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection