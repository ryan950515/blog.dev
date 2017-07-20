@extends("layouts.master")

@section("content")
    {!! Form::open(['method'=>'post', 'action'=>'PostsController@store']) !!}
        <div class="form-group">
            {!! Form::label('title', '文章標題') !!}
            {{--  <label for="title">文章標題</label>  --}}
            {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'請輸入標題']) !!}
            {{--  <input type="text" class="form-control" name="title" id="title" placeholder="請輸入標題"/>  --}}
        </div>
        <div class="form-group">
            {!! Form::label('fulltext', '文章內容'); !!}
            {{--  <label for="fulltext">文章內容</label>  --}}
            {!! Form::textarea('fulltext', null, ['class'=>'form-control', 'id'=>'fulltext', 'placeholder'=>'請輸入內容', 'rows'=>3]) !!}
            {{--  <textarea class="form-control" name="fulltext" id="fulltext" placeholder="請輸入內容"/></textarea>  --}}
        </div>
       {!! Form::submit('存檔',['class'=>'btn btn-primary']) !!}
        {{--  <button type="submit" class="btn btn-primary">存檔</button>  --}}
        {!! Form::close() !!}
{{--  <form method="post" action="/posts">
{{csrf_field()}}
        <div class="form-group">
            <label for="title">文章標題</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="請輸入標題"/>
        </div>
        <div class="form-group">
            <label for="fulltext">文章內容</label>
            <textarea class="form-control" name="fulltext" id="fulltext" placeholder="請輸入內容"/></textarea>
        </div>
       
        <button type="submit" class="btn btn-primary">存檔</button>
    </form>  --}}
@endsection("content")


@section("footer")

@endsection("footer")