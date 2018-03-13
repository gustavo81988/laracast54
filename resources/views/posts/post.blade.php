<div class="blog-post">
  <h2 class="blog-post-title">
      <a href="<?= url('posts', $post->id);?>">{{$post->title}}</a>
  </h2>
  <p class="blog-post-meta"> 
      {{$post->created_at->toformattedDateString()}} 
  </p>
  {{$post->body}}
</div>