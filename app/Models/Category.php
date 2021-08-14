<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','description'];
    // table name
    protected $table = 'categories';
    // primaryKey
    public $primaryKey = 'id';
    // TimeStamps
    public $timestamps = true;

    public function subCategories(){
        return $this->hasMany('App\Models\SubCategory');
    }

    public function issues()
    {
        return $this->belongsToMany(Issue_categories::class);
    }
}
