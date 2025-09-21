<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{

    /*
     * index
     * show
     * create
     * store
     * edit
     * update
     * destroy/delete
     */
    public function index() {
        $workers = Worker::all();

        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker) {
        return view('worker.show', compact('worker'));
    }

    public function create() {
        return view('worker.create');
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        $data["is_married"] = isset($data['is_married']);

        Worker::create($data);

        return redirect()->route('worker.index');
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
