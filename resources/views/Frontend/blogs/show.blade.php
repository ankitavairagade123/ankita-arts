<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $blog->title }} — NIRVANA</title>

    <!-- Google Fonts & Material Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..700;1,400..700&family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/css/frontend.css') }}">

</head>

<body>

    <!-- Header -->
    @include('Frontend.layout.header')


    <!-- Reading Progress -->
    <div class="reading-progress-track">
        <div id="scroll-progress-bar"></div>
    </div>


    <main class="blog-detail-page">

        <div class="container py-5">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="mb-4">

                <ol class="breadcrumb mb-0 small">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}" class="text-decoration-none text-on-surface-variant">
                            <span class="material-symbols-outlined fs-6 align-middle">home</span>
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ url('/blogs') }}" class="text-decoration-none text-on-surface-variant">
                            Blog
                        </a>
                    </li>

                    <li class="breadcrumb-item active text-charcoal-deep fw-semibold">
                        {{ $blog->title }}
                    </li>

                </ol>

            </nav>


            <!-- Blog Header -->
            <header class="blog-detail-header mb-4">

                <div class="d-flex align-items-center flex-wrap gap-2 mb-3">

                    <span class="badge rounded-pill bg-terracotta-soft text-primary-custom text-uppercase px-3 py-2 tracking-widest-custom">
                        Lifestyle & Practice
                    </span>

                    <span class="text-secondary">•</span>

                    <span class="small text-on-surface-variant">
                        {{ \Carbon\Carbon::parse($blog->post_date)->format('d M Y') }}
                    </span>

                    <span class="text-secondary">•</span>

                    <span class="small text-on-surface-variant">
                        5 min read
                    </span>

                </div>


                <h1 class="font-display display-5 fw-semibold text-charcoal-deep mb-4">
                    {{ $blog->title }}
                </h1>


                <!-- Author and Actions -->
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">

                    <div class="d-flex align-items-center gap-3">

                        <div class="blog-author-avatar">
                            <span class="material-symbols-outlined">person</span>
                        </div>

                        <div>

                            <div class="d-flex align-items-center gap-1">

                                <span class="fw-bold text-charcoal-deep small">
                                    Peter Bowman
                                </span>

                                <span class="material-symbols-outlined text-primary-custom fs-6">
                                    verified
                                </span>

                            </div>

                            <small class="text-on-surface-variant">
                                Lead Movement Specialist · Nirvana Sanctuary
                            </small>

                        </div>

                    </div>


                    <div class="d-flex align-items-center gap-2">

                        <button class="icon-btn"
                            id="header-bookmark-btn"
                            title="Bookmark article"
                            type="button">

                            <span class="material-symbols-outlined fs-5">
                                bookmark_border
                            </span>

                        </button>


                        <button class="icon-btn"
                            id="share-blog-btn"
                            title="Share article"
                            type="button">

                            <span class="material-symbols-outlined fs-5">
                                share
                            </span>

                        </button>

                    </div>

                </div>

            </header>


            <!-- Featured Blog Image -->
            <div class="blog-detail-image-wrapper mb-5">

                <img
                    src="{{ asset('storage/' . $blog->blog_image) }}"
                    alt="{{ $blog->title }}"
                    class="blog-detail-image"
                />

            </div>


            <!-- Blog Content + Sidebar -->
            <div class="row g-5 align-items-start">


                <!-- Main Article -->
                <article class="col-lg-8">

                    <div class="blog-content text-on-surface-variant lh-lg">

                        {!! nl2br(e($blog->description)) !!}

                    </div>


                    <!-- Article Footer -->
                    <div class="blog-article-footer mt-5 pt-4 border-top">

                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                            <div>

                                <span class="small text-secondary">
                                    Share this article
                                </span>

                            </div>

                            <div class="d-flex gap-2">

                                <button class="icon-btn" type="button" onclick="shareArticle()">
                                    <span class="material-symbols-outlined">share</span>
                                </button>

                                <button class="icon-btn" type="button" onclick="copyArticleLink()">
                                    <span class="material-symbols-outlined">link</span>
                                </button>

                            </div>

                        </div>

                    </div>

                </article>


                <!-- Sidebar -->
                <aside class="col-lg-4">

                    <div class="blog-sidebar">


                        <!-- Search -->
                        <div class="p-4 rounded-4 bg-surface-card shadow-sm mb-4">

                            <h6 class="text-uppercase tracking-widest-custom text-secondary fw-semibold mb-3">
                                Discover Archives
                            </h6>

                            <form action="{{ url('/blogs') }}" method="GET">

                                <div class="input-group">

                                    <input
                                        type="search"
                                        name="search"
                                        class="form-control form-control-custom border-0 bg-surface-cream"
                                        placeholder="Search essays..."
                                    />

                                    <button class="input-group-text bg-surface-cream border-0 text-secondary"
                                        type="submit">

                                        <span class="material-symbols-outlined fs-5">
                                            search
                                        </span>

                                    </button>

                                </div>

                            </form>

                        </div>


                        <!-- Spotlight -->
                        <div class="p-4 rounded-4 bg-surface-warm shadow-sm mb-4">

                            <div class="d-flex align-items-center gap-2 mb-2">

                                <span class="spinner-grow spinner-grow-sm text-primary-custom"></span>

                                <small class="text-uppercase tracking-widest-custom text-primary-custom fw-semibold">
                                    Sanctuary Spotlight
                                </small>

                            </div>

                            <h5 class="font-display text-charcoal-deep mb-2">
                                Find Your Inner Strength
                            </h5>

                            <p class="small text-on-surface-variant mb-3">
                                Immerse yourself in our studio collective.
                                From somatic stretching to advanced vinyasa
                                teacher immersions.
                            </p>

                            <img
                                class="w-100 rounded-3 object-fit-cover mb-3"
                                style="height: 180px;"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1iNkfDUuZt9Mvg6C0lT3xr6PMfZvApf02VfWWBnmU-ZvYoXDbueVKm4tOainMpuRbPMSeoLgd0M4Kw3o2J2GO7OoVotNlxcpEl4sJHyJwgYIhYMbMorrwxYVeKuP7AS7OMi7xK6WakGhBGiFokpcx-4zyK_7ep6KQ9qweCgwHm3YMT7pSo0e7zEQNsJ6GHterIlPzMcvfkgbmZUBMlChhqydccjMdDp_O8qrRyUs"
                                alt="Sanctuary studio"
                            />

                            <a href="#"
                                class="btn bg-charcoal-deep text-white w-100 rounded-pill py-2 small fw-semibold">
                                Explore Courses
                            </a>

                        </div>


                        <!-- Categories -->
                        <div class="p-4 rounded-4 bg-surface-card shadow-sm mb-4">

                            <h6 class="font-display text-charcoal-deep mb-3">
                                Categories
                            </h6>

                            <div class="list-group list-group-flush border-0">

                                @foreach([
                                    ['Blog', '24'],
                                    ['Featured', '12'],
                                    ['News', '08'],
                                    ['Standard', '31']
                                ] as $category)

                                    <a href="#"
                                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center px-0 bg-transparent border-0 text-on-surface-variant">

                                        <span>{{ $category[0] }}</span>

                                        <span class="badge rounded-pill bg-surface-container text-secondary">
                                            {{ $category[1] }}
                                        </span>

                                    </a>

                                @endforeach

                            </div>

                        </div>


                        <!-- Recent Essays -->
                        <div class="p-4 rounded-4 bg-surface-card shadow-sm mb-4">

                            <h6 class="font-display text-charcoal-deep mb-3">
                                Recent Essays
                            </h6>

                            <div class="d-flex flex-column gap-3">


                                <a href="#"
                                    class="d-flex align-items-center gap-3 text-decoration-none">

                                    <img
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuASo5XX7mQEjLvyk5bf38alffBuk06-ajZaEBrtzuI2JsDpuH6d42cZSkLeagRcHi_p34m5sDjknHQ8ONvR8FaJamYIvQfaSrZuYfVS1gA1CKCrQjRLH3iIPiy4zemIPkG7hRQIjJcv6ad3kffX73d6rKyKUuAK0F8UxGLZ-31UlNVhFWbVBAm6mjrorIB4yPUbnPqlqII8_XjlLGWKf6NT7pwOTS6c9-_YIM8VvFc"
                                        class="rounded-3 object-fit-cover"
                                        style="width: 65px; height: 65px;"
                                        alt="Recent essay"
                                    />

                                    <div>

                                        <small class="text-primary-custom d-block mb-1">
                                            Oct 14, 2023
                                        </small>

                                        <span class="font-display small fw-semibold text-charcoal-deep lh-sm">
                                            Flex and fitness: achieving peak performance
                                        </span>

                                    </div>

                                </a>


                                <a href="#"
                                    class="d-flex align-items-center gap-3 text-decoration-none">

                                    <img
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtKiNBplj4JeZ6zJQN0cSRViUxRKClmACLIzsU3IgvDUO0c0dfqFFPxpjV8iFoWTnYfvmV8dedRT3WT8F0MJftaNcmIdV1sAfNU5A0m3mY_mKQZiYkptAREbEwtN4VZ7YLj2Vk3esoU_es4T2ptxYNey1CM-WuSbsm5TLr6CnStgF7QDaBOk4jqIv2e-Yiu85F68E5tS8VOI12mCnIWDw4TaB6qJ3l539u4b0AObw"
                                        class="rounded-3 object-fit-cover"
                                        style="width: 65px; height: 65px;"
                                        alt="Recent essay"
                                    />

                                    <div>

                                        <small class="text-primary-custom d-block mb-1">
                                            Oct 12, 2023
                                        </small>

                                        <span class="font-display small fw-semibold text-charcoal-deep lh-sm">
                                            Stretching for strength: balancing flexibility
                                        </span>

                                    </div>

                                </a>


                            </div>

                        </div>
                    </div>

                </aside>


            </div>


            <!-- Related Blogs -->
            <section class="mt-5 pt-5 border-top border-subtle">

                <div class="d-flex justify-content-between align-items-end mb-4">

                    <div>

                        <small class="text-uppercase tracking-widest-custom text-primary-custom fw-semibold">
                            Further Exploration
                        </small>

                        <h3 class="font-display text-charcoal-deep mb-0">
                            You May Also Like
                        </h3>

                    </div>

                    <a href="{{ url('/blogs') }}"
                        class="text-primary-custom fw-semibold small text-decoration-none d-none d-sm-inline-flex align-items-center gap-1">

                        View All Journal

                        <span class="material-symbols-outlined fs-6">
                            arrow_forward
                        </span>

                    </a>

                </div>


                <div class="row g-4">


                    <!-- Related Blog 1 -->
                    <div class="col-md-6">

                        <div class="related-blog-card p-3 rounded-4 bg-surface-card shadow-sm d-flex flex-column flex-sm-row gap-3 h-100">

                            <img
                                class="rounded-3 object-fit-cover related-blog-image"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtKiNBplj4JeZ6zJQN0cSRViUxRKClmACLIzsU3IgvDUO0c0dfqFFPxpjV8iFoWTnYfvmV8dedRT3WT8F0MJftaNcmIdV1sAfNU5A0m3mY_mKQZiYkptAREbEwtN4VZ7YLj2Vk3esoU_es4T2ptxYNey1CM-WuSbsm5TLr6CnStgF7QDaBOk4jqIv2e-Yiu85F68E5tS8VOI12mCnIWDw4TaB6qJ3l539u4b0AObw"
                                alt="Yoga practice"
                            />

                            <div class="d-flex flex-column justify-content-between">

                                <div>

                                    <span class="badge rounded-pill bg-terracotta-soft text-primary-custom mb-2">
                                        Blog
                                    </span>

                                    <h6 class="font-display text-charcoal-deep mb-1">
                                        Unlocking inner harmony: the power of yoga
                                    </h6>

                                    <p class="small text-on-surface-variant mb-0">
                                        Discover how daily alignment practices recalibrate balance.
                                    </p>

                                </div>

                                <small class="text-secondary mt-2">
                                    Oct 16, 2023 · 4 min read
                                </small>

                            </div>

                        </div>

                    </div>


                    <!-- Related Blog 2 -->
                    <div class="col-md-6">

                        <div class="related-blog-card p-3 rounded-4 bg-surface-card shadow-sm d-flex flex-column flex-sm-row gap-3 h-100">

                            <img
                                class="rounded-3 object-fit-cover related-blog-image"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7H-KJHXcpa9Hi1LUCUVRzplqYMVG53mQMKFga1uB7Po3jjZIo7qRYdunLKV5rRF11KPZ7gO_UWqO4pG6etXYKenTWOPGpvcRYMA0ryAKfbchAr9AbSMK6X31ity7Eo6jvz0ti5ceiyIzZbqDpAHgo1lWDJgJDehGBgyXIPO6mqsg7UY2HwdGfh0Rkcnew38Cn_bfF4lHq_Kd75I0aiWvoKSYURED5MJ_P0nAwIcI"
                                alt="Fitness practice"
                            />

                            <div class="d-flex flex-column justify-content-between">

                                <div>

                                    <span class="badge rounded-pill bg-terracotta-soft text-primary-custom mb-2">
                                        Blog
                                    </span>

                                    <h6 class="font-display text-charcoal-deep mb-1">
                                        Body, mind, fitness: achieving balance
                                    </h6>

                                    <p class="small text-on-surface-variant mb-0">
                                        Integrating flexibility into high-intensity resistance conditioning.
                                    </p>

                                </div>

                                <small class="text-secondary mt-2">
                                    Oct 12, 2023 · 6 min read
                                </small>

                            </div>

                        </div>

                    </div>


                </div>

            </section>


        </div>

    </main>


    <!-- Footer -->
    @include('Frontend.layout.footer')


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Custom JavaScript -->
    <script>

        // Reading Progress Bar
        const progressBar = document.getElementById('scroll-progress-bar');

        window.addEventListener('scroll', function () {

            const scrollTop = window.scrollY;

            const scrollHeight =
                document.documentElement.scrollHeight -
                document.documentElement.clientHeight;

            if (scrollHeight > 0 && progressBar) {

                const progress = (scrollTop / scrollHeight) * 100;

                progressBar.style.width = Math.min(100, progress) + '%';

            }

        });


        // Bookmark Button
        const bookmarkBtn = document.getElementById('header-bookmark-btn');

        let bookmarked = false;

        if (bookmarkBtn) {

            bookmarkBtn.addEventListener('click', function () {

                bookmarked = !bookmarked;

                const icon = bookmarkBtn.querySelector('.material-symbols-outlined');

                icon.textContent = bookmarked ? 'bookmark' : 'bookmark_border';

                bookmarkBtn.classList.toggle('text-primary-custom', bookmarked);

            });

        }


        // Copy Article Link
        function copyArticleLink() {

            navigator.clipboard.writeText(window.location.href)
                .then(function () {
                    alert('Article link copied successfully!');
                })
                .catch(function () {
                    alert('Unable to copy link.');
                });

        }


        // Share Article
        function shareArticle() {

            if (navigator.share) {

                navigator.share({
                    title: document.title,
                    url: window.location.href
                });

            } else {

                copyArticleLink();

            }

        }


        // Share Button
        document.getElementById('share-blog-btn').addEventListener('click', shareArticle);

    </script>

</body>

</html>