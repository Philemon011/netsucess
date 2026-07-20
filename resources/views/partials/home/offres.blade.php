<section id="offres" class="relative py-24 sm:py-32">
  <div class="mx-auto max-w-6xl px-4 sm:px-6">

    {{-- En-tête --}}
    <div class="reveal mx-auto max-w-2xl text-center">
      <div class="mx-auto mb-5 inline-flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)]">
        <span class="h-1.5 w-1.5 rounded-full bg-[var(--color-primary)]"></span>
        Votre marque commence ici
      </div>
      <h2 class="text-gradient-dark font-display tracking-tight-hero text-[32px] font-semibold leading-[1.12] sm:text-[44px]">
        La solution pour lancer une boutique rentable
      </h2>
      <p class="tracking-tight-body mx-auto mt-5 max-w-md text-[16px] leading-[1.65] text-[var(--color-foreground-secondary)]">
        Une boutique livrée clé en main, sans étape supplémentaire après réception.
      </p>
    </div>

    {{-- Grille des formules --}}
    <div class="mt-16 grid grid-cols-1 items-stretch gap-5 lg:grid-cols-2 lg:gap-6">

      @php
        $formules = [
          [
            'nom' => 'Essentielle',
            'desc' => "Une boutique premium clé en main pour lancer votre marque e-commerce.",
            'prix' => '450 000',
            'featured' => false,
            'inclus' => [
              "Identité visuelle (logo, design…)",
              "Copywriting stratégique",
              "Optimisation SEO et vitesse",
              "Thème professionnel sous licence",
              "10 fiches produits optimisées",
              "2 cycles de révision",
            ],
          ],
          [
            'nom' => 'Signature',
            'desc' => "Pour une boutique premium, taillée sur mesure du début à la fin.",
            'prix' => '850 000',
            'featured' => true,
            'badge' => 'Recommandée',
            'inclus' => [
              "Identité visuelle sur mesure",
              "Copywriting stratégique avancé",
              "Sections codées sur mesure",
              "Intégration outils IA (chatbot…)",
              "25 fiches produits optimisées",
              "Recherche fournisseur fiable",
              "Révisions sur demande",
            ],
          ],
        ];
      @endphp

      @foreach ($formules as $f)
        <div class="relative flex flex-col rounded-3xl p-7 sm:p-8 {{ $f['featured'] ? 'text-white shadow-[0_30px_70px_-25px_rgba(21,128,61,0.35)] lg:-translate-y-3' : 'border border-[var(--color-border)] bg-[var(--color-card)]' }}" @if($f['featured']) style="background: linear-gradient(160deg, var(--color-dark-surface-2), var(--color-dark-surface));" @endif>

          @if (!empty($f['badge']))
            <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 rounded-full px-4 py-1.5 text-[12px] font-semibold text-white shadow-[0_8px_20px_-6px_rgba(21,128,61,0.5)]" style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary));">
              {{ $f['badge'] }}
            </div>
          @endif

          {{-- En-tête --}}
          <div>
            <h3 class="tracking-tight-body text-[19px] font-semibold {{ $f['featured'] ? 'text-white' : 'text-[var(--color-foreground)]' }}">
              {{ $f['nom'] }}
            </h3>
            <p class="tracking-tight-body mt-1.5 text-[14px] leading-[1.5] {{ $f['featured'] ? 'text-white/60' : 'text-[var(--color-foreground-secondary)]' }}">
              {{ $f['desc'] }}
            </p>
          </div>

          {{-- Prix --}}
          <div class="mt-6 flex items-baseline gap-1.5 border-t border-dashed pb-1 pt-6" style="border-color: {{ $f['featured'] ? 'rgba(255,255,255,0.15)' : 'var(--color-border)' }};">
            <span class="font-display tracking-tight-hero text-[32px] font-semibold sm:text-[36px] {{ $f['featured'] ? 'text-white' : 'text-[var(--color-foreground)]' }}">
              {{ $f['prix'] }}
            </span>
            <span class="text-[14px] {{ $f['featured'] ? 'text-white/50' : 'text-[var(--color-foreground-secondary)]' }}">FCFA</span>
          </div>

          {{-- CTA --}}
          
         <a   href="https://calendly.com/ulrichcevanie/30min"
    target="_blank"
    rel="noopener noreferrer"
    class="btn-cta group mt-6 flex items-center justify-center gap-1.5 rounded-full px-6 py-3.5 text-[14.5px] font-semibold transition-all duration-300 {{ $f['featured'] ? 'bg-white hover:shadow-lg' : 'text-white hover:shadow-[0_10px_25px_-8px_rgba(21,128,61,0.5)]' }}"
    style="{{ $f['featured'] ? 'color: var(--color-dark-surface);' : 'background: var(--color-primary);' }}"
  >
    <span class="shine"></span>
    <span class="relative z-10 flex items-center gap-1.5">
      Réserver un appel
      <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <path d="M5 12h14M12 5l7 7-7 7"/>
      </svg>
    </span>
  </a>

          {{-- Liste des inclus --}}
          <ul class="mt-7 flex flex-col gap-3.5">
            @foreach ($f['inclus'] as $item)
              <li class="flex items-start gap-2.5">
                <span class="mt-0.5 flex h-[18px] w-[18px] shrink-0 items-center justify-center rounded-full" style="background: {{ $f['featured'] ? 'rgba(255,255,255,0.12)' : 'var(--color-accent)' }};">
                  <svg class="h-3 w-3" style="color: {{ $f['featured'] ? 'var(--color-secondary)' : 'var(--color-primary)' }};" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"/>
                  </svg>
                </span>
                <span class="tracking-tight-body text-[14px] leading-[1.5] {{ $f['featured'] ? 'text-white/80' : 'text-[var(--color-foreground-secondary)]' }}">
                  {{ $item }}
                </span>
              </li>
            @endforeach
          </ul>
        </div>
      @endforeach

      {{-- Carte sur-mesure --}}
      <div class="relative flex flex-col justify-center rounded-3xl border border-dashed border-[var(--color-border)] bg-[var(--color-card)] p-7 sm:p-8 lg:col-span-2">
        <div class="flex flex-col items-center gap-4 text-center sm:flex-row sm:justify-between sm:text-left">
          <div>
            <h3 class="tracking-tight-body text-[17px] font-semibold text-[var(--color-foreground)]">Besoin d'un projet sur mesure ?</h3>
            <p class="tracking-tight-body mt-1.5 max-w-md text-[13.5px] leading-[1.55] text-[var(--color-foreground-secondary)]">
              Catalogue étendu, fonctionnalités spécifiques, délai particulier — discutons de votre projet pour construire une offre adaptée.
            </p>
          </div>
          
        <a    href="https://calendly.com/ulrichcevanie/30min"
            target="_blank"
            rel="noopener noreferrer"
            class="flex shrink-0 items-center gap-1.5 rounded-full border border-[var(--color-border)] bg-[var(--color-background)] px-6 py-3 text-[13.5px] font-semibold text-[var(--color-foreground)] transition-all duration-300 hover:border-[var(--color-primary)]/30 hover:bg-[var(--color-accent)]"
          >
            En discuter
          </a>
        </div>
      </div>
    </div>

    {{-- Bandeau de réassurance --}}
    <div class="reveal mx-auto mt-14 max-w-3xl">
      <div class="grid grid-cols-1 divide-y divide-[var(--color-border)] rounded-3xl border border-[var(--color-border)] bg-[var(--color-card)] sm:grid-cols-3 sm:divide-x sm:divide-y-0">
        @php
          $reassurances = [
            ['titre' => 'Livraison en 7 jours', 'desc' => 'Un délai clair, respecté dès la commande.'],
            ['titre' => 'Boutique 100% livrée', 'desc' => 'Tous les accès vous appartiennent dès réception.'],
            ['titre' => 'Design premium garanti', 'desc' => 'Aucun thème générique, tout est sur mesure.'],
          ];
        @endphp
        @foreach ($reassurances as $r)
          <div class="flex flex-col items-start gap-3.5 px-7 py-7 sm:px-6 sm:py-8">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl" style="background: var(--color-accent);">
              <svg class="h-4.5 w-4.5" style="color: var(--color-primary);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            </span>
            <div>
              <p class="tracking-tight-body text-[14.5px] font-semibold leading-snug text-[var(--color-foreground)]">{{ $r['titre'] }}</p>
              <p class="tracking-tight-body mt-1 text-[13px] leading-[1.5] text-[var(--color-foreground-secondary)]">{{ $r['desc'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>