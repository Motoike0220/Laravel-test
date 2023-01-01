<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>テスト</title>
</head>
<body>
    <h1>Laravelテスト</h1>
    @foreach($values as $value)
    <p>{{$value->id}}</p>
    <p>{{$value->text}}</p>
    @endforeach
</body>
</html>
