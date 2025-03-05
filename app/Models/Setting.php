<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'logo',
        'footer_logo',
        'site_description',
        'phone',
        'email',
        'receiving_email',
        'map_address',
        'physical_address',
        'copyright',
        'favicon',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
