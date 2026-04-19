<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;

    protected $fillable = [
        'listing_id',
        'applicant_name',
        'applicant_email',
        'slug',
        'mobile_number',
        'current_location',
        'portfolio_link',
        'linkedin_link',
        'resume_path',
        'cover_letter',
        'resume_score',
        'status',
    ];

    public function listing(){
        return $this->belongsTo(Listing::class);
    }
}
