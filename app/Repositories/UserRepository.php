<?php 

namespace App\Repositories;

use App\User;
use App\Repositories\Repository;

class UserRepository extends Repository
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }  
}