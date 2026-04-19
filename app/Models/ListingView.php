<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingView extends Model
{
    use HasFactory;

    protected $table = 'job_views';

    protected $fillable = [
        'listing_id',
        'ip_address',
        'user_agent',
        'visitor_token',
    ];

    public function listing(){
        return $this->belongsTo(Listing::class);
    }

}
