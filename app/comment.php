<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public $table="comments";

    public function article()
    {
        return $this->belongsTo('App\Article');
    }


}
