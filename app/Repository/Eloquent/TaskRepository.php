<?php

namespace App\Repository\Eloquent;

use App\Model\Task;
use App\Repository\TaskRepositoryInterface;
use Illuminate\Support\Collection;

class TaskRepository extends BaseRepository implements TaskRepositoryInterface
{

   /**
    * TaskRepository constructor.
    *
    * @param Task $model
    */
   public function __construct(Task $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return $this->model->all();
   }

    /**
    * @return Collection
    */
   public function mytasks($subjectId) : Collection
   {
       return $this->model::where('subject_id',$subjectId)->get();
   }
}