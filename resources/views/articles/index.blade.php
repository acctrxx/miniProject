@extends('layout.app')
@section('title', 'Articles')
@section('active3', 'active')
@section('main_title', 'Articles Page')
@section('content')
    <div class="row">
      <div class="row" id="table-hover-row">
        <div class="col-12">
          <a href="{{ url('articles/create') }}" class="btn btn-primary mb-3">Create</a>
            <div class="card">
                <div class="card-header">
                  <h4>List Article</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                  <th>TITLE</th>
                                  <th>CONTENT</th>
                                  <th>CATEGORY</th>
                                  <th>DATE</th>
                                  <th>IMAGE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-500">How To Be A Lorem</td>
                                    <td>Neque porro quisquam est qui</td>
                                    <td>Sports</td>
                                    <td class="text-bold-500">2066-06-06</td>
                                    <td>
                                      <img src="https://d17v9ds8p1uxd3.cloudfront.net/img_humans/susy.png?versionId=ZLSGPaTcIT5xjzRRUpkx_cRmiE8ZlzqL" style="height: 50px;">
                                    </td>
                                    <td>
                                      <a href="{{ url('articles/edit') }}" class="btn btn-warning">Edit</a>
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
