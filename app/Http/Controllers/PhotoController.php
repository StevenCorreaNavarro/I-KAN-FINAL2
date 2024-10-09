<?php

namespace App\Http\Controllers;

use App\Models\photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
            $photo = new Photo();
            $photo->title = $request->input('title');
            $photo->path = $path;
            $photo->save();
        }

        return redirect()->route('photos.index')->with('success', 'Photo uploaded successfully');
    }

    public function index()
    {
        $photos = Photo::all();
        return view('photos.index', compact('photos'));
    }

    public function show($id)
    {
        $photo = Photo::findOrFail($id);
        return view('photos.show', compact('photo'));
    }
}
