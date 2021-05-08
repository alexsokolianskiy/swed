<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use App\Models\Experiment\ExperimentQueue;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relation to experiment queue table
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function expQueueInstance()
    {
        return $this->hasOne(ExperimentQueue::class);
    }

    public function getName()
    {
        return $this->getAttribute('name');
    }
}
