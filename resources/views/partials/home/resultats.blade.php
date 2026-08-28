<section id="resultats" class="relative overflow-hidden py-24 sm:py-32">
  <div class="mx-auto mb-14 max-w-2xl px-4 text-center sm:px-6">
    <div class="reveal mx-auto mb-5 inline-flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)]">
      <span class="h-1.5 w-1.5 rounded-full bg-[var(--color-primary)]"></span>
      Votre marque commence ici
    </div>
    <h2 class="reveal text-gradient-dark font-display tracking-tight-hero text-[32px] font-semibold leading-[1.12] sm:text-[44px]">
      Ils ont reçu leur boutique Voici leurs retours
    </h2>
  </div>

  @php
    $ligne1 = [
      ['nom' => 'ElisT', 'photo' => 'ElisT.jpg', 'texte' => "Très satisfait du travail de Netsucess ! Le site est moderne, clair et bien pensé. Ils ont été à l’écoute de mes besoins et réactifs à chaque demande. Travail sérieux, créatif et professionnel. Je recommande vivement Netsucess à toute personne qui souhaite un site de qualité."],
      ['nom' => 'TBBC', 'photo' => 'TBBC.jpg', 'texte' => "Un rapport qualité-prix irréprochable ! Il a su écouter et comprendre le projet que je lui avais confié. Il n’a pas hésité à donner de son temps et à partager ses connaissances pour peaufiner le travail jusqu’à la dernière seconde. Je suis pleinement satisfait de son professionnalisme et de la qualité de son travail. Je recommande vivement"],
      ['nom' => 'Sylvain', 'photo' => 'Sylvain.jpg', 'texte' => "Je suis satisfait de ma première expérience avec Netsucess. Ils ont pris le temps de comprendre mes besoins. Équipe professionnelle et réactive. Je n'hésiterai pas à repasser commande."],
      ['nom' => 'AmeliaMartinsBarbo', 'photo' => 'AmeliaMartinsBarbo.jpg', 'texte' => "Une expérience parfaite. Un professionnel disponible, à l'écoute, arrangeant et rapide. C'était vraiment une expérience au top car il était disponible avant la commande: se mettre d'accord sur la commande, ce qui est le plus adapté (outre aspect financier), des appels récurrents selon mes disponibilités pour se tenir au courant. Et après commande: si il y a un problème envie d'une petite modification etc etc. Très poli, courtois et bienveillant. Je recommande fortement. Merci à vous pour cette belle rencontre !"],
      ['nom' => 'MomoMoise', 'photo' => 'MomoMoise.png', 'texte' => "Un travail impeccable ! Je suis vraiment impressionné par le travail de Netsucess. Il a su créer un site professionnel et élégant qui reflète parfaitement le projet. Sa rigueur et son attention aux détails sont évidentes dans chaque aspect du projet. Netsucess est une personne passionnée, toujours à l'écoute de ses clients, et s'investit pleinement pour livrer un résultat de qualité. Je peux que la recommander pour son sérieux et son engagement dans son travail. Un grand merci pour ce superbe résultat !"],
    ];
    $ligne2 = [
      ['nom' => 'Escapewine', 'photo' => 'escapewine.jpg', 'texte' => "Un travail professionnel de très très bonne qualité. Le site a été livré dans les délais avec toutes les modifications que j'ai demandées. Je recommande cette agence à 500%. Merci encore pour ce magnifique travail."],
      ['nom' => 'Ketfreeman', 'photo' => 'Ketfreeman.jpg', 'texte' => "Excellent travail, toujours à l’écoute et toujours présent lorsqu’on a besoin. Pour ma première boutique, c’était un bon choix."],
      ['nom' => 'Le Prestige', 'photo' => 'Le_Prestige.png', 'texte' => "Je suis vraiment satisfait du site e-commerce que Netsucess a conçu pour moi. Le design est à la fois moderne et élégant, très bien adapté à mes besoins avec toutes les fonctionnalités requises. Je recommande vivement leurs services pour tout projet web"],
      ['nom' => 'GillesBarrue', 'photo' => 'GillesBarrue.png', 'texte' => "Travail de qualité, personne très réactive et en recherche permanente pour satisfaire le client tout au long du processus. Le résultat est parfait, je recommande ce prestataire."],
      ['nom' => 'Lucie', 'photo' => 'Lucie.png', 'texte' => "Travail incroyable !!!!! Très actif , toujours disponible pour échanger vraiment je recommande à 2000 % ."],
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