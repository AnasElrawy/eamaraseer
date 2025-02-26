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
        'service_id',
        'employee_id'
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function interests() {
        return $this->hasMany(RealEstateInterest::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }
    
}
