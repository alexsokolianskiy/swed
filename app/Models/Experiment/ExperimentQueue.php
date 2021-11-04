<?php

namespace App\Models\Experiment;

use App\Models\User;
use App\Models\Experiment\Experiment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\Experiments\ExperimentQueueFactory;

class ExperimentQueue extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'experiment_id',
        'user_id',
        'start',
        'end',
        'status'
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
    protected $dates = [
    ];

    /**
     * Relation to experiment table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function experiment()
    {
        return $this->belongsTo(Experiment::class);
    }

    /**
     * Relation to user table
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return ExperimentQueueFactory::new();
    }
}
