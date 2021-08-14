<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue_subcategories extends Model
{
    protected $fillable = ['issue_id','subcategory_id'];
    // table name
    protected $table = 'issue_subcategories';
    // primaryKey
    public $primaryKey = 'id';
    // TimeStamps
    public $timestamps = true;
}
