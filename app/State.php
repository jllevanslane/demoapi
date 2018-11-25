<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['name'];

    /*
     * A state can be applied to many training plans.
     */
    public function plans() {
        return $this->hasMany('App\Plan');
    }
}
