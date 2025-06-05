<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>タスク作成ページ</h1>
    <form action="{{ route('task.store') }}" method="POST">
        @csrf
        <label>タイトル</label>
        <input type="text" name="title">

        <label>内容</label>
        <textarea name="content"></textarea>

        <button type="submit">追加</button>        
    </form>
    <a href="{{ route("task") }}">戻る</a>
</body>
</html>