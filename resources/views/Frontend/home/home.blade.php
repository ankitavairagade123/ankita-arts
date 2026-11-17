<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Art Gallery</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/css/frontend.css') }}">
</head>

<body>

@include('Frontend.layout.header')
    <!-- HERO SECTION -->
    <section class="hero-section">

        <div id="heroCarousel" class="carousel slide carousel-fade hero-carousel" data-bs-ride="carousel"
            data-bs-interval="2000">

            <div class="carousel-inner">

                <!-- SLIDE 1 -->
                <div class="carousel-item active">

                    <img src="{{ asset('build/assets/images/pexels-bertellifotografia-15138850.jpg') }}"
                        alt="Art Gallery">

                    <div class="hero-overlay"></div>

                    <div class="container hero-content">
                        <div class="hero-text">

                            <h1>
                                Explore a World of Artistic Wonders
                            </h1>

                            <p>
                                Discover the beauty of creativity and explore
                                extraordinary artworks from different generations.
                            </p>

                        </div>
                        <div class="hero-buttons">
                            <a href="#gallery" class="btn btn-primary">
                                Explore Gallery ↗
                            </a>

                            <a href="#about" class="btn btn-outline-light">
                                Discover More →
                            </a>
                        </div>
                    </div>

                </div>


                <!-- SLIDE 2 -->
                <div class="carousel-item">

                    <img src="{{ asset('build/assets/images/pexels-protsilver-chen-292687888-27584011.jpg') }}"
                        alt="Art Paintings">

                    <div class="hero-overlay"></div>

                    <div class="container hero-content">
                        <div class="hero-text">


                            <h1>
                                Discover the Beauty Behind Every Masterpiece
                            </h1>

                            <p>
                                Experience the emotions, stories and imagination
                                captured through every brushstroke.
                            </p>

                        </div>
                        <div class="hero-buttons">
                            <a href="#gallery" class="btn btn-primary">
                                View Paintings ↗
                            </a>

                            <a href="#blogs" class="btn btn-outline-light">
                                Read Stories →
                            </a>
                        </div>

                    </div>
                </div>


                <!-- SLIDE 3 -->
                <div class="carousel-item">

                    <img src="{{ asset('build/assets/images/pexels-spencerlee-6727476.jpg') }}" alt="Creative Art">

                    <div class="hero-overlay"></div>

                    <div class="container hero-content">
                        <div class="hero-text">

                            <h1>
                                Experience Creativity Beyond Boundaries
                            </h1>

                            <p>
                                Celebrate artistic expression and discover
                                inspiring masterpieces that leave a lasting impression.
                            </p>

                        </div>
                        <div class="hero-buttons">
                            <a href="#gallery" class="btn btn-primary">
                                Explore Collection ↗
                            </a>

                            <a href="#contact" class="btn btn-outline-light">
                                Contact Us →
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- ABOUT SECTION -->
    <section class="about-card" id="about">

        <div>

            <div class="row align-items-center g-4 g-lg-5">

                <!-- Left: Image Column -->
                <div class="col-12 col-lg-5">

                    <div class="about-image-wrapper">

                        <img src="{{ asset('build/assets/images/photo-1735605917461-4c1b77a6616f.avif') }}"
                            alt="Art Gallery Interior"
                            class="about-image">

                        <div class="image-overlay"></div>

                        <div class="photo-tag d-flex justify-content-between align-items-center">

                            <div class="d-flex align-items-center gap-2 overflow-hidden">
                                <span class="status-dot"></span>

                                <p class="photo-caption mb-0">
                                    Fig. 04 — Casa Terre, Valencia
                                </p>
                            </div>

                            <span class="coordinates">39°28′ N</span>

                        </div>

                    </div>

                </div>

                <!-- Right: Text Column -->
                <div class="col-12 col-lg-7">

                    <div class="about-content">

                        <!-- Category -->
                        <div class="category-row d-flex align-items-center gap-3 flex-wrap">

                            <span class="category-badge">Our Story</span>

                            <span class="category-line"></span>

                            <span class="category-text">
                                Architecture & Spatial Craft
                            </span>

                        </div>

                        <!-- Main Heading -->
                        <h2 class="about-heading">
                            Explore a World of Artistic Wonders and Discover the Beauty Behind Every Masterpiece
                        </h2>

                        <!-- Description -->
                        <p class="about-description">
                            Our journey began in a modest, sunlit brick loft in the heart of [City/Neighborhood].
                            Inspired by the raw, untapped talent in our local community, we set out to create a space
                            that broke away from the traditional, often intimidating gallery experience. We wanted
                            to build an open environment where seasoned collectors and first-time buyers alike could
                            connect deeply with visual storytelling.

                            We carefully curate exhibitions that challenge perspectives, ignite conversations,
                            and celebrate diversity in medium and thought. We proudly represent both established
                            international icons and emerging local voices. From groundbreaking abstract paintings
                            and avant-garde sculptures to cutting-edge digital installations, our collection reflects
                            the ever-evolving pulse of modern culture.
                        </p>

                        <!-- Details -->
                        <div class="row details-row">

                            <div class="col-6 col-sm-4 detail-item">
                                <span class="detail-label">Materiality</span>
                                <span class="detail-value">Porous Tufa Stone</span>
                            </div>

                            <div class="col-6 col-sm-4 detail-item">
                                <span class="detail-label">Atmosphere</span>
                                <span class="detail-value">Balearic Low Sun</span>
                            </div>

                            <div class="col-12 col-sm-4 detail-item">
                                <span class="detail-label">Philosophy</span>
                                <span class="detail-value">Tactile Permanence</span>
                            </div>

                        </div>

                        <!-- Buttons -->
                        <div class="about-actions d-flex align-items-center flex-wrap gap-3">

                            <a href="#about" class="btn btn-terra">
                                Learn More About Us

                                <span class="material-symbols-outlined">
                                    arrow_forward
                                </span>
                            </a>

                            <a href="#gallery" class="folio-link">
                                View Spatial Folio

                                <span class="material-symbols-outlined">
                                    north_east
                                </span>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- GALLERY SECTION -->
    <section class="gallery-section section-padding" id="gallery">

        <div class="container">

            <div class="row align-items-end mb-4">

                <div class="col-md-6">
                    <span class="section-label">SELECTED ARCHIVES</span>
                    <h2>Curated Works Showcase</h2>
                    <p>38 Works Total</p>
                </div>

                <div class="col-md-6 text-md-end">
                    <div class="filter-buttons" id="gallery-filters">
                        <button class="filter-tab active" data-filter="all">All</button>
                        <button class="filter-tab" data-filter="architecture">Architecture</button>
                        <button class="filter-tab" data-filter="interior">Interior</button>
                        <button class="filter-tab" data-filter="craft">Craft</button>
                    </div>
                </div>

            </div>


            <div class="row g-4 gallery-grid">

                <!-- Gallery Item 1 -->
                <div class="col-lg-7 gallery-item" data-category="architecture">
                    <div class="gallery-card">

                        <div class="gallery-image"
                            style="background-image:url('build/assets/images/Dnyaneshwar-mane-Artist.jpg')">

                            <span class="image-label">Stockholm • 2024</span>
                        </div>

                        <div class="gallery-info">
                            <span class="category">Timber • Glazing</span>
                            <h3>The Nordic Pavilion</h3>
                            <p>
                                Minimalist timber architecture harmonized with
                                Nordic pine woods and diffused morning daylight.
                                Designed for contemplative community gatherings.
                            </p>
                            <a href="">View Architecture Study →</a>
                        </div>

                    </div>
                </div>


                <!-- Gallery Item 2 -->
                <div class="col-lg-5 gallery-item" data-category="interior">
                    <div class="gallery-card">

                        <div class="gallery-image"
                            style="background-image:url('build/assets/images/soft-orbit.jpg')">

                            <span class="image-label">Santa Fe • 2024</span>
                        </div>

                        <div class="gallery-info">
                            <span class="category">Cast Concrete • Courtyard</span>
                            <h3>Solarium Residence</h3>
                            <p>
                                Raw cast concrete, dramatic overhead aperture,
                                and native high-desert botanical courtyards
                                establishing thermal mass stability.
                            </p>
                            <a href="#gallery">View Residential Study →</a>
                        </div>

                    </div>
                </div>


                <!-- Gallery Item 3 -->
                <div class="col-12 gallery-item" data-category="craft">
                    <div class="gallery-card gallery-wide">

                        <div class="gallery-image"
                            style="background-image:url('build/assets/images/borrowed-light.jpg')">

                            <span class="image-label">Kyoto • 2025</span>
                        </div>

                        <div class="gallery-info">
                            <span class="category">Stoneware • Sculpture</span>
                            <h3>Monochrome Ceramic Forms</h3>
                            <p>
                                Limited run sculptural objects throwing asymmetric
                                silhouettes in raw, unglazed stoneware.
                                Crafted in collaboration with 5th-generation potters.
                            </p>
                            <a href="#gallery">Inspect Object Series →</a>
                        </div>

                    </div>
                </div>

            </div>

            <div class="text-center mt-5">
                <a href="{{ url('/gallery') }}" class="btn btn-dark">View Full Gallery (38 Works) →</a>
            </div>

        </div>
    </section>


    <!-- BLOG SECTION -->
   <section class="blog-section py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-uppercase">Our Journal</span>
            <h2>Latest Stories & Insights</h2>
            <p>Explore our latest articles and discoveries.</p>
        </div>

        <div class="row g-4">

            @forelse($blogs as $blog)

                <div class="col-lg-4 col-md-6">

                    <div class="blog-card h-100">

                        <div class="blog-image">
                            <img
                                src="{{ asset('storage/' . $blog->blog_image) }}"
                                alt="{{ $blog->title }}"
                                class="w-100"
                            >
                        </div>

                        <div class="blog-info">

                            <small>
                                {{ \Carbon\Carbon::parse($blog->post_date)->format('d M, Y') }}
                            </small>

                            <h3>{{ $blog->title }}</h3>

                            <p>
                                {{ \Illuminate\Support\Str::limit(strip_tags($blog->description), 120) }}
                            </p>

                            <a href="{{ route('frontend.blogs.show', $blog->slug) }}">
                                Read More
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center">
                    <p>No blogs available right now.</p>
                </div>

            @endforelse

        </div>

    </div>
</section>


    <!-- CONTACT SECTION -->
    <section class="contact-section section-padding" id="contact">

        <div class="container">

            <div class="contact-wrapper">

                <div class="row g-5">

                    <div class="col-lg-5">

                        <span class="section-label">INQUIRIES & COMMISSIONS</span>

                        <h2>Start a Conversation</h2>

                        <p>
                            We accept commissions for architectural concepts,
                            interior environments, and selective design direction
                            worldwide. Let us know how we can collaborate.
                        </p>

                        <div class="contact-detail">
                            <span class="material-symbols-outlined">mail</span>
                            <div>
                                <p>General Inquiries & Press</p>
                                <a href="mailto:inquiries@maisonatelier.design">
                                    inquiries@maisonatelier.design
                                </a>
                            </div>
                        </div>

                        <div class="contact-detail">
                            <span class="material-symbols-outlined">call</span>
                            <div>
                                <p>Paris Central Office</p>
                                <strong>+33 (0)1 42 78 90 22</strong>
                            </div>
                        </div>

                        <div class="contact-detail">
                            <span class="material-symbols-outlined">location_on</span>
                            <div>
                                <p>Tokyo Architecture Annex</p>
                                <strong>5-7-22 Minamiaoyama, Minato-ku, Tokyo</strong>
                            </div>
                        </div>

                        <div class="social-links">
                            <p>SOCIAL PRESENCE</p>
                            <a href="#">Instagram</a> •
                            <a href="#">LinkedIn</a> •
                            <a href="#">Behance</a> •
                            <a href="#">ReadCV</a>
                        </div>

                    </div>


                    <!-- CONTACT FORM -->
                    <div class="col-lg-7">

                        <form id="inquiry-form" class="inquiry-form">

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="e.g. Elena Rostova" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="e.g. elena@studio.com" required>
                                </div>

                                <div class="col-12">
                                    <label>Project Scope</label>

                                    <div class="scope-selector" id="scope-selector">

                                        <button type="button" class="scope-btn active">
                                            Architecture
                                        </button>

                                        <button type="button" class="scope-btn">
                                            Interior
                                        </button>

                                        <button type="button" class="scope-btn">
                                            Art Direction
                                        </button>

                                        <button type="button" class="scope-btn">
                                            Press / Monograph
                                        </button>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="brief">Project Brief & Location</label>
                                    <textarea id="brief" name="brief" class="form-control" rows="5"
                                        placeholder="Tell us about your spatial ambition, site context, estimated timeframe, and intended scale..."
                                        required></textarea>
                                </div>

                                <div class="col-12 d-flex justify-content-between align-items-center flex-wrap gap-3">

                                    <span class="confidentiality">
                                        <span class="material-symbols-outlined">lock</span>
                                        Confidentiality guaranteed
                                    </span>

                                    <button type="submit" class="btn btn-primary">
                                        Send Inquiry →
                                    </button>

                                </div>

                                <div class="col-12">
                                    <div id="form-status" class="alert alert-success d-none">
                                        Thank you. Your inquiry has been received.
                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- FOOTER -->
@include('Frontend.layout.footer')


    <!-- JavaScript -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Gallery filter
        const filterButtons = document.querySelectorAll(".filter-tab");
        const galleryItems = document.querySelectorAll(".gallery-item");

        filterButtons.forEach(button => {
            button.addEventListener("click", function() {

                filterButtons.forEach(btn => btn.classList.remove("active"));
                this.classList.add("active");

                const filter = this.dataset.filter;

                galleryItems.forEach(item => {
                    if (filter === "all" || item.dataset.category === filter) {
                        item.style.display = "";
                    } else {
                        item.style.display = "none";
                    }
                });

            });
        });


        // Project scope selector
        const scopeButtons = document.querySelectorAll(".scope-btn");

        scopeButtons.forEach(button => {
            button.addEventListener("click", function() {

                scopeButtons.forEach(btn => btn.classList.remove("active"));
                this.classList.add("active");

            });
        });


        // Contact form
        const inquiryForm = document.getElementById("inquiry-form");

        inquiryForm.addEventListener("submit", function(event) {

            event.preventDefault();

            document.getElementById("form-status").classList.remove("d-none");

            this.reset();

        });
    </script>

</body>

</html>