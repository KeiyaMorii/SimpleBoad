@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

    <h1>Editing Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error}} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/posts/{{ $post->id }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" value="{{ old('title') == ''? $post->title : old('title') }}" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Content</label>
            <textarea name="content" class="form-control" >{{ old('content') == '' ? $post->content : old('content') }}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>

    <a href="/posts/{{ $post->id }}">Show</a>
    <a href="/posts">Back</a>
    
@endsection