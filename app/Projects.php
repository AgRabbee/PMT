<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public function servers()
    {
        return $this->belongsToMany(Servers::class,'project__servers', 'project_id', 'id')
            ->withPivot('ip', 'port', 'path', 'url', 'web_login_cred', 'file_access_cred', 'vpn_cred');
    }
}
