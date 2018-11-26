@foreach($posts as $post)
<div>{{$post->title}} - @foreach($post->categories as $key => $category) {{$category->name}} @if($key !== count($post->categories))
  ,&nbsp; @endif @endforeach
</div>
@endforeach
