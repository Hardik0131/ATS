<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecruiterController extends Controller
{
    public function candidates(){
        $listings = Listing::where('user_id', Auth::user()->id)->get();
        $candidates = Applications::where('user_id', Auth::user()->id)->get();

        return view('recruiter.candidates', compact('candidates'));
    }
}
