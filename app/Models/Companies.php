<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'companies';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'logo',
        'url',
        'industry',
        'twitter',
        'bio',
        'createdAt',
        'updatedAt',
        'isArchived',
        'isActive'
    ];
}
