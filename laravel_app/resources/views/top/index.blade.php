<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- asset関数を用いると、publicディレクトリのファイルを参照できる--}}
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>
<body>
    <h1>トップページ</h1>
    {{-- 中括弧2つで囲むことによって変数を表示可能 --}}

    {{-- route(ルーティング名)とすることでformからURLにアクセス可能 --}}
    <form action="{{ route('top') }}">
        <label for="">名前</label>
        <input type="text" name="name">
        <label for="">メアド</label>
        <input type="text" name="email">

        <button type="submit">送信</button>
    </form>

    @if ($name)
        <p>名前：{{$name}}</p>
    @endif
    
    @if ($email)
        <p>メアド:{{$email}}</p>
    @endif
</body>
</html>