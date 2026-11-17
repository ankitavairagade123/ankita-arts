
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Image</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
</head>

<body>

    <!-- Sidebar -->
    @include('admin.layout.sidebar')

    <!-- Main Content -->
    <main class="main-content">

        <a href="{{ route('galleries.index') }}" class="back-link">
            <i class="bi bi-arrow-left"></i>
            Back to Gallery
        </a>

        <h1 class="page-title">Edit Blog</h1>

        <p class="page-subtitle">
            Update your gallery information below.
        </p>

        <div class="content-card">

            <div class="card-heading">
                <i class="bi bi-pencil-square"></i>
                Gallery Information
            </div>

            <p class="card-description">
                Make changes to your existing image.
            </p>

            <form action="{{ route('galleries.update', $galleries) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="form-grid">

                    <!-- Blog Title -->
                    <div class="form-group">
                        <label for="title" class="form-label">
                            Image Title <span class="required">*</span>
                        </label>

                        <input type="text"
                               id="title"
                               name="title"
                               class="form-control @error('title') is-invalid @enderror"
                               placeholder="Enter image title"
                               value="{{ old('title', $galleries->title) }}"
                               required>

                        @error('title')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Blog Image -->
                    <div class="form-group full-width">
                        <label for="image" class="form-label">
                             Image
                        </label>

                        <input type="file"
                               id="image"
                               name="image"
                               accept="image/*"
                               class="form-control @error('image') is-invalid @enderror">

                        @error('blog_image')
                            <div class="error-message">{{ $message }}</div>
                        @enderror

                        <div class="form-help">
                            Select a new image only if you want to replace the current image.
                        </div>

                        @if ($galleries->image)
                            <div class="current-image">
                                <img src="{{ asset('storage/' . $galleries->image) }}"
                                     alt="{{ $galleries->title }}">

                                <div class="image-caption">
                                    Current image
                                </div>
                            </div>
                        @endif
                    </div>

                </div>

                <!-- Form Buttons -->
                <div class="form-actions">

                    <a href="{{ route('galleries.index') }}" class="btn btn-secondary">
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
            Gallery Management System
        </div>

    </main>

</body>
</html>
