<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    protected $table = 'people';

    public function status() {
        return $this->hasOne("status", "id", "status");
    }

}
