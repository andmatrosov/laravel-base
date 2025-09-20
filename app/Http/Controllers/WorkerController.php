<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index() {
        $workers = Worker::all();

        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker) {
        return view('worker.show', compact('worker'));
    }

    public function create() {
        $worker = [
            'name' => 'Max',
            'surname' => 'Eblanov',
            'email' => 'eblanov@mail.ru',
            'age' => '20',
            'description' => 'Работаю даже на парковке',
            'is_married' => false,
        ];

        Worker::create($worker);
        return 'Ivan was created';
    }

    public function update() {
        $worker = Worker::find(2);

        $worker->update([
            'name' => 'Антон',
            'surname' => 'Норм',
            'email' => 'anton@mail.ru'
        ]);

        return 'Was updated';
    }

    public function delete() {
        $worker = Worker::find(2);

        $worker->delete();

        return 'Was deleted';
    }
}
