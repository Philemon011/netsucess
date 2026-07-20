<section id="features" class="relative py-24 sm:py-32">
  <div class="mx-auto max-w-6xl px-4 sm:px-6">

    {{-- En-tête --}}
    <div class="reveal mx-auto max-w-2xl text-center">
      <div class="mx-auto mb-5 inline-flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)]">
        <span class="h-1.5 w-1.5 rounded-full bg-[var(--color-primary)]"></span>
        Ce qui est réellement livré
      </div>
      <h2 class="text-gradient-dark font-display tracking-tight-hero text-[32px] font-semibold leading-[1.12] sm:text-[44px]">
        Tout ce qu'il faut pour<br class="hidden sm:block"> transformer une visite en vente
      </h2>
      <p class="tracking-tight-body mx-auto mt-5 max-w-md text-[16px] leading-[1.65] text-[var(--color-foreground-secondary)]">
        Pas de promesse floue. Voici précisément ce que contient votre boutique le jour de la livraison.
      </p>
    </div>

    <div class="mt-16 grid grid-cols-1 items-center gap-12 lg:grid-cols-2 lg:gap-16">

      {{-- Colonne gauche — checklist concrète --}}
      <div class="reveal flex flex-col gap-5">
        @php
          $items = [
            [
              'titre' => 'Fiches produits qui rassurent et convainquent',
              'desc' => 'Description, prix, avis, stock, garanties — chaque fiche produit répond aux questions avant même qu\'elles soient posées.',
            ],
            [
              'titre' => 'Tunnel d\'achat en 2 clics',
              'desc' => 'Du panier au paiement, le parcours est raccourci au maximum pour limiter les abandons avant la fin de la commande.',
            ],
            [
              'titre' => 'Preuve sociale intégrée partout',
              'desc' => 'Avis clients, badges de confiance et compteurs de stock affichés aux bons endroits pour rassurer sans surcharger.',
            ],
            [
              'titre' => 'Design responsive pixel par pixel',
              'desc' => 'Un rendu identique et impeccable sur mobile, tablette et ordinateur — 80% de vos visiteurs viennent du téléphone.',
            ],
            [
              'titre' => 'Vitesse de chargement optimisée',
              'desc' => 'Chaque seconde de chargement en trop coûte des ventes. Votre boutique est optimisée pour charger vite, partout.',
            ],
          ];
        @endphp

        @foreach ($items as $item)
          <div class="flex items-start gap-3.5 rounded-2xl border border-[var(--color-border)] bg-[var(--color-card)] p-4">
            <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full" style="background: var(--color-primary);">
              <svg class="h-3.5 w-3.5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </span>
            <div>
              <h3 class="tracking-tight-body text-[15px] font-semibold text-[var(--color-foreground)]">{{ $item['titre'] }}</h3>
              <p class="tracking-tight-body mt-1 text-[13.5px] leading-[1.55] text-[var(--color-foreground-secondary)]">{{ $item['desc'] }}</p>
            </div>
          </div>
        @endforeach
      </div>

      {{-- Colonne droite — vraie fiche produit --}}
<div class="reveal relative">
  <div class="pointer-events-none absolute left-1/2 top-1/2 -z-10 h-[320px] w-[320px] -translate-x-1/2 -translate-y-1/2 rounded-full opacity-[0.12]" style="background: radial-gradient(circle, var(--color-primary), transparent 70%); filter: blur(90px);"></div>

  <p class="mx-auto mb-3 max-w-sm text-center text-[11.5px] font-medium  tracking-[0em] text-[var(--color-foreground-muted)]">
    Exemple illustratif 
  </p>

  <div class="mx-auto max-w-sm overflow-hidden rounded-3xl border border-[var(--color-border)] bg-[var(--color-card)] shadow-[0_30px_70px_-25px_rgba(0,0,0,0.25)]">
          {{-- Image produit --}}
<div class="relative aspect-square overflow-hidden bg-[var(--color-background)]">
  <img
    src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=800&h=800&fit=crop&q=80"
    alt="Sneaker Édition Limitée"
    class="h-full w-full object-cover"
    loading="lazy"
  >
  <span class="absolute left-3 top-3 rounded-full bg-[var(--color-primary)] px-2.5 py-1 text-[10.5px] font-semibold text-white">-20%</span>
  <span class="absolute right-3 top-3 flex h-8 w-8 items-center justify-center rounded-full bg-white shadow-sm">
  <svg class="h-4 w-4" style="color: var(--color-dark-surface);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
</span>
</div>

          {{-- Détail produit --}}
          <div class="p-5">
            <div class="flex items-center gap-1">
              @for ($i = 0; $i < 5; $i++)
                <svg class="h-3.5 w-3.5 text-[var(--color-gold)]" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
              @endfor
              <span class="ml-1 text-[11.5px] text-[var(--color-foreground-secondary)]">(128 avis)</span>
            </div>

            <h3 class="tracking-tight-body mt-2.5 text-[16.5px] font-semibold text-[var(--color-foreground)]">Sneaker Édition Limitée</h3>

            <div class="mt-1.5 flex items-baseline gap-2">
              <span class="text-[19px] font-bold text-[var(--color-foreground)]">42 000 FCFA</span>
              <span class="text-[13px] text-[var(--color-foreground-muted)] line-through">55 000 FCFA</span>
            </div>

            <p class="mt-2.5 flex items-center gap-1.5 text-[12px] font-medium text-[var(--color-primary)]">
              <span class="h-1.5 w-1.5 rounded-full" style="background: var(--color-primary);"></span>
              Plus que 4 en stock — commandé 12 fois cette semaine
            </p>

            <button type="button" class="mt-4 flex w-full items-center justify-center gap-2 rounded-xl bg-[var(--color-primary)] px-5 py-3.5 text-[14px] font-semibold text-white">
              Ajouter au panier
              <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg>
            </button>

            <div class="mt-4 flex items-center justify-between border-t border-[var(--color-border)] pt-4 text-[11px] text-[var(--color-foreground-secondary)]">
              <span class="flex items-center gap-1.5">
                <svg class="h-3.5 w-3.5 text-[var(--color-primary)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                Livraison rapide
              </span>
              <span class="flex items-center gap-1.5">
                <svg class="h-3.5 w-3.5 text-[var(--color-primary)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                Paiement sécurisé
              </span>
            </div>
          </div>
        </div>

        {{-- Badge flottant --}}
        <div class="absolute -left-4 bottom-8 hidden rounded-2xl border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-3 shadow-[0_16px_40px_-15px_rgba(0,0,0,0.2)] sm:block" style="animation: float-soft 6s ease-in-out infinite;">
          <p class="text-[10px] text-[var(--color-foreground-secondary)]">Taux d'ajout au panier</p>
          <p class="text-[15px] font-semibold text-[var(--color-primary)]">+340% vs standard</p>
        </div>
      </div>
    </div>
  </div>
</section>