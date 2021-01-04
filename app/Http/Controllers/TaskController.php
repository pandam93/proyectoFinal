<?php

namespace App\Http\Controllers;

use App\Model\Task;
use App\Repository\TaskRepositoryInterface;
use App\Http\Requests\StoreTaskRequest;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    private $TaskRepository;

    /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjectId = 6;
        $tasks = $this->taskRepository->mytasks($subjectId);

        return view('tasks.index')->with(compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        //
        $validated = $request->validated();
        if($validated){
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
        return view('tasks.show')->with(compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit')->with(compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTaskRequest $request, Task $task)
    {
        $validated = $request->validated();

        if($validated){
            $task->update($request->all());
        }
        return redirect()->route('tasks.index')
                        ->with('success','Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
