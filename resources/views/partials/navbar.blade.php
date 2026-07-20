<nav id="navbar"
  class="fixed top-0 left-0 right-0 z-50 flex justify-center px-4 pt-4 transition-all duration-500 sm:px-6 sm:pt-6">
  <div id="navbarInner"
    class="w-full max-w-6xl rounded-2xl border border-transparent bg-transparent transition-all duration-500">
    <div class="flex items-center justify-between px-5 py-3.5 sm:px-6">

      {{-- Logo — badge icône sac --}}
      <a href="{{ route('home') }}"
        class="tracking-tight-body flex items-center gap-2 text-[17px] font-semibold text-[var(--color-foreground)]">
        <span
          class="flex h-8 w-8 items-center justify-center rounded-lg bg-gradient-to-br from-[var(--color-primary)] to-[var(--color-secondary)]">
          <svg class="h-4 w-4 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z" />
            <path d="M3 6h18" />
            <path d="M16 10a4 4 0 01-8 0" />
          </svg>
        </span>
        <span>Net<span class="text-[var(--color-primary)]">Sucess</span></span>
      </a>

      {{-- Liens desktop — underline reveal --}}
      <ul class="hidden items-center gap-8 lg:flex">
        <li>
          <a href="{{ route('home') }}#realisations"
            class="group relative py-2 text-[14px] font-medium text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-foreground)]">
            Réalisations
            <span
              class="absolute -bottom-0.5 left-0 h-[1.5px] w-0 bg-[var(--color-primary)] transition-all duration-300 group-hover:w-full"></span>
          </a>
        </li>
        <li>
          <a href="{{ route('home') }}#processus"
            class="group relative py-2 text-[14px] font-medium text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-foreground)]">
            Processus
            <span
              class="absolute -bottom-0.5 left-0 h-[1.5px] w-0 bg-[var(--color-primary)] transition-all duration-300 group-hover:w-full"></span>
          </a>
        </li>
        <li>
          <a href="{{ route('home') }}#offres"
            class="group relative py-2 text-[14px] font-medium text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-foreground)]">
            Offres
            <span
              class="absolute -bottom-0.5 left-0 h-[1.5px] w-0 bg-[var(--color-primary)] transition-all duration-300 group-hover:w-full"></span>
          </a>
        </li>
        <li>
          <a href="{{ route('blog.index') }}"
            class="group relative py-2 text-[14px] font-medium text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-foreground)]">
            Blog
            <span
              class="absolute -bottom-0.5 left-0 h-[1.5px] w-0 bg-[var(--color-primary)] transition-all duration-300 group-hover:w-full"></span>
          </a>
        </li>
        <li>
          <a href="{{ route('home') }}#faq"
            class="group relative py-2 text-[14px] font-medium text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-foreground)]">
            FAQ
            <span
              class="absolute -bottom-0.5 left-0 h-[1.5px] w-0 bg-[var(--color-primary)] transition-all duration-300 group-hover:w-full"></span>
          </a>
        </li>
      </ul>

      {{-- Actions desktop --}}
      <div class="hidden items-center gap-3 lg:flex">
        <button id="themeToggle" aria-label="Changer de thème"
          class="flex h-9 w-9 items-center justify-center rounded-full text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:bg-[var(--color-accent)] hover:text-[var(--color-foreground)]">
          <svg id="iconSun" class="hidden h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round">
            <circle cx="12" cy="12" r="4" />
            <path
              d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41" />
          </svg>
          <svg id="iconMoon" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
          </svg>
        </button>

        <span class="h-5 w-px bg-[var(--color-border)]"></span>


        <a href="https://calendly.com/ulrichcevanie/30min" target="_blank" rel="noopener noreferrer"
          class="btn-cta group flex items-center gap-1.5 rounded-full border border-[var(--color-primary)]/30 bg-[var(--color-accent)] px-5 py-2.5 text-[14px] font-semibold text-[var(--color-primary)] transition-all duration-300 hover:border-transparent hover:bg-[var(--color-primary)] hover:text-white">
          <span class="shine"></span>
          <span class="relative z-10 flex items-center gap-1.5">
            Réserver un appel
            <svg class="h-3.5 w-3.5 transition-transform duration-300 group-hover:translate-x-0.5" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
          </span>
        </a>
      </div>

      {{-- Toggle mobile --}}
      <div class="flex items-center gap-2 lg:hidden">
        <button id="themeToggleMobile" aria-label="Changer de thème"
          class="flex h-9 w-9 items-center justify-center rounded-full text-[var(--color-foreground-secondary)]">
          <svg class="theme-icon-sun hidden h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round">
            <circle cx="12" cy="12" r="4" />
            <path
              d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41" />
          </svg>
          <svg class="theme-icon-moon h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
          </svg>
        </button>

        <button id="navToggle" aria-label="Ouvrir le menu"
          class="flex h-9 w-9 items-center justify-center rounded-full text-[var(--color-foreground)]">
          <svg id="iconMenu" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
            stroke-linecap="round">
            <line x1="4" y1="7" x2="20" y2="7" />
            <line x1="4" y1="12" x2="20" y2="12" />
            <line x1="4" y1="17" x2="20" y2="17" />
          </svg>
          <svg id="iconClose" class="hidden h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2.2" stroke-linecap="round">
            <line x1="6" y1="6" x2="18" y2="18" />
            <line x1="6" y1="18" x2="18" y2="6" />
          </svg>
        </button>
      </div>
    </div>

    {{-- Menu mobile --}}
    <div id="mobileMenu" class="hidden overflow-hidden lg:hidden">
      <div class="flex flex-col gap-1 px-5 pb-5">
        <a href="{{ route('home') }}#realisations"
          class="mobile-link rounded-xl px-4 py-3 text-[15px] font-medium text-[var(--color-foreground-secondary)] hover:bg-[var(--color-accent)] hover:text-[var(--color-foreground)]">Réalisations</a>
        <a href="{{ route('home') }}#processus"
          class="mobile-link rounded-xl px-4 py-3 text-[15px] font-medium text-[var(--color-foreground-secondary)] hover:bg-[var(--color-accent)] hover:text-[var(--color-foreground)]">Processus</a>
        <a href="{{ route('home') }}#offres"
          class="mobile-link rounded-xl px-4 py-3 text-[15px] font-medium text-[var(--color-foreground-secondary)] hover:bg-[var(--color-accent)] hover:text-[var(--color-foreground)]">Offres</a>
        <a href="{{ route('blog.index') }}"
          class="mobile-link rounded-xl px-4 py-3 text-[15px] font-medium text-[var(--color-foreground-secondary)] hover:bg-[var(--color-accent)] hover:text-[var(--color-foreground)]">Blog</a>
        <a href="{{ route('home') }}#faq"
          class="mobile-link rounded-xl px-4 py-3 text-[15px] font-medium text-[var(--color-foreground-secondary)] hover:bg-[var(--color-accent)] hover:text-[var(--color-foreground)]">FAQ</a>

        <a href="https://calendly.com/ulrichcevanie/30min" target="_blank" rel="noopener noreferrer"
          class="btn-cta mt-2 flex items-center justify-center gap-1.5 rounded-full border border-[var(--color-primary)]/30 bg-[var(--color-accent)] px-5 py-3 text-[15px] font-semibold text-[var(--color-primary)]">
          <span class="shine"></span>
          <span class="relative z-10 flex items-center gap-1.5">
            Réserver un appel
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
          </span>
        </a>
      </div>
    </div>
  </div>
</nav>

<script>
  (function () {
    const navbarInner = document.getElementById('navbarInner');
    const navToggle = document.getElementById('navToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const iconMenu = document.getElementById('iconMenu');
    const iconClose = document.getElementById('iconClose');

    function updateNavbarBg() {
      const scrolled = window.scrollY > 24;
      const menuOpen = !mobileMenu.classList.contains('hidden');
      if (scrolled || menuOpen) {
        navbarInner.classList.add('bg-[var(--color-card)]/80', 'backdrop-blur-xl', 'border-[var(--color-border)]', 'shadow-[0_8px_30px_rgba(0,0,0,0.08)]');
        navbarInner.classList.remove('bg-transparent', 'border-transparent');
      } else {
        navbarInner.classList.remove('bg-[var(--color-card)]/80', 'backdrop-blur-xl', 'border-[var(--color-border)]', 'shadow-[0_8px_30px_rgba(0,0,0,0.08)]');
        navbarInner.classList.add('bg-transparent', 'border-transparent');
      }
    }
    window.addEventListener('scroll', updateNavbarBg);

    let menuOpen = false;
    navToggle.addEventListener('click', () => {
      menuOpen = !menuOpen;
      mobileMenu.classList.toggle('hidden', !menuOpen);
      iconMenu.classList.toggle('hidden', menuOpen);
      iconClose.classList.toggle('hidden', !menuOpen);
      updateNavbarBg();
    });
    document.querySelectorAll('.mobile-link').forEach((el) => {
      el.addEventListener('click', () => {
        menuOpen = false;
        mobileMenu.classList.add('hidden');
        iconMenu.classList.remove('hidden');
        iconClose.classList.add('hidden');
        updateNavbarBg();
      });
    });

    function applyTheme(isDark) {
      document.documentElement.classList.toggle('dark', isDark);
      document.documentElement.classList.toggle('light', !isDark);
      localStorage.setItem('netsucess-theme', isDark ? 'dark' : 'light');
      document.querySelectorAll('#iconSun, .theme-icon-sun').forEach(el => el.classList.toggle('hidden', !isDark));
      document.querySelectorAll('#iconMoon, .theme-icon-moon').forEach(el => el.classList.toggle('hidden', isDark));
    }

    const currentlyDark = document.documentElement.classList.contains('dark');
    applyTheme(currentlyDark);

    document.getElementById('themeToggle').addEventListener('click', () => {
      applyTheme(!document.documentElement.classList.contains('dark'));
    });
    document.getElementById('themeToggleMobile').addEventListener('click', () => {
      applyTheme(!document.documentElement.classList.contains('dark'));
    });
  })();
</script>