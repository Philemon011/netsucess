{{-- <style>
    :root {
      --green-50: #f0fdf4; --green-100: #dcfce7; --green-200: #bbf7d0;
      --green-300: #86efac; --green-400: #4ade80; --green-500: #22c55e;
      --green-600: #16a34a; --green-700: #15803d; --green-800: #166534;
      --green-900: #14532d;
      --accentjaune: #FFC107;
      --accent: #22c55e; --accent-light: #bbf7d0; --accent-dark: #15803d;
      --accent-glow: rgba(34, 197, 94, 0.18);
      --bg: #0a0f0c; --bg-card: #111a14; --bg-card2: #141f17;
      --border: rgba(34, 197, 94, 0.12); --border-hover: rgba(34, 197, 94, 0.30);
      --text-primary: #f0fdf4; --text-secondary: #a7c4b0; --text-muted: #5a7a65;
      --font-display: 'Instrument Sans', sans-serif;
      --font-body: 'Poppins', sans-serif;
      --radius-sm: 8px; --radius-md: 16px; --radius-lg: 24px; --radius-xl: 40px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; font-size: 16px; }
    body { font-family: var(--font-body); background: var(--bg); color: var(--text-primary); line-height: 1.6; overflow-x: hidden; }
    a { text-decoration: none; color: inherit; }
    img { max-width: 100%; display: block; }
    ul { list-style: none; }

    .container { width: 100%; max-width: 1160px; margin: 0 auto; padding: 0 24px; }

    .btn { display: inline-flex; align-items: center; gap: 8px; padding: 14px 28px; border-radius: var(--radius-xl); font-family: var(--font-body); font-size: 15px; font-weight: 500; cursor: pointer; transition: var(--transition); white-space: nowrap; border: none; }
    .btn-primary { background: var(--accent); color: #0a0f0c; }
    .btn-primary:hover { background: var(--green-400); transform: translateY(-2px); box-shadow: 0 12px 40px rgba(34,197,94,0.35); }
    .btn-secondary { background: transparent; color: var(--text-primary); border: 1px solid var(--border-hover); }
    .btn-secondary:hover { border-color: var(--accent); color: var(--accent); background: var(--accent-glow); }
    .btn svg { transition: transform var(--transition); }
    .btn:hover svg { transform: translateX(3px); }

    .navbar { position: fixed; top: 0; left: 0; right: 0; z-index: 100; padding: 20px 0; transition: var(--transition); }
    .navbar.scrolled { background: rgba(10,15,12,0.92); backdrop-filter: blur(16px); padding: 14px 0; border-bottom: 1px solid var(--border); }
    .navbar-inner { display: flex; align-items: center; justify-content: space-between; }
    .navbar-logo { font-family: var(--font-display); font-size: 22px; font-weight: 700; letter-spacing: -0.02em; }
    .navbar-links { display: flex; align-items: center; gap: 36px; }
    .navbar-links a { font-size: 14px; color: var(--text-secondary); transition: color var(--transition); }
    .navbar-links a:hover { color: var(--text-primary); }
    .nav-toggle { display: none; flex-direction: column; gap: 5px; cursor: pointer; padding: 4px; }
    .nav-toggle span { display: block; width: 24px; height: 2px; background: var(--text-primary); border-radius: 2px; transition: var(--transition); }
    .mobile-menu { display: none; position: fixed; inset: 0; background: var(--bg); z-index: 99; flex-direction: column; align-items: center; justify-content: center; gap: 32px; }
    .mobile-menu.open { display: flex; }
    .mobile-link { font-size: 24px; font-weight: 500; color: var(--text-primary); transition: color var(--transition); }
    .mobile-link:hover { color: var(--accent); }

    .wa-bubble { position: fixed; bottom: 28px; right: 28px; width: 56px; height: 56px; background: #25D366; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; box-shadow: 0 4px 24px rgba(37,211,102,0.4); z-index: 200; transition: var(--transition); }
    .wa-bubble svg { width: 28px; height: 28px; }
    .wa-bubble:hover { transform: scale(1.1); }

    @media (max-width: 768px) {
      .navbar-links, .navbar .btn { display: none; }
      .nav-toggle { display: flex; }
    }
</style>

<nav class="navbar" id="navbar">
    <div class="container">
        <div class="navbar-inner">
            <a href="{{ route('home') }}" class="navbar-logo">
                Net<span style="color:var(--accent);">Sucess</span>
            </a>
            <ul class="navbar-links">
                <li><a href="{{ route('home') }}#realisations">Nos réalisations</a></li>
                <li><a href="{{ route('home') }}#processus">Notre Processus</a></li>
                <li><a href="{{ route('home') }}#offres">Nos offres</a></li>
                <li><a href="{{ route('blog.index') }}">Blog</a></li>
                <li><a href="{{ route('home') }}#faq">FAQ</a></li>
            </ul>
            <a href="#offres" class="btn btn-primary" style="padding:10px 22px;font-size:14px;">
                Réserver un appel
            </a>
            <button class="nav-toggle" id="navToggle" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</nav>

<div class="mobile-menu" id="mobileMenu">
    <a href="{{ route('home') }}#realisations" class="mobile-link">Nos réalisations</a>
    <a href="{{ route('home') }}#processus" class="mobile-link">Notre Processus</a>
    <a href="{{ route('home') }}#offres" class="mobile-link">Nos offres</a>
    <a href="{{ route('blog.index') }}" class="mobile-link">Blog</a>
    <a href="{{ route('home') }}#faq" class="mobile-link">FAQ</a>
    <a href="#offres" class="btn btn-primary">Réserver un appel</a>
</div>

<script>
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 40);
    });
    const toggle = document.getElementById('navToggle');
    const menu = document.getElementById('mobileMenu');
    toggle.addEventListener('click', () => menu.classList.toggle('open'));
    document.querySelectorAll('.mobile-link, .mobile-menu .btn').forEach(el => {
        el.addEventListener('click', () => menu.classList.remove('open'));
    });
</script> --}}



<style>
    /* ============================================
       CSS VARIABLES — PALETTE VERTE
    ============================================ */
    :root {
      --green-50: #f0fdf4;
      --green-100: #dcfce7;
      --green-200: #bbf7d0;
      --green-300: #86efac;
      --green-400: #4ade80;
      --green-500: #22c55e;
      --green-600: #16a34a;
      --green-700: #15803d;
      --green-800: #166534;
      --green-900: #14532d;

      --accentjaune: #FFC107;
      --accent: #22c55e;
      --accent-light: #bbf7d0;
      --accent-dark: #15803d;
      --accent-glow: rgba(34, 197, 94, 0.18);

      --bg: #0a0f0c;
      --bg-card: #111a14;
      --bg-card2: #141f17;
      --border: rgba(34, 197, 94, 0.12);
      --border-hover: rgba(34, 197, 94, 0.30);

      --text-primary: #f0fdf4;
      --text-secondary: #a7c4b0;
      --text-muted: #7a9a85;

      --font-display: 'Instrument Sans', sans-serif;
      --font-body: 'Poppins', sans-serif;

      --font-instrument: 'Instrument Sans', sans-serif;
      /* --font-display: 'Instrument Serif', Georgia, serif; */
      /* --font-body:    'DM Sans', sans-serif; */

      --radius-sm: 8px;
      --radius-md: 16px;
      --radius-lg: 24px;
      --radius-xl: 40px;

      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* ============================================
       RESET & BASE
    ============================================ */
    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
      font-size: 16px;
    }

    body {
      font-family: var(--font-body);
      background: var(--bg);
      color: var(--text-primary);
      line-height: 1.6;
      overflow-x: hidden;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    img {
      max-width: 100%;
      display: block;
    }

    ul {
      list-style: none;
    }

    /* ============================================
       UTILITY
    ============================================ */
    .container {
      width: 100%;
      max-width: 1160px;
      margin: 0 auto;
      padding: 0 24px;
    }

    .badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 6px 14px;
      border-radius: 999px;
      border: 1px solid var(--border-hover);
      background: rgba(34, 197, 94, 0.07);
      font-size: 13px;
      font-weight: 500;
      color: var(--accent);
      letter-spacing: 0.02em;
    }

    .badge .dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--accentjaune);
      animation: pulse 2s infinite;
    }

    @keyframes pulse {

      0%,
      100% {
        opacity: 1;
        transform: scale(1);
      }

      50% {
        opacity: 0.5;
        transform: scale(1.4);
      }
    }

    /* ============================================
       BUTTONS
    ============================================ */
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 14px 28px;
      border-radius: var(--radius-xl);
      font-family: var(--font-body);
      font-size: 15px;
      font-weight: 500;
      cursor: pointer;
      transition: var(--transition);
      white-space: nowrap;
      border: none;
    }

    .btn-primary {
      background: var(--accent);
      color: #0a0f0c;
    }

    .btn-primary:hover {
      background: var(--green-400);
      transform: translateY(-2px);
      box-shadow: 0 12px 40px rgba(34, 197, 94, 0.35);
    }

    .btn-secondary {
      background: transparent;
      color: var(--text-primary);
      border: 1px solid var(--border-hover);
    }
    .btn-secondarywhite {
      background: transparent;
      color: var(--text-primary);
      color: #0a0f0c;
      border: 1px solid var(--border-hover);
    }

    .btn-secondary:hover {
      border-color: var(--accent);
      color: var(--accent);
      background: var(--accent-glow);
    }

    .btn-ghost {
      background: transparent;
      color: var(--text-secondary);
      padding: 0;
      font-size: 14px;
    }

    .btn-ghost:hover {
      color: var(--accent);
    }

    .btn svg {
      transition: transform var(--transition);
    }

    .btn:hover svg {
      transform: translateX(3px);
    }

    /* ============================================
       NAVBAR
    ============================================ */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 100;
      padding: 16px 0;
      transition: var(--transition);
    }

    .navbar.scrolled {
      background: rgba(10, 15, 12, 0.85);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-bottom: 1px solid var(--border);
    }

    .navbar .container {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .navbar-logo {
      font-family: var(--font-body);
      font-size: 22px;
      font-weight: 700;
      /* bold */
      letter-spacing: -0.5px;
      /* espace réduit entre lettres */
      color: var(--text-primary);
    }

    .navbar-logo span {
      color: var(--accent);
    }

    .navbar-links {
      display: flex;
      align-items: center;
      gap: 36px;
    }

    .navbar-links a {
      font-size: 14px;
      color: var(--text-secondary);
      transition: var(--transition);
    }

    .navbar-links a:hover {
      color: var(--text-primary);
    }

    .navbar-actions {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .nav-toggle { display: none; flex-direction: column; gap: 5px; cursor: pointer; padding: 4px; background: none; border: none; outline: none; }
.nav-toggle span { display: block; width: 24px; height: 2px; background: var(--text-primary); border-radius: 2px; transition: var(--transition); }

    .mobile-menu {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: var(--bg);
      z-index: 99;
      padding: 100px 24px 40px;
      flex-direction: column;
      gap: 32px;
    }

    .mobile-menu.open {
      display: flex;
    }

    .mobile-menu a {
      font-size: 16px;
      font-family: var(--font-body);
      color: var(--text-primary);
      transition: var(--transition);
    }

    .mobile-menu a:hover {
      color: var(--accent);
    }

    /* ============================================
       HERO
    ============================================ */
    .hero {
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding: 120px 0 80px;
      overflow: hidden;
    }

    /* Ambient glow background */
    .hero-bg {
      position: absolute;
      inset: 0;
      pointer-events: none;
    }

    .hero-bg::before {
      content: '';
      position: absolute;
      top: -200px;
      left: 50%;
      transform: translateX(-50%);
      width: 900px;
      height: 600px;
      background: radial-gradient(ellipse at center,
          rgba(34, 197, 94, 0.10) 0%,
          rgba(34, 197, 94, 0.04) 40%,
          transparent 70%);
      border-radius: 50%;
    }

    .hero-bg-grid {
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(rgba(34, 197, 94, 0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(34, 197, 94, 0.04) 1px, transparent 1px);
      background-size: 60px 60px;
      mask-image: radial-gradient(ellipse 80% 60% at 50% 0%, black 0%, transparent 70%);
    }

    .hero .container {
      position: relative;
      text-align: center;
      max-width: 820px;
    }

    .hero-stars {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      margin-bottom: 28px;
      animation: fadeUp 0.6s ease both;
    }

    .star-icons {
      display: flex;
      gap: 2px;
    }

    .star-icons svg {
      color: var(--accentjaune);
      width: 16px;
      height: 16px;
    }

    .hero-stars span {
      font-size: 13px;
      color: var(--text-secondary);
    }

    /* .hero-title {
      font-family: var(--font-display);
      font-size: clamp(40px, 6vw, 72px);
      line-height: 1.08;
      color: var(--text-primary);
      margin-bottom: 24px;
      animation: fadeUp 0.7s 0.1s ease both;
    } */

    .hero-title {
      font-family: var(--font-display);
      font-size: clamp(40px, 6vw, 72px);
      line-height: 1.08;
      font-weight: 700;
      /* bold */
      letter-spacing: -2px;
      /* lettres plus serrées */
      color: var(--text-primary);
      margin-bottom: 24px;
      animation: fadeUp 0.7s 0.1s ease both;
    }

    .hero-title em {
      font-style: normal;
      color: var(--accent);
    }

    .hero-pills {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
      margin-bottom: 28px;
      animation: fadeUp 0.7s 0.2s ease both;
    }

    .pill {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 7px 14px;
      border-radius: 999px;
      background: rgba(34, 197, 94, 0.07);
      border: 1px solid var(--border);
      font-size: 13px;
      color: var(--text-secondary);
    }

    .pill svg {
      color: var(--accent);
      flex-shrink: 0;
    }

    .hero-subtitle {
      font-size: clamp(15px, 2vw, 17px);
      color: var(--text-secondary);
      max-width: 560px;
      margin: 0 auto 36px;
      animation: fadeUp 0.7s 0.25s ease both;
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      justify-content: center;
      animation: fadeUp 0.7s 0.35s ease both;
    }

    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* ============================================
       SECTION HEADER
    ============================================ */
    .section-label {
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--accent);
      margin-bottom: 12px;
    }

    /* .section-title {
      font-family: var(--font-display);
      font-size: clamp(32px, 4vw, 52px);
      line-height: 1.1;
      color: var(--text-primary);
      margin-bottom: 16px;
    } */

    .section-title {
      font-family: var(--font-display);
      font-size: clamp(32px, 4vw, 52px);
      line-height: 1.1;
      font-weight: 700;
      letter-spacing: -0.8px;
      color: var(--text-primary);
      margin-bottom: 16px;
    }



    .section-title em {
      font-style: normal;
      color: var(--accent);
    }

    .section-desc {
      font-size: 16px;
      color: var(--text-secondary);
      max-width: 560px;
    }

    .section-header {
      margin-bottom: 64px;
    }

    .section-header.center {
      text-align: center;
    }

    .section-header.center .section-desc {
      margin: 0 auto;
    }

    /* ============================================
       SECTION SPACING
    ============================================ */
    section {
      padding: 100px 0;
    }

    /* ============================================
       REALISATIONS
    ============================================ */
    #realisations {
      background: #ffffff;
    }

    /* Adaptations texte pour fond blanc dans la section réalisations */
    #realisations .section-label {
      color: var(--accent-dark);
    }

    #realisations .section-title {
      color: #0a1a10;
    }

    #realisations .section-title em {
      color: var(--accent);
    }

    #realisations .section-desc {
      color: #4a6655;
    }

    #realisations .card-realisation {
      background: #f8fdf9;
      border: 1px solid rgba(34, 197, 94, 0.20);
      box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    }

    #realisations .card-realisation:hover {
      border-color: var(--accent);
      box-shadow: 0 12px 40px rgba(34,197,94,0.15);
    }

    #realisations .card-img {
      background: #eef8f1;
    }

    #realisations .mockup-screen {
      background: #0d1a10;
    }

    #realisations .card-title {
      color: #0a1a10;
    }

    #realisations .card-desc {
      color: #4a6655;
    }

    .realisations-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
      margin-bottom: 48px;
    }

    .card-realisation {
      border-radius: var(--radius-lg);
      overflow: hidden;
      border: 1px solid var(--border);
      background: var(--bg-card);
      transition: var(--transition);
      group: true;
    }

    .card-realisation:hover {
      border-color: var(--border-hover);
      transform: translateY(-4px);
      box-shadow: 0 24px 60px rgba(0, 0, 0, 0.4), 0 0 0 1px var(--border-hover);
    }

    .card-img {
      aspect-ratio: 16/10;
      background: var(--bg-card2);
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      position: relative;
    }

    .card-img-inner {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Mockup screens  */
    .mockup-screen {
      width: 90%;
      height: 85%;
      border-radius: 8px;
      background: #0d1a10;
      border: 1px solid var(--border-hover);
      display: flex;
      flex-direction: column;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6);
    }

    .mockup-bar {
      height: 28px;
      background: #111a14;
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      padding: 0 10px;
      gap: 5px;
      flex-shrink: 0;
    }

    .mockup-dot {
      width: 7px;
      height: 7px;
      border-radius: 50%;
    }

    .mockup-dot:nth-child(1) {
      background: #ff5f57;
    }

    .mockup-dot:nth-child(2) {
      background: #febc2e;
    }

    .mockup-dot:nth-child(3) {
      background: #28c840;
    }

    .mockup-content {
      flex: 1;
      padding: 16px;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .mockup-hero-bar {
      height: 60px;
      border-radius: 6px;
      background: linear-gradient(135deg, var(--accent-dark), var(--accent));
      opacity: 0.8;
    }

    .mockup-row {
      display: flex;
      gap: 8px;
    }

    .mockup-block {
      height: 40px;
      border-radius: 4px;
      background: var(--bg-card);
      flex: 1;
    }

    .mockup-block.accent {
      background: rgba(34, 197, 94, 0.15);
    }

    .mockup-text-line {
      height: 8px;
      border-radius: 4px;
      background: rgba(34, 197, 94, 0.08);
    }

    .card-body {
      padding: 20px 24px 24px;
    }

    .card-title {
      font-size: 16px;
      font-weight: 600;
      color: var(--text-primary);
      margin-bottom: 6px;
    }

    .card-desc {
      font-size: 13px;
      color: var(--text-muted);
      line-height: 1.5;
      margin-bottom: 16px;
    }

    .card-link {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 13px;
      font-weight: 500;
      color: var(--accent);
      transition: var(--transition);
    }

    .card-link:hover {
      gap: 10px;
    }

    .card-link svg {
      width: 14px;
      height: 14px;
    }

    /* ============================================
       VALUE PROPS / FEATURES
    ============================================ */
    #features {
      background: var(--bg);
      position: relative;
      overflow: hidden;
    }

    #features::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 600px;
      height: 400px;
      background: radial-gradient(ellipse, rgba(34, 197, 94, 0.05) 0%, transparent 70%);
      pointer-events: none;
    }

    .features-layout {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }

    .features-visual {
      position: relative;
    }

    .chart-card {
      background: var(--bg-card);
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      padding: 28px;
      position: relative;
      overflow: hidden;
    }

    .chart-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, var(--accent), transparent);
    }

    .chart-label {
      font-size: 12px;
      color: var(--text-muted);
      margin-bottom: 20px;
      letter-spacing: 0.05em;
    }

    .chart-bars {
      display: flex;
      align-items: flex-end;
      gap: 10px;
      height: 140px;
    }

    .bar-group {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
      flex: 1;
    }

    .bar {
      width: 100%;
      border-radius: 4px 4px 0 0;
      transition: height 1s ease;
    }

    .bar.green {
      background: linear-gradient(180deg, var(--accent), var(--accent-dark));
    }

    .bar.dark {
      background: var(--bg-card2);
      border: 1px solid var(--border);
    }

    .bar-label {
      font-size: 10px;
      color: var(--text-muted);
    }

    .floating-badge {
      position: absolute;
      top: -16px;
      right: -16px;
      background: var(--bg-card);
      border: 1px solid var(--border-hover);
      border-radius: var(--radius-md);
      padding: 14px 18px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
    }

    .floating-badge .fb-value {
      font-family: var(--font-display);
      font-size: 28px;
      color: var(--accent);
      line-height: 1;
    }

    .floating-badge .fb-label {
      font-size: 11px;
      color: var(--text-muted);
      margin-top: 2px;
    }

    .features-list {
      display: flex;
      flex-direction: column;
      gap: 32px;
    }

    .feature-item {
      display: flex;
      gap: 18px;
      align-items: flex-start;
    }

    .feature-icon {
      width: 44px;
      height: 44px;
      border-radius: var(--radius-sm);
      background: rgba(34, 197, 94, 0.1);
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      color: var(--accent);
    }

    .feature-text h3 {
      font-size: 16px;
      font-weight: 600;
      color: var(--text-primary);
      margin-bottom: 4px;
    }

    .feature-text p {
      font-size: 14px;
      color: var(--text-secondary);
      line-height: 1.6;
    }

    /* ============================================
       RESULTATS
    ============================================ */
    #resultats {
      background: #ffffff;
    }

    #resultats .section-label { color: var(--accent-dark); }
    #resultats .section-title { color: #0a1a10; }
    #resultats .section-title em { color: var(--accent); }

    #resultats .tcard {
      background: #f8fdf9;
      border: 1px solid rgba(34, 197, 94, 0.20);
      box-shadow: 0 2px 16px rgba(0,0,0,0.05);
    }
    #resultats .tcard:hover {
      border-color: var(--accent);
      box-shadow: 0 8px 30px rgba(34,197,94,0.12);
    }
    #resultats .tcard-name { color: #0a1a10; }
    #resultats .tcard-role { color: #4a6655; }
    #resultats .tcard-text { color: #3a5545; }

    .testimonials-marquee {
      overflow: hidden;
      position: relative;
    }

    .marquee-row {
      display: flex;
      gap: 20px;
      width: max-content;
    }

    .marquee-row.row1 {
      animation: marquee-left 40s linear infinite;
    }

    .marquee-row.row2 {
      animation: marquee-right 35s linear infinite;
      margin-top: 20px;
    }

    @keyframes marquee-left {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    @keyframes marquee-right {
      0% {
        transform: translateX(-50%);
      }

      100% {
        transform: translateX(0);
      }
    }

    .tcard {
      width: 320px;
      flex-shrink: 0;
      background: var(--bg);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      padding: 22px;
      transition: var(--transition);
    }

    .tcard:hover {
      border-color: var(--border-hover);
    }

    .tcard-header {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 14px;
    }

    .tcard-avatar {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--accent-dark), var(--accent));
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      font-size: 14px;
      color: #0a0f0c;
      flex-shrink: 0;
    }

    .tcard-name {
      font-size: 14px;
      font-weight: 600;
      color: var(--text-primary);
    }

    .tcard-role {
      font-size: 12px;
      color: var(--text-muted);
    }

    .tcard-stars {
      display: flex;
      gap: 2px;
      margin-bottom: 10px;
    }

    .tcard-stars svg {
      width: 13px;
      height: 13px;
      color: var(--accentjaune);
    }

    .tcard-text {
      font-size: 13px;
      color: var(--text-secondary);
      line-height: 1.6;
    }

    /* ============================================
       PROCESSUS
    ============================================ */
    #processus {
      background: var(--bg);
    }

    .steps-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
      position: relative;
    }

    .steps-grid::before {
      content: '';
      position: absolute;
      top: 36px;
      left: calc(16.66% + 20px);
      right: calc(16.66% + 20px);
      height: 1px;
      background: linear-gradient(90deg, var(--accent), rgba(34, 197, 94, 0.2));
    }

    .step-card {
      background: var(--bg-card);
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      padding: 32px 28px;
      transition: var(--transition);
      position: relative;
    }

    .step-card:hover {
      border-color: var(--border-hover);
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
      transform: translateY(-4px);
    }

    .step-num {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: rgba(34, 197, 94, 0.1);
      border: 1px solid var(--accent);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      font-weight: 700;
      color: var(--accent);
      margin-bottom: 20px;
    }

    .step-label {
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: var(--accent);
      margin-bottom: 8px;
    }

    .step-title {
      font-size: 18px;
      font-weight: 600;
      color: var(--text-primary);
      margin-bottom: 12px;
      line-height: 1.3;
    }

    .step-desc {
      font-size: 14px;
      color: var(--text-secondary);
      line-height: 1.7;
    }

    .step-icon-row {
      display: flex;
      gap: 8px;
      margin-top: 20px;
      padding-top: 20px;
      border-top: 1px solid var(--border);
    }

    .step-chip {
      padding: 5px 10px;
      border-radius: 999px;
      background: rgba(34, 197, 94, 0.07);
      border: 1px solid var(--border);
      font-size: 11px;
      color: var(--text-muted);
    }

    /* ============================================
       OFFRES / PRICING
    ============================================ */
    #offres {
      background: #ffffff;
    }

    #offres .section-label { color: var(--accent-dark); }
    #offres .section-title { color: #0a1a10; }
    #offres .section-title em { color: var(--accent); }
    #offres .section-desc { color: #4a6655; }

    #offres .pricing-card {
      background: #f8fdf9;
      border: 1px solid rgba(34, 197, 94, 0.20);
      box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    }
    #offres .pricing-card:hover {
      box-shadow: 0 12px 40px rgba(34,197,94,0.12);
    }
    #offres .pricing-card.featured {
      background: linear-gradient(180deg, rgba(34,197,94,0.07) 0%, #f8fdf9 100%);
      border-color: var(--accent);
    }
    #offres .pricing-name { color: #0a1a10; }
    #offres .pricing-desc { color: #4a6655; }
    #offres .pricing-section-label { color: #3a5545; }
    #offres .pricing-feature { color: #3a5545; }
    #offres .pricing-divider { background: rgba(34,197,94,0.15); }

    .pricing-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 24px;
      max-width: 860px;
      margin: 0 auto;
    }

    .pricing-card {
      background: var(--bg);
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      padding: 36px;
      transition: var(--transition);
      position: relative;
      overflow: hidden;
    }

    .pricing-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, var(--accent), transparent);
      opacity: 0;
      transition: var(--transition);
    }

    .pricing-card:hover::before {
      opacity: 1;
    }

    .pricing-card.featured {
      border-color: var(--accent);
      background: linear-gradient(180deg, rgba(34, 197, 94, 0.05) 0%, var(--bg) 100%);
    }

    .pricing-card.featured::before {
      opacity: 1;
    }

    .pricing-badge {
      display: inline-block;
      padding: 4px 12px;
      border-radius: 999px;
      background: var(--accent);
      color: #0a0f0c;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      margin-bottom: 20px;
    }

    .pricing-name {
      font-size: 22px;
      font-weight: 700;
      color: var(--text-primary);
      margin-bottom: 8px;
    }

    .pricing-desc {
      font-size: 14px;
      color: var(--text-secondary);
      margin-bottom: 28px;
      line-height: 1.6;
    }

    .pricing-divider {
      height: 1px;
      background: var(--border);
      margin: 24px 0;
    }

    .pricing-section-label {
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: var(--text-muted);
      margin-bottom: 14px;
    }

    .pricing-features {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-bottom: 28px;
    }

    .pricing-feature {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      font-size: 14px;
      color: var(--text-secondary);
    }

    .pricing-feature svg {
      width: 16px;
      height: 16px;
      color: var(--accent);
      flex-shrink: 0;
      margin-top: 2px;
    }

    /* ============================================
       TESTIMONIALS CARDS (section dédiée)
    ============================================ */
    #temoignages {
      background: var(--bg);
    }

    .temoignages-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .temoignage-card {
      background: var(--bg-card);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      padding: 24px;
      transition: var(--transition);
    }

    .temoignage-card:hover {
      border-color: var(--border-hover);
      transform: translateY(-3px);
    }

    .tc-header {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 12px;
    }

    .tc-avatar {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--green-700), var(--green-500));
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 15px;
      color: #fff;
      flex-shrink: 0;
    }

    .tc-name {
      font-size: 15px;
      font-weight: 600;
      color: var(--text-primary);
    }

    .tc-role {
      font-size: 12px;
      color: var(--text-muted);
    }

    .tc-stars {
      display: flex;
      gap: 2px;
      margin-bottom: 10px;
    }

    .tc-stars svg {
      width: 14px;
      height: 14px;
      color: var(--accentjaune);
    }

    .tc-text {
      font-size: 14px;
      color: var(--text-secondary);
      line-height: 1.7;
    }

    /* ============================================
       FAQ
    ============================================ */
    #faq {
      background: #ffffff;
    }

    #faq .section-label { color: var(--accent-dark); }
    #faq .section-title { color: #0a1a10; }
    #faq .section-title em { color: var(--accent); }
    #faq .section-desc { color: #4a6655; }

    #faq .faq-item {
      background: #f8fdf9;
      border: 1px solid rgba(34, 197, 94, 0.20);
      box-shadow: 0 2px 12px rgba(0,0,0,0.04);
    }
    #faq .faq-item:hover { border-color: rgba(34,197,94,0.45); }
    #faq .faq-item.open { border-color: var(--accent); }
    #faq .faq-q { color: #0a1a10; }
    #faq .faq-a-inner { color: #3a5545; }

    .faq-list {
      max-width: 720px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .faq-item {
      background: var(--bg);
      border: 1px solid var(--border);
      border-radius: var(--radius-md);
      overflow: hidden;
      transition: var(--transition);
    }

    .faq-item:hover {
      border-color: var(--border-hover);
    }

    .faq-item.open {
      border-color: var(--accent);
    }

    .faq-q {
      width: 100%;
      background: none;
      border: none;
      padding: 20px 24px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      cursor: pointer;
      text-align: left;
      color: var(--text-primary);
      font-family: var(--font-body);
      font-size: 15px;
      font-weight: 500;
    }

    .faq-q svg {
      width: 18px;
      height: 18px;
      flex-shrink: 0;
      color: var(--accent);
      transition: transform var(--transition);
    }

    .faq-item.open .faq-q svg {
      transform: rotate(45deg);
    }

    .faq-a {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease, padding 0.3s ease;
    }

    .faq-item.open .faq-a {
      max-height: 300px;
    }

    .faq-a-inner {
      padding: 0 24px 20px;
      font-size: 14px;
      color: var(--text-secondary);
      line-height: 1.7;
    }

    /* ============================================
       CTA FINAL
    ============================================ */
    .cta-section {
      background: var(--bg);
      padding: 120px 0;
      position: relative;
      overflow: hidden;
    }

    .cta-section::before {
      content: '';
      position: absolute;
      bottom: -200px;
      left: 50%;
      transform: translateX(-50%);
      width: 800px;
      height: 500px;
      background: radial-gradient(ellipse at center, rgba(34, 197, 94, 0.08) 0%, transparent 70%);
      border-radius: 50%;
    }

    .cta-box {
      background: var(--bg-card);
      border: 1px solid var(--border);
      border-radius: var(--radius-xl);
      padding: 80px 60px;
      text-align: center;
      position: relative;
      overflow: hidden;
      max-width: 800px;
      margin: 0 auto;
    }

    .cta-box::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, var(--accent), transparent);
    }

    .cta-box .badge {
      margin: 0 auto 28px;
    }

    .cta-box .section-title {
      margin-bottom: 14px;
    }

    .cta-box .section-desc {
      margin: 0 auto 36px;
    }

    .cta-box .hero-actions {
      margin-top: 0;
    }

    /* ============================================
       FOOTER
    ============================================ */
    footer {
      background: var(--bg-card);
      border-top: 1px solid var(--border);
      padding: 60px 0 32px;
    }

    .footer-top {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1fr;
      gap: 60px;
      margin-bottom: 48px;
    }

    .footer-brand .navbar-logo {
      font-size: 24px;
      margin-bottom: 14px;
    }

    .footer-brand p {
      font-size: 14px;
      color: var(--text-secondary);
      line-height: 1.7;
      max-width: 280px;
      margin-bottom: 20px;
    }

    .footer-contact {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      color: var(--text-muted);
    }

    .footer-contact svg {
      color: var(--accent);
      width: 15px;
      height: 15px;
    }

    .footer-col h4 {
      font-size: 13px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: var(--text-muted);
      margin-bottom: 18px;
    }

    .footer-col ul {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .footer-col ul li a {
      font-size: 14px;
      color: var(--text-secondary);
      transition: var(--transition);
    }

    .footer-col ul li a:hover {
      color: var(--accent);
    }

    .footer-bottom {
      border-top: 1px solid var(--border);
      padding-top: 28px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 12px;
    }

    .footer-bottom p {
      font-size: 13px;
      color: var(--text-muted);
    }

    .footer-bottom a {
      color: var(--accent);
    }
    .footer-bottom em {
      color: var(--accent);
      font-style: normal;
    }

    /* ============================================
       WHATSAPP BUBBLE
    ============================================ */
    .wa-bubble {
      position: fixed;
      bottom: 28px;
      right: 28px;
      width: 54px;
      height: 54px;
      border-radius: 50%;
      background: var(--accent);
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 50;
      box-shadow: 0 8px 30px rgba(34, 197, 94, 0.4);
      transition: var(--transition);
    }

    .wa-bubble:hover {
      transform: scale(1.1);
      box-shadow: 0 12px 40px rgba(34, 197, 94, 0.5);
    }

    .wa-bubble svg {
      color: #0a0f0c;
      width: 26px;
      height: 26px;
    }

    /* ============================================
       REVEAL ANIMATION
    ============================================ */
    .reveal {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.7s ease, transform 0.7s ease;
    }

    .reveal.visible {
      opacity: 1;
      transform: none;
    }

    /* ============================================
       RESPONSIVE
    ============================================ */
    @media (max-width: 900px) {
      .realisations-grid {
        grid-template-columns: 1fr;
      }

      .features-layout {
        grid-template-columns: 1fr;
        gap: 48px;
      }

      .steps-grid {
        grid-template-columns: 1fr;
      }

      .steps-grid::before {
        display: none;
      }

      .pricing-grid {
        grid-template-columns: 1fr;
        max-width: 480px;
      }

      .temoignages-grid {
        grid-template-columns: 1fr;
      }

      .footer-top {
        grid-template-columns: 1fr;
        gap: 36px;
      }

      .navbar-links,
      .navbar-actions {
        display: none;
      }

      .nav-toggle {
        display: flex;
      }
    }

    @media (max-width: 640px) {
      section {
        padding: 72px 0;
      }

      .hero {
        padding: 100px 0 60px;
      }

      .hero-actions {
        flex-direction: column;
        align-items: center;
      }

      .cta-box {
        padding: 48px 24px;
      }

      .hero-pills {
        gap: 6px;
      }
    }


    .pricing-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;

  padding: 6px 14px;
  border-radius: 999px;

  background: var(--accent);
  color: #0a0f0c;

  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.05em;
  text-transform: uppercase;
}

.pricing-badge svg {
  width: 14px;
  height: 14px;
  color: var(--accentjaune);
}

/* ── Wrapper pour les particules ── */
.btn-call-wrap {
  position: relative;
  display: inline-block;
}

/* ── Anneaux pulsants ── */
.btn-call::before,
.btn-call::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: inherit;
  border: 1.5px solid var(--accent);
  animation: call-ring 2s ease-out infinite;
  pointer-events: none;
  z-index: -1;
}
.btn-call::after {
  animation-delay: 1s;
}
@keyframes call-ring {
  0%   { transform: scale(1);   opacity: .6; }
  100% { transform: scale(1.5); opacity: 0;  }
}

/* ── Shimmer continu ── */
.btn-call .shine {
  position: absolute;
  inset: 0;
  border-radius: inherit;
  background: linear-gradient(110deg, transparent 30%, rgba(255,255,255,.25) 50%, transparent 70%);
  background-size: 200% 100%;
  animation: call-shimmer 2.4s linear infinite;
  pointer-events: none;
  z-index: 1;
}
@keyframes call-shimmer {
  0%   { background-position: 200% center; }
  100% { background-position: -200% center; }
}

/* ── Icône téléphone qui vibre ── */
.btn-call .call-ico {
  display: flex;
  align-items: center;
  animation: call-vibrate .9s ease-in-out infinite;
  position: relative;
  z-index: 2;
}
@keyframes call-vibrate {
  0%,100% { transform: rotate(0deg); }
  20%      { transform: rotate(-12deg); }
  40%      { transform: rotate(12deg); }
  60%      { transform: rotate(-7deg); }
  80%      { transform: rotate(7deg); }
}

/* ── Texte et z-index ── */
.btn-call { position: relative; overflow: hidden; }
.btn-call > span:last-child { position: relative; z-index: 2; }

/* ── Particules flottantes ── */
.call-dot {
  position: absolute;
  border-radius: 50%;
  background: var(--accent);
  opacity: 0;
  pointer-events: none;
  animation: call-dot-float var(--dur) ease-out infinite var(--delay);
}
@keyframes call-dot-float {
  0%   { transform: translate(0, 0) scale(1); opacity: .7; }
  100% { transform: var(--tx)       scale(0); opacity: 0;  }
}

/* ── Mobile : bouton pleine largeur ── */
.mobile-menu .btn-call-wrap {
  width: 100%;
}

.mobile-menu .btn-call {
  width: 100%;
  justify-content: center;
}


/* ── btn-primary : soft shimmer ── */
.btn-primary.btn-call .shine {
  background: linear-gradient(
    105deg,
    transparent 35%,
    rgba(255, 255, 255, 0.22) 50%,
    transparent 65%
  );
  background-size: 280% 100%;
  animation: call-shimmer 3s ease-in-out infinite;
}

/* ── btn-primary : breath glow ── */
.btn-primary.btn-call {
  overflow: hidden; /* on retire visible, plus besoin des anneaux */
  animation: primary-breathe 3s ease-in-out infinite;
}

@keyframes primary-breathe {
  0%,100% { box-shadow: 0 4px 15px rgba(34, 197, 94, 0.25); }
  50%      { box-shadow: 0 8px 35px rgba(34, 197, 94, 0.50); }
}

/* ── Supprimer les anneaux sur primary (trop chargé) ── */
.btn-primary.btn-call::before,
.btn-primary.btn-call::after {
  display: none;
}
  </style>



  <!-- ============================================
     NAVBAR
============================================ -->
  <nav class="navbar" id="navbar">
    <div class="container">
      <!-- <a class="navbar-logo" href="#">NET<span>SUCESS</span></a> -->
      <a href="{{ route('home') }}" class="navbar-logo">
                Net<span style="color:var(--accent);">Sucess</span>
            </a>
      <ul class="navbar-links">
         <li><a href="{{ route('home') }}#realisations">Nos réalisations</a></li>
                <li><a href="{{ route('home') }}#processus">Notre Processus</a></li>
                <li><a href="{{ route('home') }}#offres">Nos offres</a></li>
                <li><a href="{{ route('blog.index') }}">Blog</a></li>
                <li><a href="{{ route('home') }}#faq">FAQ</a></li>
      </ul>
      {{-- <div class="navbar-actions">
        <a href="#offres" class="btn btn-primary" style="padding:11px 22px;font-size:14px;">Voir les offres</a>
        <a href="#offres" class="btn btn-secondary" style="padding:11px 22px;font-size:14px;">Réserver un appel</a>
      </div> --}}

      <div class="navbar-actions">
  <a href="#offres" class="btn btn-primary btn-call" style="padding:11px 22px;font-size:14px;">
    Voir les offres
  </a>

  <div class="btn-call-wrap">
    <a href="#offres" class="btn btn-secondary btn-call" style="padding:11px 22px;font-size:14px;">
      <span class="shine"></span>
      <span class="call-ico">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 11a19.79 19.79 0 01-3.07-8.68A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
        </svg>
      </span>
      <span>Réserver un appel</span>
    </a>
  </div>
</div>
      <button class="nav-toggle" id="navToggle" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="mobileMenu" type="button">
    <span></span><span></span><span></span>
</button>
    </div>
  </nav>

  <!-- Mobile Menu -->
  {{-- <div class="mobile-menu" id="mobileMenu">
    <a href="{{ route('home') }}#realisations" class="mobile-link">Nos réalisations</a>
    <a href="{{ route('home') }}#processus" class="mobile-link">Notre Processus</a>
    <a href="{{ route('home') }}#offres" class="mobile-link">Nos offres</a>
    <a href="{{ route('blog.index') }}" class="mobile-link">Blog</a>
    <a href="{{ route('home') }}#faq" class="mobile-link">FAQ</a>
    <a href="#offres" class="btn btn-primary">Réserver un appel</a>
  </div> --}}

  <!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
  <a href="{{ route('home') }}#realisations" class="mobile-link">Nos réalisations</a>
  <a href="{{ route('home') }}#processus" class="mobile-link">Notre Processus</a>
  <a href="{{ route('home') }}#offres" class="mobile-link">Nos offres</a>
  <a href="{{ route('blog.index') }}" class="mobile-link">Blog</a>
  <a href="{{ route('home') }}#faq" class="mobile-link">FAQ</a>

  <div class="btn-call-wrap">
    <a href="#offres" class="btn btn-secondary btn-call">
      <span class="shine"></span>
      <span class="call-ico">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 11a19.79 19.79 0 01-3.07-8.68A2 2 0 012 .18h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
        </svg>
      </span>
      <span>Réserver un appel</span>
    </a>
  </div>
</div>

   <script>
    // ----- Navbar scroll -----
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 40);
    });

    // ----- Mobile menu -----
    const toggle = document.getElementById('navToggle');
const menu = document.getElementById('mobileMenu');
toggle.addEventListener('click', () => {
    const isOpen = menu.classList.toggle('open');
    toggle.setAttribute('aria-expanded', isOpen);
});

    document.querySelectorAll('.mobile-link, .mobile-menu .btn').forEach(el => {
      el.addEventListener('click', () => menu.classList.remove('open'));
    });



    /* ── Particules : à mettre dans app.js ou en bas de page ── */
document.querySelectorAll('.btn-call-wrap').forEach(wrap => {
  const dots = [
    { x: -10, y: -16, size: 4, dur: 1.8, delay: 0   },
    { x:  16, y: -12, size: 3, dur: 2.2, delay: .5  },
    { x:  18, y:   8, size: 3, dur: 1.6, delay: 1.0 },
    { x: -14, y:  10, size: 4, dur: 2.0, delay: .7  },
    { x:   6, y: -18, size: 3, dur: 1.9, delay: 1.3 },
  ];
  dots.forEach(d => {
    const el = document.createElement('span');
    el.className = 'call-dot';
    el.style.cssText = `
      width:${d.size}px; height:${d.size}px;
      left:50%; top:50%;
      --tx: translate(${d.x}px, ${d.y}px);
      --dur: ${d.dur}s;
      --delay: ${d.delay}s;
    `;
    wrap.appendChild(el);
  });
});

  </script>