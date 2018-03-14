@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>{{ $post->title }}</h1>
        {{ $post->body }}
        
        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>{{$comment->created_at->toformattedDateString()}}:&nbsp </strong>
                        {{$comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>
        
        <hr>
        
        <div class="card">
            <div class="card-block">
                <form action="<?= url('posts', [$post->id,'comments'])?>" method="post">
                {{csrf_field()}}    
                    <div class="form-group">
                        <textarea class="form-control" name="body" placeholder="Your comment here."></textarea>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary ">Add Comment</button>
                    </div>
                </form>
                
                @include('layouts.errors')
            </div>
        </div>
        
    </div>
@endsection

