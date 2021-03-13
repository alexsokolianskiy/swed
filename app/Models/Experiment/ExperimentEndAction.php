<?php

namespace App\Models\Experiment;

use Illuminate\Database\Eloquent\Model;

class ExperimentEndAction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'experiment_id',
        'action'
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
     * Relation to experiments
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function experiment()
    {
        return $this->belongsTo(Experiment::class);
    }
}