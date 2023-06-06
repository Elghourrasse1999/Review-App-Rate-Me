<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    

    protected $fillable = [
        'name',
        'category_id',
        'description',
    ];
    
    // Définissez les relations avec les autres modèles
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
