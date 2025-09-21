<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление сотрудника</title>
    <style>
        .form-group {
            margin-bottom: 10px;
        }
        .form-group > *  {
            display: block;
        }
    </style>
</head>
<body>
<h1>Добавление сотрудника</h1>
<hr>
<form action="{{ route('worker.update', $worker->id) }}" method="Post">
    @csrf
    @method('Patch')
    <div class="form-group">
        <label for="">Имя</label>
        <input type="text" name="name" placeholder="Введите имя" value="{{ $worker->name; }}">
    </div>
    <div class="form-group">
        <label for="">Фамилия</label>
        <input type="text" name="surname" placeholder="Введите фамилию" value="{{ $worker->surname }}">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Введите email" value="{{ $worker->email; }}">
    </div>
    <div class="form-group">
        <label for="">Возраст</label>
        <input type="number" name="age" placeholder="Введите возраст" value="{{ $worker->age; }}">
    </div>
    <div class="form-group">
        <label for="">Описание</label>
        <textarea id="" cols="30" rows="10"  name="description" placeholder="Описание сотрудника">{{ $worker->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="is_married"><input id="is_married" type="checkbox" name="is_married" {{ $worker->is_married ? 'checked' : '' }}> Женат/Замужем</label>
    </div>
    <button type="submit">Сохранить</button>
</form>
</body>
</html>
