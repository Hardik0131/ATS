<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_title',
        'slug',
        'company_name',
        'department',
        'location',
        'work_type',
        'employment_type',
        'experience_level',
        'min_experience_in_years',
        'hiring_urgency',
        'salary_min',
        'salary_max',
        'salary_currency',
        'skills',
        'responsibilities',
        'role_summary',
        'job_description',
        'closing_date',
        'status',
        'views',
        'published_at',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function applications(){
        return $this->hasMany(Applications::class);
    }

    public function views(){
        return $this->hasMany(ListingView::class);
    }
}
