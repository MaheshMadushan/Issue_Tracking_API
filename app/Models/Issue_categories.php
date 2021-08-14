<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue_categories extends Model
{
    protected $fillable = ['issue_id','category_id'];
    // table name
    protected $table = 'issue_categories';
    // primaryKey
    public $primaryKey = 'id';
    // TimeStamps
    public $timestamps = true;
}

