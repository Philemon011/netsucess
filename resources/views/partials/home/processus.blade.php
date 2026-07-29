<section id="processus" class="relative py-24 sm:py-32">
  <div class="mx-auto max-w-3xl px-4 text-center sm:px-6">
    <div class="reveal mx-auto mb-5 inline-flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)]">
      <span class="h-1.5 w-1.5 rounded-full bg-[var(--color-primary)]"></span>
      Comment nous créons votre marque
    </div>
    <h2 class="reveal text-gradient-dark font-display tracking-tight-hero text-[32px] font-semibold leading-[1.12] sm:text-[44px]">
      3 étapes pour transformer votre idée en boutique prête à vendre
    </h2>
  </div>

  @php
    $etapes = [
      [
        'num' => '01',
        'titre' => 'Accès à votre boutique',
        'desc' => "Vous recevrez un processus complet expliqué étape par étape pour nous donner l’accès à votre boutique.",
        'chips' => ['Accès à la boutique', 'Processus complet'],
        'rotate' => '-1.5deg',
      ],
      [
        'num' => '02',
        'titre' => 'Création de votre boutique',
        'desc' => "Le design, la structure et le contenu de votre boutique sont conçus en une semaine, avec un suivi en temps réel de l'avancement.",
        'chips' => ['7 jours chrono', 'Suivi en direct'],
        'rotate' => '1deg',
      ],
      [
        'num' => '03',
        'titre' => 'Livraison, prête à vendre',
        'desc' => "Vous recevez votre boutique prête à 100% : design finalisé, structure complète, fiches produits, fournisseurs — votre boutique est opérationnelle dès réception.",
        'chips' => ['Boutique Shopify', 'Prête à l\'emploi'],
        'rotate' => '-1deg',
      ],
    ];
  @endphp

  <div class="stack-container relative mx-auto mt-16 max-w-2xl px-4 sm:px-6" style="height: {{ count($etapes) * 60 + 100 }}vh;">
    @foreach ($etapes as $i => $etape)
      <div class="stack-card-wrapper sticky" style="top: {{ 120 + $i * 24 }}px;">
        <div
          class="stack-card reveal relative overflow-hidden rounded-3xl border border-[var(--color-border)] bg-[var(--color-card)] p-8 shadow-[0_30px_70px_-25px_rgba(0,0,0,0.25)] sm:p-10"
          style="transform: rotate({{ $etape['rotate'] }});"
        >
          {{-- Chiffre géant en filigrane --}}
          <span class="font-display pointer-events-none absolute -right-4 -top-8 select-none text-[160px] font-bold leading-none opacity-[0.05] sm:text-[200px]">
            {{ $etape['num'] }}
          </span>

          <div class="relative z-10">
            <span class="inline-flex h-11 w-11 items-center justify-center rounded-2xl text-[15px] font-bold text-white" style="background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));">
              {{ $etape['num'] }}
            </span>

            <h3 class="tracking-tight-body mt-6 text-[22px] font-semibold text-[var(--color-foreground)] sm:text-[26px]">
              {{ $etape['titre'] }}
            </h3>
            <p class="tracking-tight-body mt-3 max-w-md text-[15px] leading-[1.7] text-[var(--color-foreground-secondary)]">
              {{ $etape['desc'] }}
            </p>

            <div class="mt-6 flex flex-wrap gap-2 border-t border-[var(--color-border)] pt-6">
              @foreach ($etape['chips'] as $chip)
                <span class="rounded-full px-3 py-1.5 text-[12px] font-medium text-[var(--color-foreground-secondary)]" style="background: var(--color-accent);">
                  {{ $chip }}
                </span>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <div class="reveal mt-14 flex justify-center px-4">
    
    <a  href="https://calendly.com/ulrichcevanie/30min"
      target="_blank"
      rel="noopener noreferrer"
      class="group flex items-center gap-1.5 rounded-full bg-[var(--color-primary)] px-7 py-[15px] text-[14.5px] font-semibold text-white transition-all duration-300 hover:shadow-[0_10px_30px_-6px_rgba(21,128,61,0.45)]"
    >
      Démarrer mon projet
      <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <path d="M5 12h14M12 5l7 7-7 7"/>
      </svg>
    </a>
  </div>
</section>