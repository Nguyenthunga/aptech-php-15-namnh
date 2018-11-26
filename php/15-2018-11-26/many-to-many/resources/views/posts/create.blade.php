@extends('master.master') 
@section('content')
<form action="{{route('posts.store')}}" method="POST">
  {{csrf_field()}}

  <div>
    <label for="">Title</label>
    <input name="title" type="text">
  </div>
  <div>
    <label for="">Description</label>
    <input name="description" type="text">
  </div>
  <div>
    <label for="">Category</label>
    <select name="category" id="">
      @foreach($categories as $category)
    <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
  </div>
  <div>
    <label for="">Content</label>
    <textarea name="content" id="editor" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
    <script>
      // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor' );
    </script>
  </div>

  <div>
    <button type="submit">Create</button>
  </div>
</form>
@endsection
