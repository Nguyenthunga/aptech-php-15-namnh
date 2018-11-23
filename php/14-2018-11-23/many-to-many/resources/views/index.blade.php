@foreach($posts as $post)
<div>{{$post->title}} - {{$post->category->name}}</div> @endforeach
