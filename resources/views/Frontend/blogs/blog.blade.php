<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Grid — Mindful Living & Movement Journal | NIRVANA</title>

    <!-- Google Fonts & Material Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..700;1,400..700&family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('build/assets/css/frontend.css') }}">
</head>

<body>

    <!-- Sticky Header -->
    @include('Frontend.layout.header')

    <main class="w-100 pt-5 mt-4">

        <section class="w-100 pt-4 pb-4 bg-surface">
            <div class="container">
                <!-- Title & Subtitle Row -->
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-4">
                    <div style="max-width: 650px;">
                        <small class="text-uppercase tracking-widest-custom text-primary-custom fw-semibold d-block mb-1">The Sanctuary Dispatch</small>
                        <h1 class="font-display display-6 fw-semibold text-charcoal-deep mb-2">Mindful Living &amp; Movement Journal</h1>
                        <p class="text-on-surface-variant mb-0 fs-6">Essays, mindful practices, and movement science curated for balanced, intentional modern living.</p>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <span class="rounded-circle bg-secondary-container text-primary-custom d-flex align-items-center justify-content-center flex-shrink-0" style="width: 42px; height: 42px;">
                            <span class="material-symbols-outlined fs-5">spa</span>
                        </span>
                        <div>
                            <small class="text-uppercase tracking-widest-custom text-secondary-custom d-block">Curated Volume</small>
                            <span class="font-display fw-semibold text-charcoal-deep">Autumn 2023</span>
                        </div>
                    </div>
                </div>

                <!-- Filter Pills & Search Bar -->
                <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3 pt-2">

                    <!-- Search & Sort -->
                    <div class="d-flex align-items-center gap-2">
                        <div class="position-relative flex-grow-1" style="min-width: 220px;">
                            <span class="material-symbols-outlined fs-6 text-outline-custom position-absolute start-0 top-50 translate-middle-y ms-3">search</span>
                            <input type="text" id="articleSearch" class="form-control form-control-custom ps-5 w-100" placeholder="Search essays..." />
                        </div>
                        <div class="position-relative">
                            <select class="form-select form-control-custom pe-5 cursor-pointer" aria-label="Sort articles" style="appearance: none;">
                                <option value="latest">Latest First</option>
                                <option value="popular">Most Popular</option>
                                <option value="oldest">Archived</option>
                            </select>
                            <span class="material-symbols-outlined fs-6 text-secondary-custom position-absolute end-0 top-50 translate-middle-y me-3 pointer-events-none">expand_more</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-100 pb-5 bg-surface">
            <div class="container">
                <div class="card rounded-4 overflow-hidden border-0 shadow-sm hero-card">
                    <div class="row g-0">
                        <!-- Hero Image -->
                        <div class="col-lg-7 position-relative overflow-hidden" style="min-height: 380px;">
                            <img class="w-100 h-100 object-fit-cover hero-img" src="build/assets/images/national-gallery-of-modern-art-mumbai-maharashtra-2-attr-hero.jpeg" />
                            <div class="position-absolute top-0 start-0 m-3 d-flex gap-2 z-2">
                                <span class="badge rounded-pill bg-light text-primary-custom px-3 py-2 text-uppercase fw-semibold tracking-widest-custom shadow-sm">Featured Lead</span>
                                <span class="badge rounded-pill bg-charcoal-deep text-white px-3 py-2">5 min read</span>
                            </div>
                        </div>

                        <!-- Hero Body -->
                        <div class="col-lg-5 p-4 p-xl-5 d-flex flex-column justify-content-between bg-surface-card">
                            <div>
                                <div class="d-flex align-items-center gap-2 small text-secondary-custom mb-2">
                                    <span class="badge rounded-pill bg-terracotta-soft text-primary-custom fw-semibold">Lifestyle &amp; Practice</span>
                                    <span>•</span>
                                    <span class="d-inline-flex align-items-center gap-1">
                                        <span class="material-symbols-outlined fs-6">calendar_today</span>
                                        Sep 26, 2023
                                    </span>
                                </div>
                                <a href="#" class="text-decoration-none text-reset">
                                    <h2 class="font-display h3 text-charcoal-deep mb-3 lh-sm">Mindful movement: enhancing fitness with yoga principles</h2>
                                </a>
                                <p class="text-on-surface-variant small line-clamp-3 mb-3">
                                    When conscious respiration intertwines with physical intensity, athletic performance shifts from sheer mechanical output to an art of somatic equilibrium. Explore how subtle intentionality anchors sustainable physical longevity.
                                </p>

                                <!-- Editorial Quote Micro-callout -->
                                <div class="p-3 rounded-3 bg-surface-warm d-flex gap-2">
                                    <span class="material-symbols-outlined text-primary-custom fs-5 flex-shrink-0">format_quote</span>
                                    <p class="font-display fst-italic text-on-surface-variant small mb-0">"Breath is the quiet bridge between muscle activation and mental stillness."</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between pt-4 mt-3 border-top border-subtle">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rounded-circle bg-terracotta-soft text-primary-custom fw-bold d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                                        PB
                                    </div>
                                    <div>
                                        <h6 class="mb-0 small fw-bold text-charcoal-deep">Peter Bowman</h6>
                                        <small class="text-secondary-custom">Head of Somatics</small>
                                    </div>
                                </div>

                                <a href="#" class="btn btn-primary-custom d-inline-flex align-items-center gap-1">
                                    <span>Read Essay</span>
                                    <span class="material-symbols-outlined fs-6">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3-Column Catalogue Grid -->
        <section class="w-100 pb-5 bg-surface">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div>
                        <small class="text-uppercase tracking-widest-custom text-primary-custom fw-semibold d-block">Archive Catalogue</small>
                        <h3 class="font-display h4 text-charcoal-deep mb-0">Recent Dispatches &amp; Guides</h3>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <small class="text-secondary-custom text-uppercase tracking-widest-custom d-none d-md-inline">Layout:</small>
                        <button class="icon-btn text-primary-custom" aria-label="Grid layout view">
                            <span class="material-symbols-outlined fs-5">grid_view</span>
                        </button>
                    </div>
                </div>

                <!-- Dynamic Card Row -->
                <div class="row g-4" id="articleCardsGrid">

                    @forelse($blogs as $blog)


                    <div class="col-lg-4 col-md-6">

                        <article class="blog-card">

                            <img
                                src="{{ asset('storage/' . $blog->blog_image) }}"
                                alt="{{ $blog->title }}"
                                class="blog-image">

                            <div class="blog-info">

                                <small>
                                    {{ \Carbon\Carbon::parse($blog->post_date)->format('d M Y') }}
                                </small>

                                <h3>
                                    {{ $blog->title }}
                                </h3>

                                <p>
                                    {{ Str::limit(strip_tags($blog->description), 120, '...') }}
                                </p>

                                <a href="{{ route('frontend.blogs.show', $blog->slug) }}">
                                    Read More
                                    <span class="material-symbols-outlined">arrow_forward</span>
                                </a>

                            </div>

                        </article>

                    </div>


                    @empty

                    <div class="col-12 text-center">
                        <p>No blogs available.</p>
                    </div>

                    @endforelse

                </div>

                <!-- Pagination -->
                <nav aria-label="Journal pagination" class="mt-5 d-flex justify-content-center align-items-center gap-2">
                    <button class="icon-btn text-outline-custom" disabled aria-label="Previous Page">
                        <span class="material-symbols-outlined fs-5">west</span>
                    </button>
                    <button class="icon-btn bg-primary-custom text-white fw-bold">1</button>
                    <button class="icon-btn">2</button>
                    <button class="icon-btn">3</button>
                    <span class="text-outline-custom px-1">...</span>
                    <button class="icon-btn">8</button>
                    <button class="btn btn-sm rounded-pill bg-surface-container text-on-surface px-3 py-2 d-inline-flex align-items-center gap-1 border-0" aria-label="Next Page">
                        <span>Next Page</span>
                        <span class="material-symbols-outlined fs-6">east</span>
                    </button>
                </nav>
            </div>
        </section>
    </main>

    <!-- Footer -->
    @include('Frontend.layout.footer')

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Interactive Filter & Search Logic -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterButtons = document.querySelectorAll('#categoryFilterBar button');
            const searchInput = document.getElementById('articleSearch');
            const cards = document.querySelectorAll('#articleCardsGrid article');
            const visibleCountElem = document.getElementById('visibleCount');

            let currentCategory = 'all';
            let searchQuery = '';

            function updateGrid() {
                let count = 0;
                cards.forEach(card => {
                    const cardCol = card.closest('.col-md-6');
                    const cardCategory = card.getAttribute('data-category');
                    const title = card.querySelector('h5')?.textContent.toLowerCase() || '';
                    const body = card.querySelector('p')?.textContent.toLowerCase() || '';

                    const matchesCategory = (currentCategory === 'all') || (cardCategory === currentCategory);
                    const matchesSearch = title.includes(searchQuery) || body.includes(searchQuery);

                    if (matchesCategory && matchesSearch) {
                        if (cardCol) cardCol.classList.remove('d-none');
                        count++;
                    } else {
                        if (cardCol) cardCol.classList.add('d-none');
                    }
                });

                if (visibleCountElem) {
                    visibleCountElem.textContent = count;
                }
            }

            filterButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterButtons.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    currentCategory = btn.getAttribute('data-category') || 'all';
                    updateGrid();
                });
            });

            if (searchInput) {
                searchInput.addEventListener('input', (e) => {
                    searchQuery = e.target.value.toLowerCase().trim();
                    updateGrid();
                });
            }
        });
    </script>
</body>

</html>