<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'violation', 'category','1st_sanction','2nd_sanction','3rd_sanction','4th_sanction','5th_sanction','6th_sanction','7th_sanction'
    ];

}
