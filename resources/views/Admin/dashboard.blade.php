
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Art Gallery</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f3ee;
            font-family: 'DM Sans', sans-serif;
            color: #292822;
        }

        .dashboard-container {
            padding: 40px;
        }

        .welcome-section {
            margin-bottom: 35px;
        }

        .welcome-section h2 {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .welcome-section p {
            color: #858176;
            font-size: 14px;
            margin: 0;
        }

        /* Statistics Cards */

        .stat-card {
            background: #fffdf8;
            border: 1px solid #ece7dc;
            border-radius: 14px;
            padding: 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 145px;
            transition: 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(40, 35, 25, 0.07);
        }

        .stat-info h6 {
            color: #898477;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .stat-info h2 {
            font-size: 34px;
            font-weight: 700;
            margin: 0;
            color: #292822;
        }

        .stat-icon {
            width: 58px;
            height: 58px;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
        }

        .blog-icon {
            background: #f3ead7;
            color: #a77d32;
        }

        .gallery-icon {
            background: #e9e9df;
            color: #65704e;
        }

        /* Recent Blogs */

        .recent-section {
            background: #fffdf8;
            border: 1px solid #ece7dc;
            border-radius: 14px;
            margin-top: 35px;
            padding: 28px;
        }

        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .section-heading h4 {
            font-family: 'Playfair Display', serif;
            font-size: 23px;
            margin: 0;
        }

        .view-all {
            text-decoration: none;
            color: #a77d32;
            font-size: 13px;
            font-weight: 600;
        }

        .view-all:hover {
            color: #292822;
        }

        .blog-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 19px 0;
            border-bottom: 1px solid #eeeae1;
            gap: 15px;
        }

        .blog-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .blog-details {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .blog-symbol {
            width: 45px;
            height: 45px;
            background: #f3ead7;
            color: #a77d32;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
            flex-shrink: 0;
        }

        .blog-details h6 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .blog-details small {
            font-size: 12px;
            color: #969084;
        }

        .blog-date {
            color: #898477;
            font-size: 12px;
            white-space: nowrap;
        }

        .empty-state {
            text-align: center;
            padding: 35px 15px;
            color: #898477;
        }

        .empty-state i {
            font-size: 35px;
            color: #c4b99f;
            display: block;
            margin-bottom: 12px;
        }

        @media (max-width: 768px) {
            .dashboard-container {
                padding: 22px 15px;
            }

            .welcome-section h2 {
                font-size: 26px;
            }

            .recent-section {
                padding: 20px;
            }

            .blog-date {
                font-size: 11px;
            }
        }
    </style>
</head>

<body>

   @include('admin.layout.sidebar')

    <div class="dashboard-container">

        <!-- Welcome Section -->
        <div class="welcome-section">
            <h2>Welcome Back, {{ Auth::user()->name }}!</h2>

            <p>
                Here's what's happening with your art gallery today.
            </p>
        </div>

        <!-- Statistics Cards -->
        <div class="row g-4">

            <!-- Blog Count -->
            <div class="col-md-6">
                <div class="stat-card">

                    <div class="stat-info">
                        <h6>Total Blogs</h6>
                        <h2>{{ $blogCount }}</h2>
                    </div>

                    <div class="stat-icon blog-icon">
                        <i class="bi bi-journal-richtext"></i>
                    </div>

                </div>
            </div>

            <!-- Gallery Count -->
            <div class="col-md-6">
                <div class="stat-card">

                    <div class="stat-info">
                        <h6>Gallery Images</h6>
                        <h2>{{ $galleryCount }}</h2>
                    </div>

                    <div class="stat-icon gallery-icon">
                        <i class="bi bi-images"></i>
                    </div>

                </div>
            </div>

        </div>

        <!-- Recent Blogs -->
        <div class="recent-section">

            <div class="section-heading">
                <h4>Recent Blogs</h4>

                <a href="{{ route('blogs.index') }}" class="view-all">
                    View All <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            @forelse ($recentBlogs as $blog)

                <div class="blog-item">

                    <div class="blog-details">

                        <div class="blog-symbol">
                            <i class="bi bi-journal-text"></i>
                        </div>

                        <div>
                            <h6>{{ $blog->title }}</h6>

                            <small>
                                <i class="bi bi-calendar3 me-1"></i>
                                {{ $blog->created_at->format('d M Y') }}
                            </small>
                        </div>

                    </div>

                    <div class="blog-date">
                        {{ $blog->created_at->diffForHumans() }}
                    </div>

                </div>

            @empty

                <div class="empty-state">
                    <i class="bi bi-journal-x"></i>

                    <h6>No Blogs Available</h6>

                    <p class="small mb-0">
                        Your recent blogs will appear here.
                    </p>
                </div>

            @endforelse

        </div>

    </div>

</body>
</html>
