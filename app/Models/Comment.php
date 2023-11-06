<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'comment';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'message',
        'authorId',
        'jobId',
        'isActive',
        'isArchived',
        'createdAt',
        'updatedAt'
    ];
}
