<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us — NIRVANA Sanctuary & Somatic Movement</title>

    <!-- Google Fonts & Material Symbols -->
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
    @include('Frontend/layout/header')

    <main class="w-100 pt-5 mt-4">
        <div class="flower-corners">

            <!-- Top Left -->
            <svg class="flower top-left" viewBox="0 0 150 150">
                <path d="M0 0 C40 0 40 10 45 35 C55 10 80 0 95 20 C110 40 85 55 65 65 C100 55 120 65 115 90 C110 115 80 105 65 85 C75 120 55 145 30 130 C5 115 25 85 45 65 C15 80 0 55 0 0 Z" />
            </svg>

            <!-- Top Right -->
            <svg class="flower top-right" viewBox="0 0 150 150">
                <path d="M0 0 C40 0 40 10 45 35 C55 10 80 0 95 20 C110 40 85 55 65 65 C100 55 120 65 115 90 C110 115 80 105 65 85 C75 120 55 145 30 130 C5 115 25 85 45 65 C15 80 0 55 0 0 Z" />
            </svg>

            <!-- Bottom Left -->
            <svg class="flower bottom-left" viewBox="0 0 150 150">
                <path d="M0 0 C40 0 40 10 45 35 C55 10 80 0 95 20 C110 40 85 55 65 65 C100 55 120 65 115 90 C110 115 80 105 65 85 C75 120 55 145 30 130 C5 115 25 85 45 65 C15 80 0 55 0 0 Z" />
            </svg>

            <!-- Bottom Right -->
            <svg class="flower bottom-right" viewBox="0 0 150 150">
                <path d="M0 0 C40 0 40 10 45 35 C55 10 80 0 95 20 C110 40 85 55 65 65 C100 55 120 65 115 90 C110 115 80 105 65 85 C75 120 55 145 30 130 C5 115 25 85 45 65 C15 80 0 55 0 0 Z" />
            </svg>

            <!-- Top Center -->
            <svg class="flower top-center" viewBox="0 0 150 150">
                <path d="M0 0 C40 0 40 10 45 35 C55 10 80 0 95 20 C110 40 85 55 65 65 C100 55 120 65 115 90 C110 115 80 105 65 85 C75 120 55 145 30 130 C5 115 25 85 45 65 C15 80 0 55 0 0 Z" />
            </svg>

            <!-- Middle Left -->
            <svg class="flower middle-left" viewBox="0 0 150 150">
                <path d="M0 0 C40 0 40 10 45 35 C55 10 80 0 95 20 C110 40 85 55 65 65 C100 55 120 65 115 90 C110 115 80 105 65 85 C75 120 55 145 30 130 C5 115 25 85 45 65 C15 80 0 55 0 0 Z" />
            </svg>

            <!-- Middle Right -->
            <svg class="flower middle-right" viewBox="0 0 150 150">
                <path d="M0 0 C40 0 40 10 45 35 C55 10 80 0 95 20 C110 40 85 55 65 65 C100 55 120 65 115 90 C110 115 80 105 65 85 C75 120 55 145 30 130 C5 115 25 85 45 65 C15 80 0 55 0 0 Z" />
            </svg>

            <!-- Bottom Center -->
            <svg class="flower bottom-center" viewBox="0 0 150 150">
                <path d="M0 0 C40 0 40 10 45 35 C55 10 80 0 95 20 C110 40 85 55 65 65 C100 55 120 65 115 90 C110 115 80 105 65 85 C75 120 55 145 30 130 C5 115 25 85 45 65 C15 80 0 55 0 0 Z" />
            </svg>

        </div>

        <!-- Your existing container starts here -->
        <div class="container py-2">
            <!-- Keep all your existing row and column HTML here -->
        </div>
        <!-- SECTION 1: BREADCRUMB & HERO EDITORIAL BANNER -->
        <section class="w-100 py-5 bg hero-about">
            <div class="container py-2">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7">
                        <div class="badge rounded-pill bg-terracotta-soft text-primary-custom text-uppercase tracking-widest-custom px-3 py-2 fw-semibold mb-3 d-inline-flex align-items-center gap-2">
                            <span class="rounded-circle bg-primary-container" style="width: 6px; height: 6px"></span>
                            Welcome to Artistic World
                        </div>
                        <h1 class="font-display display-5 fw-semibold text-charcoal-deep mb-3 lh-sm">
                            Where vision takes physical form.
                            <br class="d-none d-sm-inline" />

                        </h1>
                        <p class="fs-6 text-secondary-custom lh-lg mb-4" style="max-width: 580px;">
                            Step into a curated space of dialogue, color, and form. At A.V Art Gallery, we showcase contemporary voices that challenge, inspire, and transform how you see the world. Explore our rotating exhibitions and discover works that speak long after you leave the room.
                        </p>
                        <div class="d-flex flex-wrap align-items-center gap-3">
                            <a href="#philosophy" class="btn btn-primary-custom shadow-sm">Discover Our Art</a>
                            <div class="d-flex align-items-center gap-2 small text-secondary-custom">
                                <span class="material-symbols-outlined text-primary-custom fs-5">verified</span>
                                <span>12+ Years of &amp; Art Mastery</span>
                            </div>
                        </div>
                    </div>

                    <!-- Hero Image with subtle backdrop tilt -->
                    <div class="col-lg-5 position-relative">
                        <div class="hero-card-backdrop"></div>
                        <div class="position-relative rounded-4 overflow-hidden shadow-sm bg-surface-card">
                            <img class="w-100 object-fit-cover" style="height: 434px;" src="build/assets/images/hw6shh8urw-art-galleries-6-g3w4z.webp" />
                            <div class="position-absolute bottom-0 start-0 end-0 m-2 p-3 rounded-3 hero-overlay-pill shadow-sm d-flex justify-content-between align-items-center">
                                <div>
                                    <small class="text-uppercase tracking-widest-custom text-primary-custom fw-semibold d-block">Sanctuary Principle</small>
                                    <span class="font-display fw-semibold text-charcoal-deep fs-6">Presence precedes performance</span>
                                </div>
                                <div class="rounded-circle bg-terracotta-soft text-primary-custom d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                                    <span class="material-symbols-outlined fs-5">spa</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: WHAT WE DO & PHILOSOPHY SPOTLIGHT -->
        <section class="w-100 py-5 bg-surface-warm" id="philosophy">
            <div class="container py-3">
                <div class="text-center mx-auto mb-5" style="max-width: 720px;">
                    <small class="text-uppercase tracking-widest-custom text-primary-custom fw-semibold d-block mb-1">What We Do</small>
                    <h2 class="font-display display-6 text-charcoal-deep mb-2">We help you reach your goals, whether in sports or personal development</h2>
                    <p class="text-secondary-custom small mb-0">A harmonious blend of mindful vinyasa, somatic release, and physical conditioning designed to cultivate resilience, fluidity, and internal calm.</p>
                </div>

                <div class="row g-4 align-items-stretch">
                    <!-- Director Feature Card (Col 7) -->
                    <div class="col-lg-7">
                        <div class="card rounded-4 p-4 p-md-5 h-100 d-flex flex-column justify-content-between border-0 shadow-sm bg-surface-card">
                            <div class="d-flex flex-column flex-sm-row gap-4 align-items-start">
                                <div class="position-relative flex-shrink-0 rounded-3 overflow-hidden shadow-sm" style="width: 170px; height: 220px;">
                                    <img class="w-100 h-100 object-fit-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKjb6031FGMBKgvpCTOR9R_PFUOEGxIz_Pd1YUv1UGrIkfBLvbbH65zw4aPn00Qja3fYPzmJGhtvJipEqiaNk1pactH4-Kfv9EhoZXEUmw6jGYak8CvOBrvqQJQVgIptE7EjRLtrGAI-1Se3KnogbJ7_ztUaKW65IGYW8JV8C3ydfkMDaOnQNeiSitfi8FM41FLTcJp5pqeJ7M1hNS31GFXlLCG-jkOPw06k3FOpE" alt="Peter Bowman" />
                                    <button class="btn btn-sm btn-primary-container rounded-circle position-absolute bottom-0 end-0 m-2 d-flex align-items-center justify-content-center shadow" style="width: 38px; height: 38px;" aria-label="Listen to Guided Philosophy">
                                        <span class="material-symbols-outlined fs-5" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                                    </button>
                                </div>

                                <div class="flex-grow-1">
                                    <small class="text-uppercase tracking-widest-custom text-secondary-custom fw-semibold d-block">Creative Director &amp; Somatic Lead</small>
                                    <h4 class="font-display text-charcoal-deep mb-2">Peter Bowman</h4>
                                    <blockquote class="font-display fst-italic text-secondary-custom small bg-surface-cream p-3 rounded-3 mb-2">
                                        “Movement is not simply the execution of form; it is an intimate conversation with your natural nervous system.”
                                    </blockquote>
                                    <p class="small text-on-surface-variant mb-0">With more than fifteen years studying Iyengar disciplines and somatic recovery across Kyoto and California, Peter guides Nirvana's pedagogical trajectory.</p>
                                </div>
                            </div>

                            <!-- Metrics Strip -->
                            <div class="row text-center mt-4 pt-3 bg-surface-container-low rounded-3 p-3 g-2">
                                <div class="col-4">
                                    <span class="font-display h4 text-primary-custom d-block mb-0">15k+</span>
                                    <small class="text-secondary-custom">Practitioners</small>
                                </div>
                                <div class="col-4 border-start border-end border-subtle">
                                    <span class="font-display h4 text-primary-custom d-block mb-0">28</span>
                                    <small class="text-secondary-custom">Master Instructors</small>
                                </div>
                                <div class="col-4">
                                    <span class="font-display h4 text-primary-custom d-block mb-0">99.4%</span>
                                    <small class="text-secondary-custom">Satisfaction</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pillar List Cards (Col 5) -->
                    <div class="col-lg-5 d-flex flex-column gap-3">
                        <div class="card rounded-4 p-4 border-0 shadow-sm bg-surface-card d-flex flex-row align-items-start gap-3">
                            <div class="rounded-circle bg-terracotta-soft text-primary-custom d-flex align-items-center justify-content-center flex-shrink-0" style="width: 48px; height: 48px;">
                                <span class="material-symbols-outlined fs-4">air</span>
                            </div>
                            <div>
                                <h5 class="font-display text-charcoal-deep mb-1">Conscious Breath &amp; Pranayama</h5>
                                <p class="small text-secondary-custom mb-0">Techniques calibrated to soothe autonomic hyper-arousal, expanding respiratory capacity and stabilizing daily focus.</p>
                            </div>
                        </div>

                        <div class="card rounded-4 p-4 border-0 shadow-sm bg-surface-card d-flex flex-row align-items-start gap-3">
                            <div class="rounded-circle bg-secondary-container text-on-secondary-container d-flex align-items-center justify-content-center flex-shrink-0" style="width: 48px; height: 48px;">
                                <span class="material-symbols-outlined fs-4">accessibility_new</span>
                            </div>
                            <div>
                                <h5 class="font-display text-charcoal-deep mb-1">Somatic Strength &amp; Alignment</h5>
                                <p class="small text-secondary-custom mb-0">Progressive sequences focused on joint decompression, spinal fluidity, and deep kinetic chain activation.</p>
                            </div>
                        </div>

                        <div class="card rounded-4 p-4 border-0 shadow-sm bg-surface-card d-flex flex-row align-items-start gap-3">
                            <div class="rounded-circle bg-surface-container text-tertiary-custom d-flex align-items-center justify-content-center flex-shrink-0" style="width: 48px; height: 48px;">
                                <span class="material-symbols-outlined fs-4">self_improvement</span>
                            </div>
                            <div>
                                <h5 class="font-display text-charcoal-deep mb-1">Restorative Recovery &amp; Yin</h5>
                                <p class="small text-secondary-custom mb-0">Passive, prop-supported postures designed to release fascial constriction and quiet mental restlessness.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: YOGA & FITNESS / SOLUTIONS -->
        <section class="w-100 py-5 bg-surface">
            <div class="container py-2">
                <div class="row g-5 align-items-center">
                    <!-- Visual Arrangement Left -->
                    <div class="col-lg-6 position-relative">
                        <div class="rounded-4 overflow-hidden shadow-sm">
                            <img class="w-100 object-fit-cover" style="height: 460px;" src="build/assets/images/images.jpeg" />
                        </div>
                        <!-- Floating Badge -->
                        <div class="position-absolute bottom-0 end-0 m-4 p-3 bg-surface-cream rounded-3 shadow d-none d-sm-block" style="max-width: 260px;">
                            <div class="d-flex align-items-center gap-1 text-primary-custom mb-1">
                                <span class="material-symbols-outlined fs-6">verified</span>
                                <strong class="small">Tailored Guidance</strong>
                            </div>
                            <p class="small text-secondary-custom mb-0">Personalized biomechanical feedback suited to every stage of progression.</p>
                        </div>
                    </div>

                    <!-- Content Right -->
                    <div class="col-lg-6">
                        <small class="text-uppercase tracking-widest-custom text-primary-custom fw-semibold d-block mb-1">Yoga and Fitness</small>
                        <h2 class="font-display display-6 text-charcoal-deep mb-3">Stay passionate about wellbeing</h2>
                        <p class="text-secondary-custom lh-lg mb-4">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                        <div class="d-flex flex-column gap-3 mb-4">
                            <div class="p-3 rounded-3 bg-surface-container-low d-flex align-items-start gap-3">
                                <span class="material-symbols-outlined text-primary-custom fs-5 mt-1">check_circle</span>
                                <div>
                                    <h6 class="font-sans fw-bold text-charcoal-deep mb-1">Adipiscing elit, sed do eiusmod</h6>
                                    <p class="small text-secondary-custom mb-0">Foundational practices engineered to awaken strength while honoring joint anatomy.</p>
                                </div>
                            </div>
                            <div class="p-3 rounded-3 bg-surface-container-low d-flex align-items-start gap-3">
                                <span class="material-symbols-outlined text-primary-custom fs-5 mt-1">check_circle</span>
                                <div>
                                    <h6 class="font-sans fw-bold text-charcoal-deep mb-1">Tempor incididunt labore dolore magna</h6>
                                    <p class="small text-secondary-custom mb-0">Specialized immersions targeting dynamic core stability, hip opening, and neural unwinding.</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3">
                            <a href="#" class="btn btn-primary-container px-4 py-2">View More</a>
                            <a href="#" class="text-decoration-none text-secondary-custom fw-semibold small d-inline-flex align-items-center gap-1">
                                <span>View Course Schedule</span>
                                <span class="material-symbols-outlined fs-6">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: TESTIMONIALS / WHAT OUR CUSTOMERS SAY -->
        <section class="w-100 py-5 bg-surface-container-low">
            <div class="container py-3">
                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-end gap-3 mb-5">
                    <div style="max-width: 580px;">
                        <small class="text-uppercase tracking-widest-custom text-primary-custom fw-semibold d-block">Testimonials</small>
                        <h2 class="font-display display-6 text-charcoal-deep mb-1">Our customers say</h2>
                        <p class="text-secondary-custom small mb-0">Genuine voices from students, athletes, and seekers who transformed their rhythm at Nirvana.</p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="text-primary-custom d-flex">
                            <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <span class="small fw-bold text-charcoal-deep">4.9 / 5.0 Community Rating</span>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Review 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card rounded-4 p-4 border-0 shadow-sm bg-surface-card h-100 d-flex flex-column justify-content-between card-hover-shadow">
                            <div>
                                <div class="text-primary-custom d-flex mb-3">
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="fst-italic text-charcoal-deep small mb-4">“Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing elit, sed do eiusmod tempor incididunt ut labore.”</p>
                            </div>
                            <div class="testimonial-author-box d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="font-display text-charcoal-deep mb-0">Susan Bishop</h6>
                                    <small class="text-secondary-custom">Papillion, NE</small>
                                </div>
                                <span class="material-symbols-outlined text-outline-custom fs-5">format_quote</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card rounded-4 p-4 border-0 shadow-sm bg-surface-card h-100 d-flex flex-column justify-content-between card-hover-shadow">
                            <div>
                                <div class="text-primary-custom d-flex mb-3">
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="fst-italic text-charcoal-deep small mb-4">“Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. The somatic focus completely healed my lower back fatigue.”</p>
                            </div>
                            <div class="testimonial-author-box d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="font-display text-charcoal-deep mb-0">Frank Parker</h6>
                                    <small class="text-secondary-custom">Pasadena, CA</small>
                                </div>
                                <span class="material-symbols-outlined text-outline-custom fs-5">format_quote</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card rounded-4 p-4 border-0 shadow-sm bg-surface-card h-100 d-flex flex-column justify-content-between card-hover-shadow">
                            <div>
                                <div class="text-primary-custom d-flex mb-3">
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="fst-italic text-charcoal-deep small mb-4">“Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. A quiet refuge in the middle of a frantic career cycle.”</p>
                            </div>
                            <div class="testimonial-author-box d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="font-display text-charcoal-deep mb-0">Alan Farmer</h6>
                                    <small class="text-secondary-custom">Lowell, MS</small>
                                </div>
                                <span class="material-symbols-outlined text-outline-custom fs-5">format_quote</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card rounded-4 p-4 border-0 shadow-sm bg-surface-card h-100 d-flex flex-column justify-content-between card-hover-shadow">
                            <div>
                                <div class="text-primary-custom d-flex mb-3">
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="fst-italic text-charcoal-deep small mb-4">“Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing elit, sed do eiusmod tempor incididunt ut labore.”</p>
                            </div>
                            <div class="testimonial-author-box d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="font-display text-charcoal-deep mb-0">John Brooks</h6>
                                    <small class="text-secondary-custom">Cranston, RI</small>
                                </div>
                                <span class="material-symbols-outlined text-outline-custom fs-5">format_quote</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 5 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card rounded-4 p-4 border-0 shadow-sm bg-surface-card h-100 d-flex flex-column justify-content-between card-hover-shadow">
                            <div>
                                <div class="text-primary-custom d-flex mb-3">
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="fst-italic text-charcoal-deep small mb-4">“Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. The teachers are grounded, articulate, and immensely respectful.”</p>
                            </div>
                            <div class="testimonial-author-box d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="font-display text-charcoal-deep mb-0">Ellen Austin</h6>
                                    <small class="text-secondary-custom">Edison, NJ</small>
                                </div>
                                <span class="material-symbols-outlined text-outline-custom fs-5">format_quote</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card rounded-4 p-4 border-0 shadow-sm bg-surface-card h-100 d-flex flex-column justify-content-between card-hover-shadow">
                            <div>
                                <div class="text-primary-custom d-flex mb-3">
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined fs-6" style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="fst-italic text-charcoal-deep small mb-4">“Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. The community here has given me accountability and peace.”</p>
                            </div>
                            <div class="testimonial-author-box d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="font-display text-charcoal-deep mb-0">Cameron Dyson</h6>
                                    <small class="text-secondary-custom">Ferndale, CA</small>
                                </div>
                                <span class="material-symbols-outlined text-outline-custom fs-5">format_quote</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    @include('Frontend/layout/footer')
    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Form Interactivity -->
    <script>
        const form = document.getElementById('about-newsletter-form');
        const successMsg = document.getElementById('subscription-success');
        if (form && successMsg) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                successMsg.classList.remove('d-none');
                form.reset();
                setTimeout(() => {
                    successMsg.classList.add('d-none');
                }, 5000);
            });
        }
    </script>
</body>

</html>