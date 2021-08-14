<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = ['title','body','uuid','slug'];
    // table name
    protected $table = 'issues';
    // primaryKey
    public $primaryKey = 'id';
    // TimeStamps
    public $timestamps = true;

    public function comment(){
        return $this->hasMany("App\Models\Comment");
    }

    public function subCategories()
    {
        return $this->belongsToMany(Issue_subcategories::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Issue_categories::class);
    }

    public function images()
    {
        return $this->morphMany('Image', 'imageable');
    }

}
