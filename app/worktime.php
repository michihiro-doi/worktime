<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worktime extends Model
{
    protected $fillable = ['employee_id','start','end','is_rest'];
    protected $nullable = ['start','end','is_rest'];

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
    
}
