<section id="realisations" class="relative py-24 sm:py-32">
  <div class="mx-auto max-w-6xl px-4 sm:px-6">

    {{-- En-tête de section --}}
    <div class="reveal mx-auto max-w-2xl text-center">
      <div
        class="mx-auto mb-5 inline-flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)]">
        <span class="h-1.5 w-1.5 rounded-full bg-[var(--color-primary)]"></span>
        Les grandes marques se différencient
      </div>
      <h2
        class="text-gradient-dark font-display tracking-tight-hero text-[32px] font-semibold leading-[1.12] sm:text-[44px]">
        Découvrez nos dernières réalisations
      </h2>
      <p
        class="tracking-tight-body mx-auto mt-5 max-w-md text-[16px] leading-[1.65] text-[var(--color-foreground-secondary)]">
        Pour transformer vos visiteurs en clients, votre boutique doit inspirer confiance et se démarquer de vos
        concurrents.
      </p>
    </div>

    {{-- Grille de réalisations --}}
    <div class="mt-16 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

      @php
        $realisations = [
          [
            'nom' => 'Ludossori',
            'niche' => 'Jouets éducatifs',
            'desc' => "Marque spécialisée dans les jouets éducatifs Montessori pour enfants, conçus pour améliorer leur concentration.",
            'image' => 'https://images.unsplash.com/photo-1560421683-6856ea585c78?w=800&h=1200&fit=crop&q=80',
            'url' => 'https://exemple-ludossori.myshopify.com',
          ],
          [
            'nom' => 'Dimax',
            'niche' => 'Maillots de sport',
            'desc' => "Marque spécialisée dans les maillots de football, qu'ils soient récents ou collectors.",
            'image' => 'https://images.unsplash.com/photo-1517466787929-bc90951d0974?w=800&h=1200&fit=crop&q=80',
            'url' => null,
          ],
          [
            'nom' => 'Oriwa',
            'niche' => 'Cosmétique naturelle',
            'desc' => "Marque spécialisée dans la cosmétique naturelle — des produits pour améliorer son apparence au quotidien.",
            'image' => 'https://images.unsplash.com/photo-1571781926291-c477ebfd024b?w=800&h=1200&fit=crop&q=80',
            'url' => null,
          ],
        ];
      @endphp

      @foreach ($realisations as $i => $r)
        <button type="button"
          class="realisation-trigger reveal group relative overflow-hidden rounded-2xl border border-[var(--color-border)] bg-[var(--color-card)] text-left transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_30px_60px_-25px_rgba(0,0,0,0.25)]"
          style="transition-delay: {{ $i * 80 }}ms;" data-nom="{{ $r['nom'] }}" data-niche="{{ $r['niche'] }}"
          data-desc="{{ $r['desc'] }}" data-image="{{ $r['image'] }}" data-url="{{ $r['url'] ?? '' }}">
          {{-- Fenêtre navigateur --}}
          <div class="relative aspect-[4/3] overflow-hidden bg-[var(--color-background)]">
            <div
              class="absolute left-0 right-0 top-0 z-10 flex items-center gap-1.5 border-b border-[var(--color-border)] bg-[var(--color-card)]/90 px-3 py-2 backdrop-blur-sm">
              <span class="h-2 w-2 rounded-full" style="background:#ff5f57;"></span>
              <span class="h-2 w-2 rounded-full" style="background:#febc2e;"></span>
              <span class="h-2 w-2 rounded-full" style="background:#28c840;"></span>
              <span
                class="ml-2 truncate rounded bg-[var(--color-background)] px-2 py-0.5 text-[9.5px] text-[var(--color-foreground-secondary)]">
                {{ strtolower($r['nom']) }}.myshopify.com
              </span>
            </div>

            <img src="{{ $r['image'] }}" alt="{{ $r['nom'] }}"
              class="h-full w-full translate-y-0 object-cover object-top transition-transform duration-[1200ms] ease-out group-hover:-translate-y-6"
              loading="lazy">

            <div
              class="pointer-events-none absolute inset-0 flex items-end bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 transition-opacity duration-500 group-hover:opacity-100">
              <span
                class="m-4 inline-flex items-center gap-1.5 rounded-full bg-white px-4 py-2 text-[12.5px] font-semibold shadow-lg"
                style="color: var(--color-dark-surface);">
                Découvrir
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M7 17L17 7M7 7h10v10" />
                </svg>
              </span>
            </div>
          </div>

          <div class="p-5">
            <div class="flex items-center justify-between gap-3">
              <h3 class="tracking-tight-body text-[16px] font-semibold text-[var(--color-foreground)]">{{ $r['nom'] }}
              </h3>
              <span
                class="shrink-0 rounded-full border border-[var(--color-border)] px-2.5 py-1 text-[10.5px] font-medium text-[var(--color-foreground-secondary)]">{{ $r['niche'] }}</span>
            </div>
            <p class="tracking-tight-body mt-2 text-[13.5px] leading-[1.55] text-[var(--color-foreground-secondary)]">
              {{ $r['desc'] }}
            </p>
          </div>
        </button>
      @endforeach
    </div>

    {{-- CTA --}}
    <div class="reveal mt-14 flex justify-center">

      <a href="https://calendly.com/ulrichcevanie/30min" target="_blank" rel="noopener noreferrer"
        class="group flex items-center gap-1.5 rounded-full bg-[var(--color-primary)] px-7 py-[15px] text-[14.5px] font-semibold text-white transition-all duration-300 hover:shadow-[0_10px_30px_-6px_rgba(21,128,61,0.45)]">
        Réserver un appel
        <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M5 12h14M12 5l7 7-7 7" />
        </svg>
      </a>
    </div>
  </div>
</section>

{{-- Modale de réalisation --}}
<div id="realisationModal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
  <div id="realisationOverlay" class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

  <div
    class="relative w-full max-w-md overflow-hidden rounded-2xl border border-[var(--color-border)] bg-[var(--color-card)] shadow-2xl">
    <button id="realisationClose" type="button" aria-label="Fermer"
      class="absolute right-3 top-3 z-10 flex h-8 w-8 items-center justify-center rounded-full bg-[var(--color-card)]/90 text-[var(--color-foreground)] shadow-md backdrop-blur-sm">
      <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
        stroke-linecap="round">
        <line x1="6" y1="6" x2="18" y2="18" />
        <line x1="6" y1="18" x2="18" y2="6" />
      </svg>
    </button>

    <div class="aspect-[16/10] w-full overflow-hidden bg-[var(--color-background)]">
      <img id="modalImage" src="" alt="" class="h-full w-full object-cover object-top">
    </div>

    <div class="p-6">
      <div class="flex items-center justify-between gap-3">
        <h3 id="modalNom" class="tracking-tight-body text-[19px] font-semibold text-[var(--color-foreground)]"></h3>
        <span id="modalNiche"
          class="shrink-0 rounded-full border border-[var(--color-border)] px-2.5 py-1 text-[10.5px] font-medium text-[var(--color-foreground-secondary)]"></span>
      </div>
      <p id="modalDesc"
        class="tracking-tight-body mt-2.5 text-[14px] leading-[1.6] text-[var(--color-foreground-secondary)]"></p>

      <div class="mt-6 flex flex-col gap-2.5">

        <a id="modalVoirLeSite" href="#" target="_blank" rel="noopener noreferrer"
          class="flex items-center justify-center gap-1.5 rounded-full border border-[var(--color-border)] bg-[var(--color-background)] px-5 py-3 text-[13.5px] font-semibold text-[var(--color-foreground)] transition-colors duration-300 hover:border-[var(--color-primary)]/30 hover:bg-[var(--color-accent)]">
          Voir le projet
          <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M7 17L17 7M7 7h10v10" />
          </svg>
        </a>

        <a href="https://calendly.com/ulrichcevanie/30min" target="_blank" rel="noopener noreferrer"
          class="btn-cta flex items-center justify-center gap-1.5 rounded-full bg-[var(--color-primary)] px-5 py-3 text-[13.5px] font-semibold text-white transition-all duration-300 hover:shadow-[0_10px_25px_-8px_rgba(21,128,61,0.5)]">
          <span class="shine"></span>
          <span class="relative z-10">Commander un projet similaire</span>
        </a>
      </div>
    </div>
  </div>
</div>

<script>
  (function () {
    const modal = document.getElementById('realisationModal');
    const overlay = document.getElementById('realisationOverlay');
    const closeBtn = document.getElementById('realisationClose');
    const modalImage = document.getElementById('modalImage');
    const modalNom = document.getElementById('modalNom');
    const modalNiche = document.getElementById('modalNiche');
    const modalDesc = document.getElementById('modalDesc');
    const modalVoirLeSite = document.getElementById('modalVoirLeSite');

    function openModal(data) {
      modalImage.src = data.image;
      modalImage.alt = data.nom;
      modalNom.textContent = data.nom;
      modalNiche.textContent = data.niche;
      modalDesc.textContent = data.desc;

      if (data.url && data.url.trim() !== '') {
        modalVoirLeSite.href = data.url;
        modalVoirLeSite.classList.remove('hidden');
      } else {
        modalVoirLeSite.classList.add('hidden');
      }

      modal.classList.remove('hidden');
      modal.classList.add('flex');
      document.body.style.overflow = 'hidden';
    }

    function closeModal() {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
      document.body.style.overflow = '';
    }

    document.querySelectorAll('.realisation-trigger').forEach((el) => {
      el.addEventListener('click', () => {
        openModal({
          nom: el.dataset.nom,
          niche: el.dataset.niche,
          desc: el.dataset.desc,
          image: el.dataset.image,
          url: el.dataset.url,
        });
      });
    });

    overlay.addEventListener('click', closeModal);
    closeBtn.addEventListener('click', closeModal);
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeModal();
    });
  })();
</script>