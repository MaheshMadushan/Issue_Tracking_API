<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['imagable_type','imagable_id','size','path','name','extension'];
    // table name
    protected $table = 'images';
    // primaryKey
    public $primaryKey = 'id';
    // TimeStamps
    public $timestamps = true;

    public function imageable()
    {
        return $this->morphTo();
    }
}
