<?php

namespace App\Models\Experiment;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Experiment extends Model
{
    const ARDUINO = 1;
    const OPEN_HAB = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'time',
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

    /**
     * Arduino scope
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeArduino(Builder $query)
    {
        return $query->where('type', static::ARDUINO);
    }
    /**
     * OpenHab scope
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeOpenHab(Builder $query)
    {
        return $query->where('type', static::OPEN_HAB);
    }
}