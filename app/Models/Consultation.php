<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $table = 'consultations';

    protected $fillable = [
        'name',
        'phone',
        'message',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
