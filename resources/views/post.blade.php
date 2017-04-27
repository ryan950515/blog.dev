@extends("layouts.master")
@section("content")
    <p>Category : {{$category}}</p>
    <p>Date : {{$date}}</p>
    <p>ID : {{$id}}</p>
@endsection("content")

@section("footer")

<script>
{{-- 使用console.log  會直接出現在debug模式的console --}}
    console.log("{{$category}}{{$date}}{{$id}}");
    {{-- alert("{{$category}}{{$date}}{{$id}}"); --}}

</script>

@endsection("footer")

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Category : {{$category}}</p>
    <p>Date : {{$date}}</p>
    <p>ID : {{$id}}</p>

</body>
</html> --}}