<div
  id="cookieConsent"
  class="fixed bottom-4 left-4 right-4 z-[80] hidden sm:bottom-6 sm:left-6 sm:right-auto sm:max-w-sm"
>
  <div class="rounded-2xl border border-[var(--color-border)] bg-[var(--color-card)] p-5 shadow-[0_20px_50px_-15px_rgba(0,0,0,0.25)] sm:rounded-3xl sm:p-6">
    <div class="flex items-start gap-3">
      <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl" style="background: var(--color-accent);">
        <svg class="h-4 w-4" style="color: var(--color-primary);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"/>
          <path d="M8.5 8.5v.01M16 15.5v.01M12 12v.01M11 17v.01M7 14v.01"/>
          <path d="M12 2a10 10 0 000 20 1.5 1.5 0 001.5-1.5c0-.4-.15-.75-.4-1.02a1.5 1.5 0 01-.4-1.02 1.5 1.5 0 011.5-1.46H16a4 4 0 004-4 10 10 0 00-8-9.9z"/>
        </svg>
      </span>
      <div>
        <h3 class="tracking-tight-body text-[14.5px] font-semibold text-[var(--color-foreground)]">
          Votre vie privée compte
        </h3>
        <p class="tracking-tight-body mt-1.5 text-[13px] leading-[1.55] text-[var(--color-foreground-secondary)]">
          Nous utilisons des cookies pour améliorer votre expérience et mesurer l'audience du site. Vous pouvez accepter ou refuser à tout moment.
        </p>
      </div>
    </div>

    <div class="mt-4 flex items-center gap-2.5">
      <button
        id="cookieDecline"
        type="button"
        class="flex-1 rounded-full border border-[var(--color-border)] px-4 py-2.5 text-[13px] font-semibold text-[var(--color-foreground)] transition-colors duration-300 hover:bg-[var(--color-accent)]"
      >
        Refuser
      </button>
      <button
        id="cookieAccept"
        type="button"
        class="flex-1 rounded-full px-4 py-2.5 text-[13px] font-semibold text-white transition-colors duration-300"
        style="background: var(--color-primary);"
      >
        Accepter
      </button>
    </div>
  </div>
</div>

<script>
  (function () {
    const STORAGE_KEY = 'netsucess-cookie-consent';
    const banner = document.getElementById('cookieConsent');
    const acceptBtn = document.getElementById('cookieAccept');
    const declineBtn = document.getElementById('cookieDecline');

    const consent = localStorage.getItem(STORAGE_KEY);
    if (!consent) {
      setTimeout(() => {
        banner.classList.remove('hidden');
      }, 1200);
    }

    function handleChoice(choice) {
      localStorage.setItem(STORAGE_KEY, choice);
      banner.classList.add('hidden');
    }

    acceptBtn.addEventListener('click', () => handleChoice('accepted'));
    declineBtn.addEventListener('click', () => handleChoice('declined'));
  })();
</script>