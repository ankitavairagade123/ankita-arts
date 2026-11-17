<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Soft Between · Atrium Gallery</title>
 
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
  <style>
    :root {
      --mint: #B8F2D0;
      --lilac: #C9B8FF;
      --coral: #FF8A6B;
      --cream: #F6F3EA;
      --ink: #121417;
      --bs-body-bg: var(--cream);
      --bs-body-color: var(--ink);
    }
 
    body { background: var(--cream); color: var(--ink); }
 
    .tracking-wide { letter-spacing: 0.18em; }
 
    .scene canvas { display: block; width: 100%; height: 100%; }
 
    .art-swatch { width: 56px; height: 56px; }
    .art-swatch--1 { background: linear-gradient(135deg, var(--mint), var(--lilac)); }
    .art-swatch--2 { background: linear-gradient(135deg, var(--coral), var(--cream)); }
    .art-swatch--3 { background: linear-gradient(135deg, var(--lilac), var(--mint)); }
    .art-swatch--4 { background: linear-gradient(135deg, var(--ink), var(--lilac)); }
    .art-swatch--5 { background: linear-gradient(135deg, var(--mint), var(--coral)); }
 
    .site-progress {
      height: 2px;
      background: var(--ink);
      transform-origin: left center;
      transform: scaleX(0);
    }
 
    .reduce-motion * { scroll-behavior: auto !important; }
 
    /* Lenis recommended styles */
    html.lenis, html.lenis body { height: auto; }
    .lenis.lenis-smooth { scroll-behavior: auto !important; }
    .lenis.lenis-stopped { overflow: hidden; }
  </style>
</head>
 
@php
  $artworks = [
    ['title' => 'Soft Orbit',      'artist' => 'Mara Sol',    'year' => '2025', 'side' => 'left',  'number' => '01'],
    ['title' => 'Borrowed Light',  'artist' => 'Noa Vale',    'year' => '2024', 'side' => 'right', 'number' => '02'],
    ['title' => 'Almost There',    'artist' => 'Ivo Sunday',  'year' => '2025', 'side' => 'left',  'number' => '03'],
    ['title' => 'Field Notes',     'artist' => 'Anika Moss',  'year' => '2023', 'side' => 'right', 'number' => '04'],
    ['title' => 'After the Rain',  'artist' => 'Lena Yu',     'year' => '2025', 'side' => 'left',  'number' => '05'],
  ];
@endphp
 
<body>
<main class="gallery-journey position-relative">
 
  <div id="canvasHost" class="scene position-fixed top-0 start-0 w-100 h-100 z-0 pe-none" aria-hidden="true"></div>
 
  <!-- Site header (replaces the SiteHeader React component) -->
  <header class="position-fixed top-0 start-0 w-100 z-3">
    <nav class="d-flex justify-content-between align-items-center px-4 px-md-5 py-3">
      <a href="#top" class="text-decoration-none text-reset fw-bold tracking-wide small">ATRIUM</a>
      <a href="{{ url('/contact') }}" class="text-decoration-none text-reset small text-uppercase tracking-wide">Contact</a>
    </nav>
    <div id="progress" class="site-progress"></div>
  </header>
 
  <section id="top" class="hero position-relative z-1 min-vh-100 d-flex flex-column justify-content-center px-4 px-md-5 pt-5">
    <p class="eyebrow text-uppercase small fw-semibold mb-3 tracking-wide">A digital exhibition · 2025</p>
    <h1 class="display-1 fw-bold lh-1 mb-0">
      THE SOFT
      <br>
      <span class="fst-italic fw-light">BETWEEN</span>
    </h1>
    <div class="hero-bottom d-flex flex-column flex-md-row justify-content-md-between align-items-md-end gap-3 mt-5 pb-4">
      <p class="mb-0 col-md-4">Five studies in color, form, and the spaces we leave open.</p>
      <a href="#artwork-1" class="scroll-cue d-inline-flex align-items-center gap-2 text-decoration-none text-reset text-uppercase small">
        <span>Scroll to enter</span>
        <i aria-hidden="true" class="fst-normal">↓</i>
      </a>
    </div>
  </section>
 
  <div class="artworks" aria-label="Featured artworks">
    @foreach ($artworks as $i => $art)
      <section
        class="art-stop art-stop--{{ $art['side'] }} position-relative z-1 min-vh-100 d-flex align-items-center px-4 px-md-5 {{ $art['side'] === 'left' ? 'justify-content-end' : 'justify-content-start' }}"
        id="artwork-{{ $i + 1 }}"
        aria-labelledby="art-title-{{ $i + 1 }}">
        <article class="art-caption col-10 col-md-4 col-lg-3">
          <div class="art-swatch art-swatch--{{ $i + 1 }} rounded-circle mb-3" aria-hidden="true"></div>
          <span class="art-number d-block small text-uppercase mb-2">{{ $art['number'] }} / 05</span>
          <h2 id="art-title-{{ $i + 1 }}" class="display-5 fw-bold mb-3">{{ $art['title'] }}</h2>
          <div class="art-meta d-flex justify-content-between small border-top pt-2">
            <span>{{ $art['artist'] }}</span>
            <span>{{ $art['year'] }}</span>
          </div>
        </article>
      </section>
    @endforeach
  </div>
 
  <section class="closing position-relative z-1 min-vh-100 d-flex flex-column justify-content-center px-4 px-md-5 pt-5">
    <p class="eyebrow text-uppercase small fw-semibold mb-3 tracking-wide">Continue the conversation</p>
    <h2 class="display-2 fw-bold lh-1 mb-4">
      Visit the
      <br>
      exhibition.
    </h2>
    <div class="closing-actions d-flex flex-wrap align-items-center gap-4">
      <a class="primary-link btn btn-dark btn-lg rounded-pill px-4" href="{{ url('/contact') }}">
        Plan your visit <span aria-hidden="true">↗</span>
      </a>
      <a class="text-link link-dark link-underline-opacity-25" href="mailto:hello@@atrium.gallery">hello@@atrium.gallery</a>
    </div>
    <footer class="d-flex flex-column flex-md-row justify-content-between gap-2 small mt-5 pt-4 pb-4 border-top">
      <span>ATRIUM GALLERY</span>
      <span>Open Tue—Sun, 10—18</span>
      <span>© 2025</span>
    </footer>
  </section>
</main>
 
<!-- GSAP + ScrollTrigger + Lenis (global builds) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lenis@1.1.18/dist/lenis.min.js"></script>
 
<!-- Three.js via import map -->
<script type="importmap">
  { "imports": { "three": "https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js" } }
</script>
 
<script type="module">
  import * as THREE from "three"
 
  gsap.registerPlugin(ScrollTrigger)
 
  const artworks = [
    { side: "left" },
    { side: "right" },
    { side: "left" },
    { side: "right" },
    { side: "left" },
  ]
 
  const palettes = [
    ["#B8F2D0", "#C9B8FF", "#121417"],
    ["#FF8A6B", "#F6F3EA", "#C9B8FF"],
    ["#C9B8FF", "#B8F2D0", "#FF8A6B"],
    ["#121417", "#C9B8FF", "#F6F3EA"],
    ["#B8F2D0", "#FF8A6B", "#F6F3EA"],
  ]
 
  function makeArtworkTexture(index) {
    const canvas = document.createElement("canvas")
    canvas.width = 768
    canvas.height = 960
    const ctx = canvas.getContext("2d")
    const [a, b, c] = palettes[index]
 
    const gradient = ctx.createLinearGradient(0, 0, canvas.width, canvas.height)
    gradient.addColorStop(0, a)
    gradient.addColorStop(0.56, b)
    gradient.addColorStop(1, "#F6F3EA")
    ctx.fillStyle = gradient
    ctx.fillRect(0, 0, canvas.width, canvas.height)
 
    ctx.globalAlpha = 0.86
    ctx.fillStyle = c
    if (index === 0) {
      ctx.beginPath()
      ctx.arc(410, 440, 210, 0, Math.PI * 2)
      ctx.fill()
      ctx.globalCompositeOperation = "destination-out"
      ctx.beginPath()
      ctx.arc(475, 375, 128, 0, Math.PI * 2)
      ctx.fill()
    } else if (index === 1) {
      ctx.save()
      ctx.translate(390, 490)
      ctx.rotate(-0.34)
      ctx.fillRect(-92, -500, 184, 1000)
      ctx.restore()
      ctx.globalAlpha = 0.35
      ctx.fillStyle = a
      ctx.fillRect(0, 680, 768, 110)
    } else if (index === 2) {
      for (let i = 0; i < 5; i++) {
        ctx.globalAlpha = 0.66 - i * 0.08
        ctx.beginPath()
        ctx.arc(384, 490, 250 - i * 43, 0, Math.PI * 2)
        ctx.strokeStyle = i % 2 ? a : c
        ctx.lineWidth = 24
        ctx.stroke()
      }
    } else if (index === 3) {
      ctx.globalAlpha = 0.94
      for (let y = -80; y < 1040; y += 135) {
        ctx.beginPath()
        ctx.moveTo(-40, y)
        ctx.bezierCurveTo(170, y - 100, 560, y + 130, 810, y - 20)
        ctx.strokeStyle = y % 2 ? b : c
        ctx.lineWidth = 38
        ctx.stroke()
      }
    } else {
      ctx.beginPath()
      ctx.moveTo(0, 820)
      ctx.lineTo(768, 290)
      ctx.lineTo(768, 960)
      ctx.lineTo(0, 960)
      ctx.fill()
      ctx.globalAlpha = 0.7
      ctx.fillStyle = b
      ctx.beginPath()
      ctx.arc(540, 260, 130, 0, Math.PI * 2)
      ctx.fill()
    }
 
    ctx.globalCompositeOperation = "source-over"
    ctx.globalAlpha = 0.12
    for (let i = 0; i < 7000; i++) {
      ctx.fillStyle = Math.random() > 0.5 ? "#ffffff" : "#121417"
      ctx.fillRect(Math.random() * 768, Math.random() * 960, 1, 1)
    }
 
    const texture = new THREE.CanvasTexture(canvas)
    texture.colorSpace = THREE.SRGBColorSpace
    texture.anisotropy = 4
    return texture
  }
 
  const host = document.getElementById("canvasHost")
  const progressEl = document.getElementById("progress")
 
  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches
  document.documentElement.classList.toggle("reduce-motion", reduceMotion)
 
  const scene = new THREE.Scene()
  scene.background = new THREE.Color("#F6F3EA")
  scene.fog = new THREE.FogExp2("#F6F3EA", 0.035)
 
  const camera = new THREE.PerspectiveCamera(42, host.clientWidth / host.clientHeight, 0.1, 120)
  camera.position.set(0, 0.3, 7)
 
  const renderer = new THREE.WebGLRenderer({
    antialias: true,
    alpha: false,
    powerPreference: "high-performance",
  })
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 1.75))
  renderer.setSize(host.clientWidth, host.clientHeight)
  renderer.outputColorSpace = THREE.SRGBColorSpace
  renderer.shadowMap.enabled = true
  renderer.shadowMap.type = THREE.PCFSoftShadowMap
  host.appendChild(renderer.domElement)
 
  scene.add(new THREE.HemisphereLight("#ffffff", "#C9B8FF", 2.7))
  const keyLight = new THREE.DirectionalLight("#fff8ed", 3.2)
  keyLight.position.set(1, 6, 5)
  keyLight.castShadow = true
  scene.add(keyLight)
 
  const corridor = new THREE.Group()
  const floorMaterial = new THREE.MeshStandardMaterial({ color: "#e9e5dc", roughness: 0.96 })
  const floor = new THREE.Mesh(new THREE.PlaneGeometry(15, 90), floorMaterial)
  floor.rotation.x = -Math.PI / 2
  floor.position.set(0, -3.2, -34)
  floor.receiveShadow = true
  corridor.add(floor)
 
  const wallMaterial = new THREE.MeshStandardMaterial({ color: "#f1eee6", roughness: 1 })
  ;[-1, 1].forEach((side) => {
    const wall = new THREE.Mesh(new THREE.PlaneGeometry(90, 9), wallMaterial)
    wall.position.set(side * 7.2, 0.5, -34)
    wall.rotation.y = side === -1 ? Math.PI / 2 : -Math.PI / 2
    wall.receiveShadow = true
    corridor.add(wall)
  })
  scene.add(corridor)
 
  const frameGroups = []
  const frameDepth = 0.16
  const frameMaterial = new THREE.MeshStandardMaterial({ color: "#fffdf6", roughness: 0.55 })
  const artGeometry = new THREE.PlaneGeometry(3.3, 4.1)
 
  artworks.forEach((art, index) => {
    const group = new THREE.Group()
    const side = art.side === "left" ? -1 : 1
    group.position.set(side * 3.75, -0.15, -9 - index * 12)
    group.userData = { side, baseY: group.position.y, phase: index * 1.3 }
 
    const backing = new THREE.Mesh(new THREE.BoxGeometry(3.72, 4.52, 0.22), frameMaterial)
    backing.castShadow = true
    backing.receiveShadow = true
    group.add(backing)
 
    const artMesh = new THREE.Mesh(
      artGeometry,
      new THREE.MeshBasicMaterial({ map: makeArtworkTexture(index), toneMapped: false }),
    )
    artMesh.position.z = frameDepth
    group.add(artMesh)
 
    const barH = new THREE.BoxGeometry(3.84, 0.12, 0.28)
    const barV = new THREE.BoxGeometry(0.12, 4.52, 0.28)
    ;[
      [new THREE.Mesh(barH, frameMaterial), 0, 2.26],
      [new THREE.Mesh(barH, frameMaterial), 0, -2.26],
      [new THREE.Mesh(barV, frameMaterial), -1.86, 0],
      [new THREE.Mesh(barV, frameMaterial), 1.86, 0],
    ].forEach(([mesh, x, y]) => {
      mesh.position.set(x, y, 0.18)
      mesh.castShadow = true
      group.add(mesh)
    })
 
    scene.add(group)
    frameGroups.push(group)
  })
 
  const pointer = new THREE.Vector2()
  window.addEventListener(
    "pointermove",
    (event) => {
      pointer.x = (event.clientX / window.innerWidth - 0.5) * 2
      pointer.y = (event.clientY / window.innerHeight - 0.5) * 2
    },
    { passive: true },
  )
 
  let lenis
  if (!reduceMotion) {
    lenis = new Lenis({
      duration: 1.15,
      smoothWheel: true,
      wheelMultiplier: 0.85,
    })
    lenis.on("scroll", ScrollTrigger.update)
    gsap.ticker.add((time) => lenis.raf(time * 1000))
    gsap.ticker.lagSmoothing(0)
  }
 
  gsap.to(camera.position, {
    z: reduceMotion ? 6 : -61,
    ease: "none",
    scrollTrigger: {
      trigger: ".gallery-journey",
      start: "top top",
      end: "bottom bottom",
      scrub: reduceMotion ? false : 0.65,
      onUpdate: (self) => {
        progressEl.style.transform = `scaleX(${self.progress})`
      },
    },
  })
 
  gsap.utils.toArray(".art-caption").forEach((caption) => {
    gsap.fromTo(
      caption,
      { autoAlpha: reduceMotion ? 1 : 0, y: reduceMotion ? 0 : 36 },
      {
        autoAlpha: 1,
        y: 0,
        duration: 0.8,
        ease: "power3.out",
        scrollTrigger: {
          trigger: caption.closest(".art-stop"),
          start: "top 58%",
          end: "bottom 42%",
          toggleActions: "play reverse play reverse",
        },
      },
    )
  })
 
  const clock = new THREE.Clock()
  const render = () => {
    const time = clock.getElapsedTime()
    const targetX = reduceMotion ? 0 : pointer.x * 0.2
    const targetY = reduceMotion ? 0.3 : 0.3 - pointer.y * 0.14
    camera.position.x += (targetX - camera.position.x) * 0.045
    camera.position.y += (targetY - camera.position.y) * 0.045
 
    frameGroups.forEach((group) => {
      const { side, baseY, phase } = group.userData
      const dz = camera.position.z - group.position.z
      const facingAngle = Math.atan2(camera.position.x - group.position.x, Math.max(2, dz))
      const idleAngle = side * -0.13
      const proximity = THREE.MathUtils.smoothstep(dz, 14, 3)
      const targetRotation = THREE.MathUtils.lerp(idleAngle, facingAngle, proximity)
      group.rotation.y += (targetRotation - group.rotation.y) * 0.055
      group.position.y = baseY + (reduceMotion ? 0 : Math.sin(time * 0.7 + phase) * 0.075)
    })
 
    camera.lookAt(camera.position.x * 0.15, 0, camera.position.z - 12)
    renderer.render(scene, camera)
    requestAnimationFrame(render)
  }
  render()
 
  const onResize = () => {
    camera.aspect = host.clientWidth / host.clientHeight
    camera.fov = window.innerWidth < 640 ? 54 : 42
    camera.updateProjectionMatrix()
    renderer.setSize(host.clientWidth, host.clientHeight)
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 1.75))
    ScrollTrigger.refresh()
  }
  window.addEventListener("resize", onResize)
  onResize()
</script>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>