<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    // Display create form
    public function create()
    {
        return view('admin.gallery.create');
    }

    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);

        return view('admin.gallery.index', compact('galleries'));
    }

    // Save gallery image
    // Save multiple gallery images
    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'images' => 'required|array|min:1',
            'images.*' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Loop through each uploaded image
        foreach ($request->file('images') as $image) {

            // Store image in storage/app/public/galleries
            $imagePath = $image->store('galleries', 'public');

            // Save each image as a separate database record
            Gallery::create([
                'title' => $request->title,
                'category' => $request->category,
                'image' => $imagePath,
            ]);
        }

        return redirect()
            ->route('galleries.index')
            ->with('success', 'Gallery images added successfully!');
    }

    // Display single gallery image
    public function show(Gallery $gallery)
    {
        return view('admin.gallery.show', compact('gallery'));
    }


    // Show the edit form
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }


    // Update gallery image
    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        // Check whether a new image was uploaded
        if ($request->hasFile('image')) {

            // Delete old image
            if ($gallery->image) {
                Storage::disk('public')->delete($gallery->image);
            }

            // Store new image
            $validated['image'] = $request->file('image')
                ->store('galleries', 'public');
        }

        // Update gallery details
        $gallery->update($validated);

        return redirect()
            ->route('galleries.index')
            ->with('success', 'Gallery image updated successfully!');
    }


    // Delete single gallery image
    public function destroy(Gallery $gallery)
    {
        // Delete image from storage
        if ($gallery->image) {
            Storage::disk('public')->delete($gallery->image);
        }

        // Delete database record
        $gallery->delete();

        return redirect()
            ->route('galleries.index')
            ->with('success', 'Image deleted successfully.');
    }


    // Delete multiple gallery images
    public function bulkDestroy(Request $request)
    {
        $validated = $request->validate([
            'gallery_ids' => ['required', 'array', 'min:1'],
            'gallery_ids.*' => ['required', 'integer', 'distinct', 'exists:galleries,id'],
        ]);

        $galleries = Gallery::whereIn('id', $validated['gallery_ids'])->get();

        foreach ($galleries as $gallery) {

            // Delete image from storage
            if ($gallery->image) {
                Storage::disk('public')->delete($gallery->image);
            }

            // Delete gallery record
            $gallery->delete();
        }

        $count = $galleries->count();

        return redirect()
            ->route('galleries.index')
            ->with('success', $count . ' image(s) deleted successfully.');
    }
}
