<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Professionnel extends Model
{
    public function getRouteKeyName(){

        return 'slug';
    }


}
