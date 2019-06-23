<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectPost extends Model
{
    protected $table = 'project_posts';

    public $primaryKey= 'id';

    public $timestamps = true;

    public function user()
    {
      return $this ->belongsTo('App\User');
    }
}
