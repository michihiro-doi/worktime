<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name'];

    public function worktime(){
        return $this->hasMany('App\Worktime');
    }

}
