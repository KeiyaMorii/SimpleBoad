@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

    <h1>New Post</h1>

    <form action="/posts" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Content</label>
            <textarea name="content" class="form-control" ></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>

    <a href="/posts">Back</a>
@endsection