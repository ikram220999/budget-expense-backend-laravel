<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Budget extends Model
{
    //
use SoftDeletes;

    protected $guarded = ['id'];

    public function expense()
    {
        return $this->hasMany(Expense::class, 'budget_id');
    }
}
