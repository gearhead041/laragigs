<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()
                ->filter(request(['tag', 'search']))->get()
        ]);
    }

    public function show(Listing $listing)
    {
        return view('listings.show', ['listing' => $listing]);
    }

    //show create form
    public function create()
    {
        return view('listings.create');
    }
}