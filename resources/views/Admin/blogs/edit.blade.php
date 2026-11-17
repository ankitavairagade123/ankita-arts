
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Blog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
</head>

<body>

    <!-- Sidebar -->
    @include('admin.layout.sidebar')

    <!-- Main Content -->
    <main class="main-content">

        <a href="{{ route('blogs.index') }}" class="back-link">
            <i class="bi bi-arrow-left"></i>
            Back to Blogs
        </a>

        <h1 class="page-title">Edit Blog</h1>

        <p class="page-subtitle">
            Update your blog information below.
        </p>

        <div class="content-card">

            <div class="card-heading">
                <i class="bi bi-pencil-square"></i>
                Blog Information
            </div>

            <p class="card-description">
                Make changes to your existing blog.
            </p>

            <form action="{{ route('blogs.update', $blog) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="form-grid">

                    <!-- Blog Title -->
                    <div class="form-group">
                        <label for="title" class="form-label">
                            Blog Title <span class="required">*</span>
                        </label>

                        <input type="text"
                               id="title"
                               name="title"
                               class="form-control @error('title') is-invalid @enderror"
                               placeholder="Enter blog title"
                               value="{{ old('title', $blog->title) }}"
                               required>

                        @error('title')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Slug -->
                    <div class="form-group">
                        <label for="slug" class="form-label">
                            Blog Slug <span class="required">*</span>
                        </label>

                        <input type="text"
                               id="slug"
                               name="slug"
                               class="form-control @error('slug') is-invalid @enderror"
                               placeholder="Enter blog slug"
                               value="{{ old('slug', $blog->slug) }}"
                               required>

                        @error('slug')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="form-group full-width">
                        <label for="description" class="form-label">
                            Blog Description <span class="required">*</span>
                        </label>

                        <textarea id="description"
                                  name="description"
                                  class="form-control @error('description') is-invalid @enderror"
                                  placeholder="Write your blog description here..."
                                  required>{{ old('description', $blog->description) }}</textarea>

                        @error('description')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Meta Title -->
                    <div class="form-group">
                        <label for="meta_title" class="form-label">
                            Meta Title
                        </label>

                        <input type="text"
                               id="meta_title"
                               name="meta_title"
                               class="form-control @error('meta_title') is-invalid @enderror"
                               placeholder="Enter meta title"
                               value="{{ old('meta_title', $blog->meta_title) }}">

                        @error('meta_title')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Post Date -->
                    <div class="form-group">
                        <label for="post_date" class="form-label">
                            Post Date
                        </label>

                        <input type="date"
                               id="post_date"
                               name="post_date"
                               class="form-control @error('post_date') is-invalid @enderror"
                               value="{{ old('post_date', $blog->post_date ? date('Y-m-d', strtotime($blog->post_date)) : '') }}">

                        @error('post_date')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div class="form-group">
                        <label for="status" class="form-label">
                            Status <span class="required">*</span>
                        </label>

                        <select id="status"
                                name="status"
                                class="form-control @error('status') is-invalid @enderror"
                                required>

                            <option value="active"
                                {{ old('status', $blog->status) == 'active' ? 'selected' : '' }}>
                                Active
                            </option>

                            <option value="inactive"
                                {{ old('status', $blog->status) == 'inactive' ? 'selected' : '' }}>
                                Inactive
                            </option>

                        </select>

                        @error('status')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Meta Description -->
                    <div class="form-group full-width">
                        <label for="meta_description" class="form-label">
                            Meta Description
                        </label>

                        <textarea id="meta_description"
                                  name="meta_description"
                                  class="form-control short-textarea @error('meta_description') is-invalid @enderror"
                                  placeholder="Enter meta description">{{ old('meta_description', $blog->meta_description) }}</textarea>

                        @error('meta_description')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Blog Image -->
                    <div class="form-group full-width">
                        <label for="blog_image" class="form-label">
                            Blog Image
                        </label>

                        <input type="file"
                               id="blog_image"
                               name="blog_image"
                               accept="image/*"
                               class="form-control @error('blog_image') is-invalid @enderror">

                        @error('blog_image')
                            <div class="error-message">{{ $message }}</div>
                        @enderror

                        <div class="form-help">
                            Select a new image only if you want to replace the current image.
                        </div>

                        @if ($blog->blog_image)
                            <div class="current-image">
                                <img src="{{ asset('storage/' . $blog->blog_image) }}"
                                     alt="{{ $blog->title }}">

                                <div class="image-caption">
                                    Current blog image
                                </div>
                            </div>
                        @endif
                    </div>

                </div>

                <!-- Form Buttons -->
                <div class="form-actions">

                    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">
                        <i class="bi bi-x-circle"></i>
                        Cancel
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle"></i>
                        Update Blog
                    </button>

                </div>

            </form>

        </div>

        <div class="footer-note">
            Blog Management System
        </div>

    </main>

</body>
</html>
