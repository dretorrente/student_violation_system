<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'violation', 
        'category',
        'first_sanction',
        'second_sanction',
        'third_sanction',
        'fourth_sanction',
        'fifth_sanction',
        'sixth_sanction',
        'seventh_sanction'
    ];

    public $timestamps = true;
}
