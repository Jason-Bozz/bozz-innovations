<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User;

class ListingController extends Controller
{  
    // Get and show all listings
    public function index() {
        return view('listings.index', [
            'heading' => 'Latest Listings',
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    // Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // show create form
    public function create() {
        return view('listings.create');
    }

    // store listing data
    public function store(Request $request) {
        // dd($request->file('img'));
        $formFields = $request->validate([
            // 'title' => 'required',
            // 'company' => ['required', Rule::unique('listings', 'company')],
            // 'location' => 'required',
            // 'email' => ['required', 'email'],
            // 'website' => 'required',
            // 'tags' => 'required',
            // 'description' => 'required'
            
            'title' => ['required', Rule::unique('listings', 'title')],
            'brand' => 'required',
            'body_wood' => 'required',
            'neck_wood' => 'required',
            // 'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('img')) {
            $formFields['img'] = $request->file('img')->store('logos', 'public');
        }

        // if($request->hasFile('img')) {
        //     $formFields['img'] = $request->file('img')->store('images', 'public/');
        // }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created succesfully!');
    }

    // Show edit form
    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }

    // Update listing data
    public function update(Request $request, Listing $listing) {

        // Make sure logged in user is the owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized action');
        }
        $formFields = $request->validate([
            'title' => 'required',
            'brand' => 'required',
            'body_wood' => 'required',
            'neck_wood' => ['required', 'email'],
            // 'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('img')) {
            $formFields['img'] = $request->file('img')->store('images', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing update succesfully!');
    }

    // Delete listing
    public function destroy(Listing $listing) {
        
        // Make sure logged in user is the owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized action');
        }

        $listing->delete();
        return redirect('/')->with('message', "Listing deleted succesfully!");
    }

    // Manage listing
    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
