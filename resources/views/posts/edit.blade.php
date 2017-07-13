@extends("layouts.master")

@section("content")
<form method="post" action="/posts/{{$post->id}}">
{{csrf_field()}}
{{-- PUT, PATCH, DELETE 要使用input hidden --}}
    <input type="hidden" name="_method" value="PUT" />
        <div class="form-group">
            <label for="title">文章標題</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $post->title}}"/>
        </div>
        <div class="form-group">
            <label for="fulltext">文章內容</label>
            <textarea class="form-control" name="fulltext" id="fulltext" > {{$post->fulltext}}</textarea>
        </div>
       
        <button type="submit" class="btn btn-info">修改並存檔</button>
    </form>
    <form method="post" action="/posts/{{$post->id}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE" />
        <button class="btn btn-danger">刪除</button>
    </form>

@endsection("content")


@section("footer")

@endsection("footer")