@extends("layouts.master")

@section("content")
<h1>{{ $post->title }}</h1>
<p>{{ $post->fulltext }}</p>

<hr/>

<a class="btn btn-success" href="{{ route('posts.edit', $post->id) }}">修改</a>
    <form method="post" action="/posts/{{$post->id}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE" />
        <button class="btn btn-danger">刪除</button>
    </form>
@endsection("content")


@section("footer")

@endsection("footer")