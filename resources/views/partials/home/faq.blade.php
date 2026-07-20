<section id="faq" class="relative py-24 sm:py-32">
  <div class="mx-auto max-w-2xl px-4 sm:px-6">

    {{-- En-tête --}}
    <div class="reveal mx-auto max-w-xl text-center">
      <div class="mx-auto mb-5 inline-flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)]">
        <span class="h-1.5 w-1.5 rounded-full bg-[var(--color-primary)]"></span>
        Nos questions fréquentes
      </div>
      <h2 class="text-gradient-dark font-display tracking-tight-hero text-[32px] font-semibold leading-[1.12] sm:text-[44px]">
        Comme si vous nous posiez la question
      </h2>
      <p class="tracking-tight-body mx-auto mt-5 max-w-md text-[16px] leading-[1.65] text-[var(--color-foreground-secondary)]">
        Voici comment on vous répondrait, en vrai. Une autre question ? Écrivez-nous sur WhatsApp.
      </p>
    </div>

    {{-- Fil de conversation --}}
    <div class="mt-16 flex flex-col gap-6">

      @php
        $conversation = [
          [
            'question' => "Ai-je besoin d'expérience pour commencer ?",
            'reponse' => "Aucune. Vous recevez une boutique déjà opérationnelle — design, structure et contenu sont livrés prêts à l'emploi, sans réglage technique de votre côté.",
          ],
          [
            'question' => "Puis-je choisir la niche qui m'intéresse ?",
            'reponse' => "Bien sûr. Vous choisissez le secteur et les produits qui vous parlent. Si vous hésitez, on peut vous orienter vers des niches porteuses selon votre marché.",
          ],
          [
            'question' => "Comment je récupère ma boutique après une semaine ?",
            'reponse' => "Dès que tout est prêt, vous recevez vos identifiants par e-mail, avec l'ensemble des accès nécessaires pour prendre la main immédiatement.",
          ],
          [
            'question' => "Est-ce que je garde le contrôle total du site ?",
            'reponse' => "Oui, entièrement. Une fois livrée, la boutique vous appartient à 100% — vous en avez le contrôle complet, sans dépendance envers nous.",
          ],
          [
            'question' => "Combien de temps avant mes premières ventes ?",
            'reponse' => "Ça dépend surtout de vous et de votre trafic. Votre boutique est construite pour convertir dès le premier visiteur — certains clients vendent dès les premiers jours.",
          ],
        ];
      @endphp

      @foreach ($conversation as $i => $item)
        <div class="reveal flex flex-col gap-3">

          {{-- Bulle question (visiteur) --}}
          <div class="flex justify-end">
            <div class="max-w-[85%] rounded-2xl rounded-tr-md bg-[var(--color-card)] border border-[var(--color-border)] px-5 py-3.5 sm:max-w-[75%]">
              <p class="tracking-tight-body text-[14.5px] font-medium leading-[1.5] text-[var(--color-foreground)]">
                {{ $item['question'] }}
              </p>
            </div>
          </div>

          {{-- Bulle réponse (Netsucess) --}}
          <div class="flex items-start gap-2.5">
            <span class="mt-1 flex h-7 w-7 shrink-0 items-center justify-center rounded-full text-[10px] font-bold text-white" style="background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));">
              N
            </span>
            <div class="max-w-[85%] rounded-2xl rounded-tl-md px-5 py-3.5 text-white sm:max-w-[75%]" style="background: linear-gradient(160deg, var(--color-dark-surface-2), var(--color-dark-surface));">
              <p class="tracking-tight-body text-[14.5px] leading-[1.6] text-white/90">
                {{ $item['reponse'] }}
              </p>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    {{-- CTA WhatsApp --}}
    <div class="reveal mt-14 flex justify-center">
      
     <a   href="https://wa.me/2290197773145"
        target="_blank"
        rel="noopener noreferrer"
        class="group flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-6 py-3.5 text-[14px] font-semibold text-[var(--color-foreground)] transition-all duration-300 hover:border-[var(--color-primary)]/30 hover:bg-[var(--color-accent)]"
      >
        <svg class="h-4 w-4" style="color: var(--color-primary);" viewBox="0 0 24 24" fill="currentColor">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
        Poser une autre question
      </a>
    </div>
  </div>
</section>