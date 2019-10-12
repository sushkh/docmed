<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'patient_email', 'docgor_email','review','stars'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'review';
}
