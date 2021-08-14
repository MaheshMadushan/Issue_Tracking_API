<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['name','description'];
    // table name
    protected $table = 'sub_categories';
    // primaryKey
    public $primaryKey = 'id';
    // TimeStamps
    public $timestamps = true;

    public function subCategories(){
        return $this->belongsTo('App\Models\Category');
    }
    public function issues()
    {
        return $this->belongsToMany(Issue_subcategories::class);
    }
}
