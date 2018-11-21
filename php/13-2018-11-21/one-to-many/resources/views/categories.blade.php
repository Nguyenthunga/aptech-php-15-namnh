@foreach($categories as $category)
<div>{{$category->id}} - {{$category->name}} -
@foreach($category->posts as $key => $post)
{{$post->title}}
@if($key !== (count($category->posts) - 1))
,&nbsp;
@endif
@endforeach
</div>
@endforeach