@extends('layout.app')
@section('title', 'Articles')
@section('main_title', 'Articles Page')
@section('content')
    <div class="row">
      <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>List Articles</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>TITLE</th>
                                    <th>CONTENT</th>
                                    <th>IMAGE</th>
                                    <th>USERS</th>
                                    <th>CATEGORY</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($data as $item)
                                <tr>
                                    <td class="text-bold-500">{{ $item->title }}</td>
                                    <td>{{ $item->content }}</td>
                                    <td><img style="height: 60px;" src="{{ asset('profile/' . $item->image) }}" alt=""></td>
                                    <td class="text-bold-500">{{ $item->user->name }}</td>
                                    <td class="text-bold-500">{{ $item->category->name }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('article.show', $item->id) }}"><i class="bi bi-journal-text" style="font-size: 25px;"></i></a>
                                            <span class="mx-2">|</span>
                                            <a href="{{ route('article.edit', $item->id) }}"><i class="bi bi-pencil-square" style="font-size: 25px;"></i></a>
                                            <span class="mx-2">|</span>
                                            <a href="{{ route('article.delete', $item->id) }}"><i class="bi bi-trash-fill" style="font-size: 25px; color: red;"></i></a>
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