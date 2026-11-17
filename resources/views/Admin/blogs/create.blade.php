```blade
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Blog | BlogSpace</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
</head>

<body>

    <!-- Sidebar -->
    @include('admin.layout.sidebar');

    <!-- Main Content -->
    <main class="main-content">
        <div class="form-wrapper mx-auto">

            <div class="mb-4">

                <h1 class="page-title mb-2">Create a New Blog</h1>
                <p class="text-muted-custom small mb-0">
                    Add your blog content, SEO information, and publishing settings.
                </p>
                <div class="pt-sm-1">
                    <a href="{{ route('blogs.index') }}" class="back-link  d-flex justify-content-end align-items-center gap-2 text-decoration-none fw-semibold small text-secondary">
                        <i class="bi bi-arrow-left"></i>
                        <span>Back to Gallery</span>
                    </a>
                </div>
            </div>

            <!-- Validation Errors -->
            @if ($errors->any())
            <div class="alert alert-danger rounded-3">
                <strong>Please correct the following errors:</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('blogs.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                <!-- Blog Information -->
                <section class="form-section">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <span class="section-icon">
                            <i class="bi bi-file-earmark-text"></i>
                        </span>
                        <div>
                            <h6 class="fw-bold mb-1">Blog Information</h6>
                            <p class="small text-muted-custom mb-0">
                                Enter your blog title and content.
                            </p>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="title" class="form-label">
                                Blog Title <span class="required-star">*</span>
                            </label>

                            <input type="text"
                                id="title"
                                name="title"
                                class="form-control @error('title') is-invalid @enderror"
                                placeholder="Enter blog title"
                                value="{{ old('title') }}"
                                required>

                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="slug" class="form-label">Slug</label>

                            <input type="text"
                                id="slug"
                                name="slug"
                                class="form-control @error('slug') is-invalid @enderror"
                                placeholder=""
                                value="{{ old('slug') }}">

                            @error('slug')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">
                            Blog Description <span class="required-star">*</span>
                        </label>

                        <textarea id="description"
                            name="description"
                            class="form-control @error('description') is-invalid @enderror"
                            placeholder="Write your blog content here..."
                            required>{{ old('description') }}</textarea>

                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="blog_image" class="form-label">Blog Image</label>

                        <input type="file"
                            id="blog_image"
                            name="blog_image"
                            class="form-control @error('blog_image') is-invalid @enderror"
                            accept="image/*">

                        @error('blog_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="form-text">
                            <i class="bi bi-image me-1"></i>
                            Select an image for your blog post.
                        </div>
                    </div>
                </section>

                <!-- SEO Details -->
                <section class="form-section">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <span class="section-icon">
                            <i class="bi bi-search"></i>
                        </span>
                        <div>
                            <h6 class="fw-bold mb-1">SEO Details</h6>
                            <p class="small text-muted-custom mb-0">
                                Help search engines understand your blog.
                            </p>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="meta_title" class="form-label">Meta Title</label>

                            <input type="text"
                                id="meta_title"
                                name="meta_title"
                                class="form-control @error('meta_title') is-invalid @enderror"
                                placeholder="Enter meta title"
                                value="{{ old('meta_title') }}">

                            @error('meta_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="meta_description" class="form-label">Meta Description</label>

                            <textarea id="meta_description"
                                name="meta_description"
                                class="form-control @error('meta_description') is-invalid @enderror"
                                rows="3"
                                placeholder="Enter meta description">{{ old('meta_description') }}</textarea>

                            @error('meta_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </section>

                <!-- Publishing Options -->
                <section class="form-section">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <span class="section-icon">
                            <i class="bi bi-calendar2-check"></i>
                        </span>
                        <div>
                            <h6 class="fw-bold mb-1">Publishing Options</h6>
                            <p class="small text-muted-custom mb-0">
                                Configure the date, status, and featured option.
                            </p>
                        </div>
                    </div>

                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <label for="post_date" class="form-label">Post Date</label>

                            <input type="date"
                                id="post_date"
                                name="post_date"
                                class="form-control @error('post_date') is-invalid @enderror"
                                value="{{ old('post_date') }}">

                            @error('post_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label d-block">Publication Status</label>

                            <div class="d-flex flex-wrap gap-4 pt-2">
                                <div class="form-check">
                                    <input type="radio"
                                        id="status_active"
                                        name="status"
                                        value="active"
                                        class="form-check-input"
                                        required
                                        {{ old('status', 'active') === 'active' ? 'checked' : '' }}>

                                    <label for="status_active" class="form-check-label">
                                        Active
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input type="radio"
                                        id="status_inactive"
                                        name="status"
                                        value="inactive"
                                        class="form-check-input"
                                        {{ old('status') === 'inactive' ? 'checked' : '' }}>

                                    <label for="status_inactive" class="form-check-label">
                                        Inactive
                                    </label>
                                </div>
                            </div>

                            @error('status')
                            <div class="text-danger small mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-check bg-light border rounded-3 p-2 ps-5">
                        <input type="checkbox"
                            id="is_featured"
                            name="is_featured"
                            value="1"
                            class="form-check-input"
                            {{ old('is_featured') ? 'checked' : '' }}>

                        <label for="is_featured" class="form-check-label">
                            <span class="fw-semibold d-block">Mark as Featured</span>
                            <span class="text-muted small">
                                Highlight this blog as featured content.
                            </span>
                        </label>
                    </div>
                    <div class="d-flex justify-content-end">

                        <button type="submit" class="btn-primary-custom">
                            <i class="bi bi-check-circle me-1"></i>
                            Save Image
                        </button>
                    </div>
                </section>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>