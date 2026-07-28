<section id="hero" class="relative overflow-hidden pb-20 sm:pb-28" style="padding-top: 176px;">

  {{-- Fond — grille de points discrète --}}
  <div class="pointer-events-none absolute inset-0 -z-10 opacity-[0.5]"
    style="background-image: radial-gradient(circle, var(--color-border) 1px, transparent 1px); background-size: 28px 28px; mask-image: linear-gradient(to bottom, black, transparent 65%); -webkit-mask-image: linear-gradient(to bottom, black, transparent 65%);">
  </div>

  <div class="relative mx-auto flex max-w-3xl flex-col items-center px-4 text-center sm:px-6">

    {{-- Badge avis --}}
    <div
      class="reveal mb-6 inline-flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)]">
      <span class="flex items-center gap-0.5">
        @for ($i = 0; $i < 5; $i++)
          <svg class="h-3.5 w-3.5 text-[var(--color-gold)]" viewBox="0 0 20 20" fill="currentColor">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
        @endfor
      </span>
      4.8 de satisfaction client
    </div>

    {{-- Titre --}}
    <h1
      class="reveal text-gradient-animated font-display tracking-tight-hero text-[38px] font-semibold leading-[1.06] sm:text-[58px] lg:text-[68px]">
      Une boutique Shopify
      <br>
      prête à vendre dès le jour 1
    </h1>

    {{-- Sous-titre --}}
    <p
      class="reveal tracking-tight-body mt-6 max-w-lg text-[16.5px] leading-[1.6] text-[var(--color-foreground-secondary)] sm:text-[18px]">
      Nous concevons votre boutique e-commerce premium, livrée clé en main en une semaine — design, structure et
      copywriting déjà pensés pour convertir vos visiteurs en clients.
    </p>

    {{-- Pills de réassurance --}}
{{-- <div class="reveal mt-6 flex flex-col items-center gap-2 sm:flex-row sm:flex-wrap sm:justify-center">
  <span class="inline-flex w-full max-w-[280px] items-center justify-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)] sm:w-auto sm:max-w-none">
    <svg class="h-3.5 w-3.5 shrink-0 text-[var(--color-primary)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/>
      <path d="M3 6h18"/>
      <path d="M16 10a4 4 0 01-8 0"/>
    </svg>
    Boutique prête à vendre
  </span>
  <span class="inline-flex w-full max-w-[280px] items-center justify-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)] sm:w-auto sm:max-w-none">
    <svg class="h-3.5 w-3.5 shrink-0 text-[var(--color-primary)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
      <circle cx="12" cy="12" r="9"/>
      <polyline points="12 7 12 12 15.5 14"/>
    </svg>
    Livrée en 7 jours
  </span>
  <span class="inline-flex w-full max-w-[280px] items-center justify-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)] sm:w-auto sm:max-w-none">
    <svg class="h-3.5 w-3.5 shrink-0 text-[var(--color-primary)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
    </svg>
    Zéro code à toucher
  </span>
</div> --}}

    {{-- CTA --}}
    <div class="reveal mt-9 flex flex-col items-center gap-3 sm:flex-row">

      <a href="https://calendly.com/ulrichcevanie/30min"
  target="_blank"
  rel="noopener noreferrer"
  class="btn-cta group flex items-center gap-1.5 rounded-full bg-[var(--color-primary)] px-7 py-[15px] text-[14.5px] font-semibold text-white transition-all duration-300 hover:shadow-[0_10px_30px_-6px_rgba(21,128,61,0.45)]"
>
  <span class="shine"></span>
  <span class="relative z-10 flex items-center gap-1.5">
    Réserver un appel
    <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
      <path d="M5 12h14M12 5l7 7-7 7"/>
    </svg>
  </span>
</a>

      <a href="#realisations"
        class="flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-7 py-[15px] text-[14.5px] font-semibold text-[var(--color-foreground)] transition-all duration-300 hover:border-[var(--color-primary)]/30 hover:bg-[var(--color-accent)]">
        Voir nos réalisations
      </a>
    </div>

    <p class="reveal mt-5 text-[13px] text-[var(--color-foreground-muted)]">
      Sans engagement&nbsp;&nbsp;·&nbsp;&nbsp;Appel de 30 minutes&nbsp;&nbsp;·&nbsp;&nbsp;Réponse sous 24h
    </p>
  </div>

  {{-- Marquee d'avis clients avec photos --}}
  <div class="reveal mx-auto mt-16 max-w-6xl sm:mt-20">
    <div class="marquee-fade overflow-hidden">
      <div class="hero-marquee flex w-max gap-4 px-2">
        @php
          $avis = [
            ['nom' => 'Wail', 'photo' => 'wail.jpg', 'texte' => "Plus de 20 000€ en 9 mois, en partant de zéro. Une vraie transformation."],
            ['nom' => 'Arthur', 'photo' => 'arthur.jpg', 'texte' => "Très satisfait du travail de Net_Succes ! Le site est moderne, clair et bien pensé. Ils ont été à l’écoute de mes besoins et réactifs à chaque demande. Travail sérieux, créatif et professionnel. Je recommande vivement Net_Succes à toute personne qui souhaite un site de qualité"],
            ['nom' => 'Léa', 'photo' => 'lea.jpg', 'texte' => "Le site est magnifique et facile à utiliser. Premières ventes en une semaine."],
            ['nom' => 'Ketfreeman', 'photo' => 'Ketfreeman.jpg', 'texte' => "Excellent travail, toujours à l’écoute et toujours présent lorsqu’on a besoin. Pour ma première boutique, c’était un bon choix."],
            ['nom' => 'Maxime', 'photo' => 'adama.jpg', 'texte' => "J'étais bloqué avec mon ancien site. Là, des ventes dès les premiers jours."],
            ['nom' => 'Sylvain', 'photo' => 'Sylvain.jpg', 'texte' => "Je suis satisfait de ma première expérience avec Net_succes. Ils ont pris le temps de comprendre mes besoins. Équipe professionnelle et réactive. Je n'hésiterai pas à repasser commande."],
            ['nom' => 'Kenza', 'photo' => 'julie.jpg', 'texte' => "Mon site est pro, facile à utiliser et mes clients l'adorent."],
            ['nom' => 'AmeliaMartinsBarbo', 'photo' => 'AmeliaMartinsBarbo.jpg', 'texte' => "Une expérience parfaite. Un professionnel disponible, à l'écoute, arrangeant et rapide. C'était vraiment une expérience au top car il était disponible avant la commande: se mettre d'accord sur la commande, ce qui est le plus adapté (outre aspect financier), des appels récurrents selon mes disponibilités pour se tenir au courant. Et après commande: si il y a un problème envie d'une petite modification etc etc. Très poli, coustois et bienveillant. Je recommande fortement. Merci à vous pour cette belle rencontre !"],
            ['nom' => 'TBBC', 'photo' => 'T.webp', 'texte' => "Un rapport qualité-prix irréprochable ! Il a su écouter et comprendre le projet que je lui avais confié. Il n’a pas hésité à donner de son temps et à partager ses connaissances pour peaufiner le travail jusqu’à la dernière seconde. Je suis pleinement satisfait de son professionnalisme et de la qualité de son travail. Je recommande vivement !"],
          ];
          $avisDouble = array_merge($avis, $avis);
        @endphp

        @foreach ($avisDouble as $item)
          <div
            class="flex w-[280px] shrink-0 items-start gap-3 rounded-2xl border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-3.5">
            <img src="{{ asset('images/avis/' . $item['photo']) }}" alt="{{ $item['nom'] }}"
              class="h-10 w-10 shrink-0 rounded-full border border-[var(--color-border)] object-cover" loading="lazy">
            <div class="min-w-0 text-left">
              <div class="flex items-center gap-1.5">
                <p class="text-[13px] font-semibold text-[var(--color-foreground)]">{{ $item['nom'] }}</p>
                <span class="flex items-center gap-0.5">
                  @for ($i = 0; $i < 5; $i++)
                    <svg class="h-2.5 w-2.5 text-[var(--color-gold)]" viewBox="0 0 20 20" fill="currentColor">
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                  @endfor
                </span>
              </div>
              <p class="mt-1 line-clamp-2 text-[12px] leading-[1.5] text-[var(--color-foreground-secondary)]">
                {{ $item['texte'] }}
              </p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>