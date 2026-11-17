<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Gallery Image</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
</head>

<body>

    @include('admin.layout.sidebar')

    <main class="main-content">
        <div class="form-wrapper mx-auto">

            <div class="mb-4">
                <h1 class="page-title mb-2">Create a New Image</h1>
                <p class="text-muted-custom small mb-0">
                    Add your image content, category.
                </p>
                 <a href="{{ route('galleries.index') }}" class="d-flex justify-content-end align-items-center gap-2 text-decoration-none fw-semibold small text-secondary">
                            <i class="bi bi-arrow-left me-1"></i>
                            Back to Gallery
                        </a>
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

            <form action="{{ route('galleries.store') }}"
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
                            <h6 class="fw-bold mb-1">Gallery Information</h6>
                            <p class="small text-muted-custom mb-0">
                                Enter your image title and category.
                            </p>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="title" class="form-label">
                                Image Title <span class="required-star">*</span>
                            </label>

                            <input type="text"
                                id="title"
                                name="title"
                                class="form-control @error('title') is-invalid @enderror"
                                placeholder="Enter Image title"
                                value="{{ old('title') }}"
                                required>

                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-md-6">
                            <label for="title" class="form-label">
                                Image Category <span class="required-star">*</span>
                            </label>
                            <select name="category" id="category"
                                class="form-select @error('category') is-invalid @enderror" required>

                                <option value="">Select Category</option>

                                <option value="Painting" {{ old('category') == 'Painting' ? 'selected' : '' }}>Painting</option>

                                <option value="Sketch" {{ old('category') == 'Sketch' ? 'selected' : '' }}>Sketch</option>

                                <option value="Digital Art" {{ old('category') == 'Digital Art' ? 'selected' : '' }}>Digital Art</option>

                                <option value="Sculpture" {{ old('category') == 'Sculpture' ? 'selected' : '' }}>Sculpture</option>

                                <option value="Photography" {{ old('category') == 'Photography' ? 'selected' : '' }}>Photography</option>

                                <option value="Abstract Art" {{ old('category') == 'Abstract Art' ? 'selected' : '' }}>Abstract Art</option>
                            </select>

                            @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Upload Image</label>

                        <input type="file"
                            name="images[]"
                            id="images"
                            accept=".jpg,.jpeg,.png,.webp"
                            multiple
                            required>

                        <small class="text-muted">
                            Allowed formats: JPG, JPEG, PNG, WEBP.
                        </small>

                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="mt-3">
                            <img id="imagePreview"
                                src=""
                                alt="Image Preview"
                                class="img-thumbnail d-none"
                                style="max-width: 250px; max-height: 200px; object-fit: cover;">
                        </div>
                    </div>


                    <div class="d-flex flex-wrap gap-2 d-flex justify-content-end">
                        <button type="submit" class="btn-primary-custom">
                            <i class="bi bi-check-circle me-1"></i>
                            Save Image
                        </button>
                    </div>
                </section>
            </form>
        </div>
    </main>

    <script>
        document.getElementById('image').addEventListener('change', function(event) {

            const file = event.target.files[0];
            const preview = document.getElementById('imagePreview');

            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('d-none');
            } else {
                preview.src = '';
                preview.classList.add('d-none');
            }

        });
    </script>

</body>

</html>