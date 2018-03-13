@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Create a Post</h1>
        <form method="POST" action="<?= action('PostsController@create');?>">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
            </div>
            
            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control"></textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary ">Publish</button>
            </div>
            
            @include('layouts.errors')
            
        </form>
    </div>
@endsection