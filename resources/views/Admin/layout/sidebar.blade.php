
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Art Gallery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

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

        /* Main Layout */

        .dashboard-layout {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */

        .sidebar {
            width: 260px;
            min-width: 260px;
            background: #20201e;
            color: #fff;
            padding: 30px 22px;
            min-height: 100vh;
        }

        .brand {
            color: #d6b878;
        }

        .header-logo {
            width: 42px;
            height: 42px;
            object-fit: contain;
        }

        .sidebar .small {
            font-size: 11px;
            letter-spacing: 1.5px;
            color: #969187 !important;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 13px 15px;
            margin-bottom: 8px;
            color: #c7c2b8;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            transition: 0.3s;
        }

        .sidebar-link i {
            font-size: 18px;
        }

        .sidebar-link:hover,
        .sidebar-link.active {
            background: #3a362d;
            color: #d6b878;
        }

        .sidebar form {
            margin-top: 35px;
        }

        .sidebar button {
            background: transparent;
            text-align: left;
            cursor: pointer;
        }

        /* Dashboard Content */

        .main-content {
            flex: 1;
            min-width: 0;
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

        /* Statistics */

        .stat-card {
            background: #fffdf8;
            border: 1px solid #ece7dc;
            border-radius: 14px;
            padding: 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 145px;
            transition: 0.3s;
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

        .blog-details small,
        .blog-date {
            font-size: 12px;
            color: #969084;
        }

        .blog-date {
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

        /* Responsive */

        @media (max-width: 768px) {
            .sidebar {
                width: 210px;
                min-width: 210px;
                padding: 25px 12px;
            }

            .main-content {
                padding: 22px 15px;
            }

            .welcome-section h2 {
                font-size: 25px;
            }
        }

        @media (max-width: 576px) {
            .dashboard-layout {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                min-width: 100%;
                min-height: auto;
            }

            .sidebar .brand {
                margin-bottom: 25px !important;
            }

            .sidebar form {
                margin-top: 10px;
            }

            .main-content {
                width: 100%;
            }

            .blog-date {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="dashboard-layout">

        <!-- Main Dashboard -->
        <main class="main-content">

            <!-- Welcome -->
            <div class="welcome-section">
                <h2>Welcome Back, {{ Auth::user()->name }}!</h2>

                <p>
                    Here's what's happening with your art gallery today.
                </p>
            </div>

            <!-- Count Cards -->
            <div class="row g-4">

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

        </main>

    </div>

</body>
</html>
