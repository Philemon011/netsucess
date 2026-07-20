<footer class="relative overflow-hidden border-t border-[var(--color-border)] pt-20 pb-8 sm:pt-24">

  {{-- Glow discret --}}
  <div class="pointer-events-none absolute left-1/2 top-0 -z-10 h-[300px] w-[500px] -translate-x-1/2 -translate-y-1/2 rounded-full opacity-[0.08]" style="background: radial-gradient(circle, var(--color-primary), transparent 70%); filter: blur(100px);"></div>

  <div class="mx-auto max-w-6xl px-4 sm:px-6">

    {{-- Bloc CTA final compact --}}
    <div class="reveal mb-16 flex flex-col items-center justify-between gap-6 rounded-3xl border border-[var(--color-border)] bg-[var(--color-card)] px-7 py-8 text-center sm:flex-row sm:px-10 sm:text-left">
      <div>
        <h3 class="tracking-tight-body text-[19px] font-semibold text-[var(--color-foreground)] sm:text-[21px]">
          Prêt à lancer votre boutique ?
        </h3>
        <p class="tracking-tight-body mt-1.5 text-[14px] text-[var(--color-foreground-secondary)]">
          Réservez un appel de 30 minutes, sans engagement.
        </p>
      </div>
      
      <a  href="https://calendly.com/ulrichcevanie/30min"
        target="_blank"
        rel="noopener noreferrer"
        class="group flex shrink-0 items-center gap-1.5 rounded-full px-6 py-3.5 text-[14px] font-semibold text-white transition-all duration-300 hover:shadow-[0_10px_25px_-8px_rgba(21,128,61,0.5)]"
        style="background: var(--color-primary);"
      >
        Réserver un appel
        <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
      </a>
    </div>

    {{-- Colonnes --}}
    <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-[1.6fr_1fr_1fr_1fr]">

      {{-- Marque --}}
      <div>
        <a href="{{ route('home') }}" class="tracking-tight-body flex items-center gap-2 text-[17px] font-semibold text-[var(--color-foreground)]">
          <span class="flex h-8 w-8 items-center justify-center rounded-lg" style="background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));">
            <svg class="h-4 w-4 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
              <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/>
              <path d="M3 6h18"/>
              <path d="M16 10a4 4 0 01-8 0"/>
            </svg>
          </span>
          <span>Net<span style="color: var(--color-primary);">Sucess</span></span>
        </a>
        <p class="tracking-tight-body mt-4 max-w-xs text-[14px] leading-[1.7] text-[var(--color-foreground-secondary)]">
          Des boutiques Shopify premium, livrées clé en main et prêtes à vendre dès la remise des accès.
        </p>
        <a href="mailto:contact@netsucess.com" class="mt-5 inline-flex items-center gap-2 text-[13px] text-[var(--color-foreground-muted)] transition-colors duration-300 hover:text-[var(--color-primary)]">
          <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
            <polyline points="22,6 12,13 2,6"/>
          </svg>
          contact@netsucess.com
        </a>
      </div>

      {{-- Navigation --}}
      <div>
        <h4 class="text-[12px] font-semibold uppercase tracking-[0.08em] text-[var(--color-foreground-muted)]">Navigation</h4>
        <ul class="mt-5 flex flex-col gap-3">
          <li><a href="{{ route('home') }}#realisations" class="text-[14px] text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-primary)]">Réalisations</a></li>
          <li><a href="{{ route('home') }}#processus" class="text-[14px] text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-primary)]">Processus</a></li>
          <li><a href="{{ route('home') }}#offres" class="text-[14px] text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-primary)]">Offres</a></li>
          <li><a href="{{ route('blog.index') }}" class="text-[14px] text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-primary)]">Blog</a></li>
          <li><a href="{{ route('home') }}#faq" class="text-[14px] text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-primary)]">FAQ</a></li>
        </ul>
      </div>

      {{-- Légal --}}
      <div>
        <h4 class="text-[12px] font-semibold uppercase tracking-[0.08em] text-[var(--color-foreground-muted)]">Légal</h4>
        <ul class="mt-5 flex flex-col gap-3">
          <li><a href="#" class="text-[14px] text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-primary)]">Mentions légales</a></li>
          <li><a href="#" class="text-[14px] text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-primary)]">Politique de confidentialité</a></li>
          <li><a href="#" class="text-[14px] text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-primary)]">Politique de remboursement</a></li>
          <li><a href="#" class="text-[14px] text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-primary)]">CGU / CGV</a></li>
        </ul>
      </div>

      {{-- Contact --}}
      <div>
        <h4 class="text-[12px] font-semibold uppercase tracking-[0.08em] text-[var(--color-foreground-muted)]">Nous contacter</h4>
        <ul class="mt-5 flex flex-col gap-3">
          <li>
            <a href="https://wa.me/2290197773145" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-[14px] text-[var(--color-foreground-secondary)] transition-colors duration-300 hover:text-[var(--color-primary)]">
              <svg class="h-3.5 w-3.5 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
              </svg>
              WhatsApp
            </a>
          </li>
          <li class="flex items-center gap-2 text-[14px] text-[var(--color-foreground-secondary)]">
            <svg class="h-3.5 w-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
              <circle cx="12" cy="10" r="3"/>
            </svg>
            Cotonou, Bénin
          </li>
        </ul>
      </div>
    </div>

    {{-- Ligne de bas de page --}}
    <div class="mt-16 flex flex-col items-center justify-center gap-4 border-t border-[var(--color-border)] pt-8 text-center sm:flex-row sm:justify-between sm:text-left">
      <p class="text-[13px] text-[var(--color-foreground-muted)]">
        Tous droits réservés — © {{ date('Y') }} NetSucess
      </p>
      
      <a  href="https://philemondev.tech/"
        target="_blank"
        rel="noopener noreferrer"
        class="flex items-center gap-1.5 text-[13px] text-[var(--color-foreground-muted)] transition-colors duration-300 hover:text-[var(--color-primary)]"
      >
        Fait par
        <span class="font-semibold text-[var(--color-foreground)]">Philémon Etounde</span>
      </a>
    </div>
  </div>
</footer>