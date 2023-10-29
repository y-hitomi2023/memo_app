<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memo show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    {{-- <h1>タイトル</h1> --}}
    <a href="{{ route('memos.index') }}">戻る</a>
    <h1>{{ $memo->title }}</h1>
    {{-- <p>本文</p> --}}
    {{-- <p>{{ $memo->body }}</p> --}}
    <p>{!! nl2br(e($memo->body)) !!}</p>

    <div class="button-group">
        <button onclick='location.href="{{ route("memos.edit", $memo) }}"'>編集する</button>
        <form action="{{ route('memos.destroy', $memo) }}"method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>
</body>

</html>
