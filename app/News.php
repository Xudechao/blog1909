<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'new_id';
    public $timestamps = false;


    // 黑名单
    protected $guarded = [];
}
