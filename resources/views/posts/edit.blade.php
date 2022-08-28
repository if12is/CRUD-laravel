@extends('layouts.master')

@section('content')
    <h1 class="text-center">
        Edit Post
    </h1>
    <div class="container">
        <div class="w-88 mx-auto my-5">
            <form class="form-horizontal border p-5 rounded bg-soft-info m-auto" method="post"
                action="{{ route('post.update', $post->id) }}">
                @csrf
                {{-- @method('PUT') --}}
                <div class="mb-5">
                    <label class="form-label" for="title">Title </label>
                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                </div>
                <div class="mb-5">
                    <label class="form-label" for="body">Body</label>
                    <input type="text" class="form-control" name="body" value="{{ $post->body }}">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary w-full">
                        Update
                    </button>
                </div>
            </form>
        </div>

    </div>
@endsection
