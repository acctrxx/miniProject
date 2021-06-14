@extends('layout.app')
@section('active2', 'active')
@section('title', 'Users')
@section('main_title', 'Users Page')
@section('content')
    <div class="row">
      <div class="row" id="table-hover-row">
        <div class="col-12">
            <a href="{{ url('users/create') }}" class="btn btn-primary mb-3">Create</a>
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
                                    <th>RATE</th>
                                    <th>SKILL</th>
                                    <th>TYPE</th>
                                    <th>LOCATION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-500">Michael Right</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-500">UI/UX</td>
                                    <td>Remote</td>
                                    <td>Austin,Taxes</td>
                                    <td>
                                      <a href="{{ url('users/edit') }}" class="btn btn-warning">Edit</a>
                                        |
                                      <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">Morgan Vanblum</td>
                                    <td>$13/hr</td>
                                    <td class="text-bold-500">Graphic concepts</td>
                                    <td>Remote</td>
                                    <td>Shangai,China</td>
                                    <td>
                                      <a href="{{ url('users/edit') }}" class="btn btn-warning">Edit</a>
                                        |
                                      <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">Tiffani Blogz</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-500">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td>
                                      <a href="{{ url('users/edit') }}" class="btn btn-warning">Edit</a>
                                        |
                                      <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">Ashley Boul</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-500">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td>
                                        <a href="{{ url('users/edit') }}" class="btn btn-warning">Edit</a>
                                            |
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-500">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td>
                                      <a href="{{ url('users/edit') }}" class="btn btn-warning">Edit</a>
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