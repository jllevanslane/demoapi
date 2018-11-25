<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['fse_id', 'skillset_id', 'state_id'];
    protected $attributes = ['completed' => null];
    protected $with = ['fse', 'skillset', 'state'];
    protected $hidden = ['fse_id', 'skillset_id', 'state_id'];

    /*
     * A training plan belongs to one FSE.
     */
    public function fse() {
        return $this->belongsTo('App\Fse')->select('id' ,'name');
    }

    /*
     * A training plan belongs to one Skill Set.
     */
    public function skillset() {
        return $this->belongsTo('App\Skillset')->select('id', 'description');
    }

    /*
     * A training plan belongs to one state.
     */
    public function state() {
        return $this->belongsTo('App\State')->select('id', 'name');
    }
}
