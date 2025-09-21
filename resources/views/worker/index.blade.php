<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="{{ route('worker.create') }}">Добавить сотрудника</a>
    </div>
    <hr>
    <div>
        @foreach($workers as $worker)
            <div>
                <div>Name: {{ $worker->name }}</div>
                <div>Surname: {{ $worker->surname }}</div>
                <div>Age: {{ $worker->age }}</div>
                <div>Description: {{ $worker->description }}</div>
                <div>
                    <a href="{{ route('worker.show', $worker->id) }}">Просмотреть</a>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
</body>
</html>
