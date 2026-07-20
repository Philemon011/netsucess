<section id="resultats" class="relative overflow-hidden py-24 sm:py-32">
  <div class="mx-auto mb-14 max-w-2xl px-4 text-center sm:px-6">
    <div class="reveal mx-auto mb-5 inline-flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)]">
      <span class="h-1.5 w-1.5 rounded-full bg-[var(--color-primary)]"></span>
      Votre marque commence ici
    </div>
    <h2 class="reveal text-gradient-dark font-display tracking-tight-hero text-[32px] font-semibold leading-[1.12] sm:text-[44px]">
      Voici les résultats obtenus par nos clients
    </h2>
  </div>

  @php
    $ligne1 = [
      ['nom' => 'Wail', 'photo' => 'wail.jpg', 'texte' => "Plus de 20 000€ en 9 mois, en partant de zéro. Avec un site bien optimisé, tout a changé. Une vraie transformation."],
      ['nom' => 'Arthur', 'photo' => 'arthur.jpg', 'texte' => "Il est super sincère et ne vend pas de rêve. Concernant le site et les stratégies, c'est plus que complet."],
      ['nom' => 'Léa', 'photo' => 'lea.jpg', 'texte' => "Super contente du résultat ! Le site est magnifique et facile à utiliser. Premières ventes en moins d'une semaine."],
      ['nom' => 'Maxime', 'photo' => 'maxime.jpg', 'texte' => "J'étais bloqué avec mon ancien site, aucune conversion. Dès les premiers jours, j'ai enfin vu des ventes tomber."],
    ];
    $ligne2 = [
      ['nom' => 'Kenza', 'photo' => 'kenza.jpg', 'texte' => "Mon site est pro, facile à utiliser et mes clients l'adorent. Si vous cherchez quelqu'un de fiable, foncez."],
      ['nom' => 'Dimitry', 'photo' => 'dimitry.jpg', 'texte' => "Merci pour le travail fourni ! Le site me convient parfaitement, livré rapidement et sans accroc."],
      ['nom' => 'Julien', 'photo' => 'julien.jpg', 'texte' => "Plus que complet, rien à redire. Il sait exactement ce qu'il fait, du début à la fin du projet."],
      ['nom' => 'Aïcha', 'photo' => 'aicha.jpg', 'texte' => "Un travail sérieux et rapide. Ma boutique a été livrée avant les délais annoncés, avec un design impeccable."],
    ];
    $ligne1Double = array_merge($ligne1, $ligne1);
    $ligne2Double = array_merge($ligne2, $ligne2);
  @endphp

  {{-- Ligne 1 — défile vers la gauche --}}
  <div class="reveal mb-4 overflow-hidden">
    <div class="resultats-marquee-left flex w-max gap-4 px-2">
      @foreach ($ligne1Double as $item)
        <div class="w-[320px] shrink-0 rounded-2xl border border-[var(--color-border)] bg-[var(--color-card)] p-5">
          <div class="flex items-center gap-3">
            <img src="{{ asset('images/avis/' . $item['photo']) }}" alt="{{ $item['nom'] }}" class="h-10 w-10 shrink-0 rounded-full border border-[var(--color-border)] object-cover" loading="lazy">
            <div>
              <p class="text-[14px] font-semibold text-[var(--color-foreground)]">{{ $item['nom'] }}</p>
              <p class="text-[11.5px] text-[var(--color-foreground-muted)]">Client Netsucess</p>
            </div>
          </div>
          <div class="mt-3 flex items-center gap-0.5">
            @for ($i = 0; $i < 5; $i++)
              <svg class="h-3 w-3 text-[var(--color-gold)]" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            @endfor
          </div>
          <p class="tracking-tight-body mt-2.5 text-[13.5px] leading-[1.6] text-[var(--color-foreground-secondary)]">{{ $item['texte'] }}</p>
        </div>
      @endforeach
    </div>
  </div>

  {{-- Ligne 2 — défile vers la droite --}}
  <div class="reveal overflow-hidden">
    <div class="resultats-marquee-right flex w-max gap-4 px-2">
      @foreach ($ligne2Double as $item)
        <div class="w-[320px] shrink-0 rounded-2xl border border-[var(--color-border)] bg-[var(--color-card)] p-5">
          <div class="flex items-center gap-3">
            <img src="{{ asset('images/avis/' . $item['photo']) }}" alt="{{ $item['nom'] }}" class="h-10 w-10 shrink-0 rounded-full border border-[var(--color-border)] object-cover" loading="lazy">
            <div>
              <p class="text-[14px] font-semibold text-[var(--color-foreground)]">{{ $item['nom'] }}</p>
              <p class="text-[11.5px] text-[var(--color-foreground-muted)]">Client Netsucess</p>
            </div>
          </div>
          <div class="mt-3 flex items-center gap-0.5">
            @for ($i = 0; $i < 5; $i++)
              <svg class="h-3 w-3 text-[var(--color-gold)]" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            @endfor
          </div>
          <p class="tracking-tight-body mt-2.5 text-[13.5px] leading-[1.6] text-[var(--color-foreground-secondary)]">{{ $item['texte'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>