<?php

namespace App\Models\Experiment;

use Illuminate\Database\Eloquent\Model;

class Experiment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Date attributes
     *
     * @var array
     */
    protected $dates = [];

    /**
     * Relation to experiment_end_actions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function endAction()
    {
        return $this->hasOne(ExperimentEndAction::class);
    }
}