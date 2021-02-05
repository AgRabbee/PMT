<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servers extends Model
{
    public function projects() {
        return $this->belongsToMany(Projects::class, 'project__servers', 'server_id', 'id');
    }
}
