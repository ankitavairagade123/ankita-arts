<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Management | Laravel</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>

<body>

    @include('admin.layout.sidebar')
    <!-- Main Content -->
    <main class="main-content">

        <div class="d-flex justify-content-between align-items-center gap-3 mb-4">
            <div>
                <h1 class="page-title mb-2">Gallery Management</h1>
                <p class="subtitle mb-0">
                    Manage and organize all your images in one place.
                </p>
            </div>

            <a href="{{ route('galleries.create') }}" class="btn btn-primary px-3 py-2">
                <i class="bi bi-plus-lg me-1"></i> Add New Image
            </a>
        </div>

        <!-- Blog Table -->
        <div class="content-card">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h5 class="fw-bold mb-1">All Images</h5>
                    <p class="subtitle mb-0">Your published content</p>
                </div>


                <div>

                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">

                        <div class="bulk-action-menu">

                            <button type="button"
                                class="three-dot-btn"
                                id="bulkMenuButton"
                                aria-label="Bulk actions">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>

                            <div class="bulk-dropdown" id="bulkDropdown">
                                <button type="button" id="selectAllOption">
                                    <i class="bi bi-check2-square"></i>
                                    Select All Images
                                </button>
                            </div>

                        </div>

                        <form action="{{ route('galleries.bulkDestroy') }}"
                            method="POST"
                            id="bulk-delete-form">
                            @csrf
                            @method('DELETE')
                        </form>

                        <button type="button"
                            id="bulk-delete-button"
                            class="btn btn-danger"
                            style="display: none;">
                            <i class="bi bi-trash"></i> Delete Selected
                        </button>

                        <span class="badge rounded-pill text-bg-light border px-3 py-2">
                            Total: {{ $galleries->total() }}
                        </span>

                    </div>
                </div>

            </div>

            @if ($galleries->count() > 0)

            <div class="table-responsive">

                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Image Title</th>
                            <th>Image</th>
                            <th>Created Date</th>
                            <th class="text-center" style="width: 150px;">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($galleries as $gallery)
                        <tr>

                            <td>
                                <input type="checkbox"
                                    name="gallery_ids[]"
                                    value="{{ $gallery->id }}"
                                    class="blog-checkbox"
                                    form="bulk-delete-form">
                            </td>
                            <td class="text-secondary">
                                {{ $gallery->id }}
                            </td>

                            <td>
                                <div class="blog-title">
                                    {{ $gallery->title }}
                                </div>

                            </td>

                            <td>
                                @if ($gallery->image)
                                <img
                                    src="{{ asset('storage/' . $gallery->image) }}"
                                    alt=""
                                    width="20"
                                    height="20"
                                    class="rounded"
                                    style="object-fit: cover;">
                                @else
                                <i class="bi bi-image text-muted fs-5"></i>
                                @endif
                            </td>

                            <td class="text-secondary small">
                                {{ $gallery->created_at->format('d M Y') }}
                            </td>

                            <td class="text-center align-middle">
                                <div class="d-flex justify-content-center align-items-center gap-2">

                                    <a href="{{ route('galleries.show', $gallery->id) }}"
                                        class="action-btn view-btn"
                                        title="View Image"
                                        aria-label="View Image">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a href="{{ route('galleries.edit', $gallery->id) }}"
                                        class="action-btn edit-btn"
                                        title="Edit Image"
                                        aria-label="Edit Image">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <form action="{{ route('galleries.destroy', $gallery) }}"
                                        method="POST"
                                        class="delete-form m-0">

                                        @csrf
                                        @method('DELETE')

                                        <button type="button"
                                            class="action-btn delete-btn delete-button"
                                            title="Delete Image"
                                            aria-label="Delete Image">
                                            <i class="bi bi-trash"></i>
                                        </button>

                                    </form>

                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $galleries->links('pagination::bootstrap-5') }}
            </div>

            @else

            <div class="empty-state">
                <div class="empty-icon mb-3">
                    <i class="bi bi-journal-text"></i>
                </div>

                <h5 class="fw-bold">No images found</h5>

                <p class="subtitle mb-4">
                    Start by creating your first image post.
                </p>

                <a href="{{ route('galleries.create') }}" class="btn btn-primary px-4">
                    <i class="bi bi-plus-lg me-1"></i> Create Your First Image
                </a>
            </div>

            @endif
        </div>

        <p class="text-center text-secondary small mt-4">
            BlogSpace · Powered by Laravel
        </p>

    </main>


    @if (session('success'))
    <div class="toast-message" id="successToast">
        <i class="bi bi-check-circle-fill"></i>
        <span>{{ session('success') }}</span>
        <button type="button" onclick="closeToast()" aria-label="Close">
            &times;
        </button>
    </div>
    @endif


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {

        // Single image delete confirmation
        document.querySelectorAll('.delete-button').forEach(function(button) {

            button.addEventListener('click', function() {

                const form = this.closest('.delete-form');

                if (!form) {
                    console.error('Delete form not found!');
                    return;
                }

                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this image!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: true
                }, function(isConfirm) {

                    if (isConfirm) {
                        form.submit();
                    }

                });

            });

        });


        // Toast notification
        function closeToast() {
            const toast = document.getElementById('successToast');

            if (toast) {
                toast.classList.add('hide');

                setTimeout(function() {
                    toast.remove();
                }, 400);
            }
        }

        const toast = document.getElementById('successToast');

        if (toast) {
            setTimeout(closeToast, 3000);
        }


        // Bulk action elements
        const menuButton = document.getElementById('bulkMenuButton');
        const dropdown = document.getElementById('bulkDropdown');
        const selectAllOption = document.getElementById('selectAllOption');
        const blogCheckboxes = document.querySelectorAll('.blog-checkbox');
        const deleteButton = document.getElementById('bulk-delete-button');
        const bulkDeleteForm = document.getElementById('bulk-delete-form');


        // Open and close menu
        if (menuButton && dropdown) {

            menuButton.addEventListener('click', function(event) {
                event.stopPropagation();
                dropdown.classList.toggle('show');
            });

            document.addEventListener('click', function(event) {
                if (!event.target.closest('.bulk-action-menu')) {
                    dropdown.classList.remove('show');
                }
            });

        }


        // Select all images
        if (selectAllOption) {

            selectAllOption.addEventListener('click', function() {

                blogCheckboxes.forEach(function(checkbox) {
                    checkbox.checked = true;
                });

                updateBulkDeleteButton();

                if (dropdown) {
                    dropdown.classList.remove('show');
                }

            });

        }


        // Update delete button
        function updateBulkDeleteButton() {

            const selectedCount = document.querySelectorAll(
                '.blog-checkbox:checked'
            ).length;

            if (deleteButton) {
                deleteButton.style.display =
                    selectedCount > 0 ? 'inline-block' : 'none';
            }

        }


        blogCheckboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', updateBulkDeleteButton);
        });


        // Bulk delete confirmation
        if (deleteButton && bulkDeleteForm) {

            deleteButton.addEventListener('click', function() {

                const selectedCount = document.querySelectorAll(
                    '.blog-checkbox:checked'
                ).length;

                if (selectedCount === 0) {
                    alert('Please select at least one image.');
                    return;
                }

                swal({
                    title: 'Are you sure?',
                    text: 'The selected images will be permanently deleted!',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete them!",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: true
                }, function(isConfirm) {

                    if (isConfirm) {
                        bulkDeleteForm.submit();
                    }

                });

            });

        }

    }); // Closing DOMContentLoaded

</script>
</body>

</html>