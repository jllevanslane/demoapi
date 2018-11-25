<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fse extends Model
{
    protected $fillable = ['name'];

    /*
     * A FSE can have many training plans.
     */
    public function plans() {
        return $this->hasMany('App\Plan');
    }
}
