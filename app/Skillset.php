<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skillset extends Model
{
    protected $fillable = ['description'];

    /*
     * A skill set can have many training plans.
     */
    public function plans() {
        return $this->hasMany('App\Plan');
    }
}
