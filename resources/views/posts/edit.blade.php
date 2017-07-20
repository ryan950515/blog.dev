@extends("layouts.master")

@section("content")
    {!! Form::model($post->id,['method'=>'put', 'action'=>['PostsController@update', $post->id]]) !!}
{{--  <form method="post" action="/posts/{{$post->id}}">  --}}
{{--  {{csrf_field()}}  --}}
{{-- PUT, PATCH, DELETE 要使用input hidden --}}
    {{--  <input type="hidden" name="_method" value="PUT" />  --}}
        <div class="form-group">
            {!! Form::label('title', '文章標題') !!}
            {{--  <label for="title">文章標題</label>  --}}
            {!! Form::text('title',  $post->title, ['class'=>'form-control', 'id'=>'title']) !!}
            {{--  <input type="text" class="form-control" name="title" id="title" value="{{ $post->title}}"/>  --}}
        </div>
        <div class="form-group">
            {!! Form::label('fulltext', '文章內容'); !!}
            {{--  <label for="fulltext">文章內容</label>  --}}
            {!! Form::textarea('fulltext', $post->fulltext, ['class'=>'form-control', 'id'=>'fulltext',  'rows'=>3]) !!}
            {{--  <textarea class="form-control" name="fulltext" id="fulltext" > {{$post->fulltext}}</textarea>  --}}
        </div>
              {!! Form::submit('修改並存檔',['class'=>'btn btn-info']) !!}
        {{--  <button type="submit" class="btn btn-info">修改並存檔</button>  --}}
    {{--  </form>  --}}
    {!! Form::close() !!}
        {!! Form::open($post->id,['method'=>'put', 'action'=>['PostsController@destory', $post->id]]) !!}
    {{--  <form method="post" action="/posts/{{$post->id}}">  --}}
        {{--  {{csrf_field()}}  --}}
        {{--  <input type="hidden" name="_method" value="DELETE" />  --}}
        {!! Form::submit('刪除',['class'=>'btn btn-danger']) !!}
        {{--  <button class="btn btn-danger">刪除</button>  --}}
            {!! Form::close() !!}
    {{--  </form>  --}}

@endsection("content")


@section("footer")

@endsection("footer")