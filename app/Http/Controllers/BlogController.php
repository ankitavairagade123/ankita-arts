<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Display all blogs
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);

        return view('admin.blogs.index', compact('blogs'));
    }

    // Show the form to add a blog
    public function create()
    {
        return view('admin.blogs.create');
    }

    // Save the new blog
    public function store(Request $request)
    {
        $validated = $request->validate([

            'title' => 'required|string|min:3|max:255',
            'slug' => 'required|string|alpha_dash|max:255|unique:blogs,slug',
            'description' => 'required|string|min:10',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'post_date' => 'required|date',
            'status' => 'required|in:active,inactive',
            'is_featured' => 'nullable|boolean',
            'blog_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Handle the featured checkbox
        $validated['is_featured'] = $request->boolean('is_featured');

        // Upload image if provided
        if ($request->hasFile('blog_image')) {
            $validated['blog_image'] = $request->file('blog_image')
                ->store('blogs', 'public');
        }

        Blog::create($validated);

        return redirect()
            ->route('blogs.index')
            ->with('success', 'Blog added successfully!');
    }

    // Display one blog
    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    // Show the edit form
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    // Update the blog
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|alpha_dash|unique:blogs,slug,' . $blog->id,
            'description' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'post_date' => 'nullable|date',
            'status' => 'required|in:active,inactive',
            'blog_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Check whether a new image was uploaded
        if ($request->hasFile('blog_image')) {

            // Delete the old image
            if ($blog->blog_image) {
                Storage::disk('public')->delete($blog->blog_image);
            }

            // Store the new image
            $validated['blog_image'] = $request->file('blog_image')
                ->store('blogs', 'public');
        }

        // Update blog details
        $blog->update($validated);

        return redirect()
            ->route('blogs.index')
            ->with('success', 'Blog updated successfully!');
    }

    // Delete the blog
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()
            ->route('blogs.index')
            ->with('success', 'Blog deleted successfully.');
    }

    public function bulkDestroy(Request $request)
    {
        $validated = $request->validate([
            'blog_ids' => ['required', 'array', 'min:1'],
            'blog_ids.*' => ['required', 'integer', 'distinct', 'exists:blogs,id'],
        ]);

        $blogs = Blog::whereIn('id', $validated['blog_ids'])->get();

        foreach ($blogs as $blog) {
            if ($blog->blog_image) {
                Storage::disk('public')->delete($blog->blog_image);
            }

            $blog->delete();
        }

        return redirect()
            ->route('blogs.index')
            ->with('success', count($blogs) . ' blog(s) deleted successfully.');
    }

    // Display individual blog on frontend
    public function showFrontend($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 'active')
            ->firstOrFail();

        return view('Frontend.blogs.show', compact('blog'));
    }

    // Display all active blogs on frontend
    public function publicIndex()
    {
        $blogs = Blog::where('status', 'active')
            ->orderBy('post_date', 'desc')
            ->get();

        return view('Frontend.blogs.blog', compact('blogs'));
    }

    // Display latest 3 blogs on home page
    public function homeBlogs()
    {
        $blogs = Blog::where('status', 'active')
            ->orderBy('post_date', 'desc')
            ->take(3)
            ->get();

        return view('Frontend.home.home', compact('blogs'));
    }
}
