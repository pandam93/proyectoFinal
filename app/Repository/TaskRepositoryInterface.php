<?php
namespace App\Repository;

use App\Model\Task;
use Illuminate\Support\Collection;

interface TaskRepositoryInterface
{
   public function all(): Collection;
   public function mytasks($subjectId): Collection;
}