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
        <form action="{{ route('worker.index') }}" method="get">
            <input type="text" name="name" placeholder="Имя" value="{{ request()->get('name') }}">
            <input type="text" name="surname" placeholder="Фамилия" value="{{ request()->get('surname') }}">
            <input type="text" name="email" placeholder="Email" value="{{ request()->get('email') }}">
            <input type="number" name="from" placeholder="Age from" value="{{ request()->get('from') }}">
            <input type="number" name="to" placeholder="Age to" value="{{ request()->get('to') }}">
            <input type="text" name="description" placeholder="Desc" value="{{ request()->get('description') }}">
            <input type="checkbox" id="is_married" name="is_married" {{ request()->get('is_married') === 'on' ? 'checked' : ''}}>
            <label for="is_married">Женат</label>
            <input type="submit" value="Поиск">
            <a href="{{ route('worker.index') }}">Сбросить</a>
        </form>
    </div>
    <hr>
    <div>
        @foreach($workers as $worker)
            <div>
                <div>Name: {{ $worker->name }}</div>
                <div>Surname: {{ $worker->surname }}</div>
                <div>Age: {{ $worker->age }}</div>
                <div>Email: {{ $worker->email }}</div>
                <div>Description: {{ $worker->description }}</div>
                <div>Is Married: {{ $worker->is_married ? 'Женат/Замужем' : 'Холост(ая)' }}</div>
                <div>
                    <a href="{{ route('worker.show', $worker->id) }}">Просмотреть</a>
                    <a href="{{ route('worker.edit', $worker->id) }}">Редактировать</a>
                    <form action="{{ route('worker.delete', $worker) }}" method="post">
                        @csrf
                        @method('Delete')
                        <button type="submit">Удалить</button>
                    </form>
                </div>
            </div>
            <hr>
        @endforeach
        <div class="pagination">
            {{ $workers->withQueryString()->links() }}
        </div>
    </div>

    <style>
        .pagination svg {
            width: 20px;
            height: 20px;
        }
    </style>
</body>
</html>
