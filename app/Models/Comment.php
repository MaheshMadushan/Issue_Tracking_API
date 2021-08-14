<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['issue_id','body'];
    // table name
    protected $table = 'comments';
    // primaryKey
    public $primaryKey = 'id';
    // TimeStamps
    public $timestamps = true;

    public function issue(){
        return $this->belongsTo("App\Models\Issue");
    }

    public function images()
    {
        return $this->morphMany('Image', 'imageable');
    }
}
