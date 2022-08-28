@extends('layouts.master')

@section('content')
    <div class="container my-5">
        <h1 class="title text-center" style="
        font-family: cursive;">All postes</h1>
        <div class="main-container
            my-5">
            <table class="table bg-indigo-800">
                <thead class="text-light">
                    <tr class="text-center">
                        <th scope="col" class="bg-indigo-900">#ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Body</th>
                        <th scope="col">Oporation</th>
                    </tr>
                </thead>
                <tbody class="text-center bg-indigo-200 text-primary">
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row" class="bg-indigo-700 text-light">{{ $post->id }}</th>
                            <td class="font-bolder">{{ $post->title }}</td>
                            <td class="text-dark font-semibold">{{ $post->body }}</td>
                            <td>
                                <a type="button" href="{{ route('post.edit', $post->id) }}"
                                    class="btn btn-success btn-xs">Edit</a>
                                <a type="button" href="{{ route('post.delete', $post->id) }}"
                                    class="btn btn-danger btn-xs">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div>
            <div class="container-full">
                <div class="row">
                    <div class="col-md">
                        <a href="{{ route('post.create') }}" type="button" class="btn btn-primary btn-xs">Create A new
                            post</a>
                    </div>
                    <div class="col-md d-flex justify-content-end">
                        <a href="{{ route('post.delete.all') }}" type="button" class="btn btn-danger btn-xs">Delete All
                            posts</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop
