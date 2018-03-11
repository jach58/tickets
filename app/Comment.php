<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id']; // con guarded las columnas  que no pueden ser asignables

    public function ticket(){

        return $this->belongsTo('App\Ticket');
    }

}
