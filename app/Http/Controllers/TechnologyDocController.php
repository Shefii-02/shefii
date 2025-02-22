<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TechnologyDoc;
use Illuminate\Support\Str;

class TechnologyDocController extends Controller
{
    // List all documentation entries, ordered by position
    public function index()
    {
        $docs = TechnologyDoc::orderBy('position')->get();
        return view('techdocs.index', compact('docs'));
    }

    // Display a single documentation page based on slug
    public function show($slug)
    {
        $doc = TechnologyDoc::where('slug', $slug)->firstOrFail();
        return view('techdocs.show', compact('doc'));
    }

    // Optional: Show form to create a new documentation entry
    public function create()
    {
        return view('techdocs.create');
    }

    // Store a new documentation entry
    public function store(Request $request)
    {
        $data = $request->validate([
            'sidebar_title'     => 'required|string|max:255',
            'title'             => 'required|string|max:255',
            'description'       => 'required|string',
            'code'              => 'nullable|string',
            'position'          => 'required|integer',
        ]);

        // Create a slug from the title if not provided
        $data['slug'] = Str::slug($data['title']);

        TechnologyDoc::create($data);

        return redirect()->route('techdocs.index')->with('message', 'Documentation created successfully.');
    }
}
