<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthStatus extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'problem','statement','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'health_status';
}
