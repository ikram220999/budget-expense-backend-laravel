<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends Model
{
    //
    use SoftDeletes;

    protected $guarded = ['id'];

    public function budget()
    {
        return $this->belongsTo(Budget::class, 'budget_id');
    }
}
