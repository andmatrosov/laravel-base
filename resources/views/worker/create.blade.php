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
<form action="{{ route('worker.store') }}" method="Post">
    @csrf
    <div class="form-group">
        <label for="">Имя</label>
        <input type="text" name="name" placeholder="Введите имя">
    </div>
    <div class="form-group">
        <label for="">Фамилия</label>
        <input type="text" name="surname" placeholder="Введите фамилию">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Введите email">
    </div>
    <div class="form-group">
        <label for="">Возраст</label>
        <input type="number" name="age" placeholder="Введите возраст">
    </div>
    <div class="form-group">
        <label for="">Описание</label>
        <textarea id="" cols="30" rows="10"  name="description" placeholder="Описание сотрудника"></textarea>
    </div>
    <div class="form-group">
        <label for="is_married"><input id="is_married" type="checkbox" name="is_married"> Женат/Замужем</label>
    </div>
    <button type="submit">Добавить</button>
</form>
</body>
</html>
