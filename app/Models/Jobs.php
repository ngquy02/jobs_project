<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'title',
        'slug',
        'description',
        'requirements',
        'deadline',
        'eligibility',
        'references',
        'status',
        'currency',
        'rewardAmount',
        'companyId',
        'source',
        'sourceDetails',
        'isPublished',
        'isFeatured',
        'isActive',
        'isArchived',
        'createdAt',
        'updatedAt',
        'applicationLink',
        'applicationType',
        'skills',
        'totalWinnersSelected',
        'totalPaymentsMade',
        'isWinnersAnnounced',
        'type',
        'pocSocials',
        'timeToComplete',
        'hackathonprize',
        'winners'
    ];
}
