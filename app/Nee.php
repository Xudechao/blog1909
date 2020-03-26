<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nee extends Model
{
    protected $table = 'nee';
    protected $primaryKey = 'n_id';
    public $timestamps = false;

    // 黑名单
    protected $guarded = [];
}
