<?php 

namespace App\Repositories;

use App\Project;
use App\Repositories\Repository;

class ProjectRepository extends Repository
{
    public function __construct(Project $model)
    {
        parent::__construct($model);
    }  
}