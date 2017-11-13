<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offense extends Model
{
//    public function user(){
//        return $this->belongsTo('App\User');
//    }
    protected $fillable = [
        'student_id', 'date_commit','persons_involve','violation_id','offense_number_attempt','student_offense','sanction','description',
    ];
    public $incrementing = true;
}
