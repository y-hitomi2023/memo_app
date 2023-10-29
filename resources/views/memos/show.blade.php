  <!DOCTYPE html>
  <html lang="ja">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>memo show</title>
  </head>

  <body>
      {{-- <h1>タイトル</h1> --}}
      <a href="{{ route('memos.index') }}">戻る</a>
      <h1>{{ $memo->title }}</h1>
      {{-- <p>本文</p> --}}
      {{-- <p>{{ $memo->body }}</p> --}}
      <p>{!! nl2br(e($memo->body)) !!}</p>

      <button onclick='location.href="{{ route("memos.edit", $memo) }}"'>編集する</button>
  </body>

  </html>
