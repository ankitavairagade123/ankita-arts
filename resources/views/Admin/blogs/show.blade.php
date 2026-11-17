
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $blog->title }} | BlogSpace</title>

    <meta name="description" content="{{ $blog->meta_description }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">

</head>

<body>

    <!-- Sidebar -->
       <aside class="sidebar">
        <div class="brand d-flex align-items-center gap-2 mb-5">
            <span class="brand-icon">
                <i class="bi bi-journal-richtext"></i>
            </span>
            <span class="fw-bold fs-5">BlogSpace</span>
        </div>

        <div class="small fw-bold text-secondary mb-3 px-2">
            CONTENT MANAGEMENT
        </div>

        <a href="{{ route('blogs.index') }}" class="sidebar-link">
            <i class="bi bi-grid-1x2"></i>
            All Blogs
        </a>

        <a href="{{ route('blogs.create') }}" class="sidebar-link active">
            <i class="bi bi-plus-circle"></i>
            Add New Blog
        </a>
    </aside>

    <!-- Main content -->
    <main class="main-content">

        <a href="{{ route('blogs.index') }}" class="back-link">
            <i class="bi bi-arrow-left"></i>
            Back to Blogs
        </a>

        <h1 class="page-title">Blog Details</h1>

        <p class="page-subtitle">
            View complete information about this blog.
        </p>

        <div class="blog-details-card">

            <!-- Action buttons -->
            <div class="show-actions">

                <a href="{{ route('blogs.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i>
                    Back
                </a>

                <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-primary">
                    <i class="bi bi-pencil-square"></i>
                    Edit Blog
                </a>

            </div>

            <!-- Blog title -->
            <h2 class="blog-details-title">
                {{ $blog->title }}
            </h2>

            <!-- Blog metadata -->
            <div class="blog-meta">

                <span>
                    <i class="bi bi-calendar3"></i>
                    {{ $blog->post_date
                        ? \Carbon\Carbon::parse($blog->post_date)->format('d M Y')
                        : 'Date not available' }}
                </span>

                <span>
                    <i class="bi bi-link-45deg"></i>
                    {{ $blog->slug }}
                </span>

                <span>
                    <i class="bi bi-circle-fill"></i>
                    <span class="blog-status {{ $blog->status == 'active' ? 'status-active' : 'status-inactive' }}">
                        {{ ucfirst($blog->status) }}
                    </span>
                </span>

            </div>

            <!-- Blog image -->
            @if ($blog->blog_image)
                <img
                    src="{{ asset('storage/' . $blog->blog_image) }}"
                    alt="{{ $blog->title }}"
                    class="blog-cover"
                >
            @else
                <div class="blog-cover d-flex align-items-center justify-content-center"
                     style="background:#f1f3f9;">
                    <span>No blog image available</span>
                </div>
            @endif

            <!-- Blog description -->
            <div class="blog-description">
                {{ $blog->description }}
            </div>

            <!-- SEO information -->
            <div class="seo-section">

                <h3>
                    <i class="bi bi-search"></i>
                    SEO Information
                </h3>

                <div class="seo-item">
                    <strong>Meta Title</strong>
                    <span>{{ $blog->meta_title ?: 'Not provided' }}</span>
                </div>

                <div class="seo-item">
                    <strong>Meta Description</strong>
                    <span>{{ $blog->meta_description ?: 'Not provided' }}</span>
                </div>

            </div>

        </div>

        <div class="footer-note">
            Blog Management System
        </div>

    </main>

</body>
</html>
