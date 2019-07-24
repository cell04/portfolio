<?php

namespace App;

use App\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'image', 'user_id', 'type', 
        'link', 'credential_username', 'credential_password'
    ];

    /**
     * The project belongs to a user
     *
     * @return object
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
