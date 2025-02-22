<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'image',
        'description',
        'content',
        'images',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function interests() {
        return $this->hasMany(RealEstateInterest::class);
    }
    
}
