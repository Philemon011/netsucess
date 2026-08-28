<section id="temoignages" class="relative py-24 sm:py-32">
  <div class="mx-auto max-w-6xl px-4 sm:px-6">

    {{-- En-tête --}}
    <div class="reveal mx-auto max-w-2xl text-center">
      <div class="mx-auto mb-5 inline-flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)]">
        <span class="h-1.5 w-1.5 rounded-full bg-[var(--color-primary)]"></span>
        Ils ont reçu leur boutique
      </div>
      <h2 class="text-gradient-dark font-display tracking-tight-hero text-[32px] font-semibold leading-[1.12] sm:text-[44px]">
        Voici leurs retours
      </h2>
    </div>

    {{-- Grille en mosaïque --}}
    <div class="mt-16 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">

      @php
        $temoignages = [
          [
            'nom' => 'ElisT',
            'photo' => 'ElisT.jpg',
            'texte' => "Très satisfait du travail de Netsucess ! Le site est moderne, clair et bien pensé. Ils ont été à l’écoute de mes besoins et réactifs à chaque demande. Travail sérieux, créatif et professionnel. Je recommande vivement Netsucess à toute personne qui souhaite un site de qualité.",
            'featured' => true,
          ],
          [
            'nom' => 'TBBC',
            'photo' => 'TBBC.jpg',
            'texte' => "Un rapport qualité-prix irréprochable ! Il a su écouter et comprendre le projet que je lui avais confié. Il n’a pas hésité à donner de son temps et à partager ses connaissances pour peaufiner le travail jusqu’à la dernière seconde. Je suis pleinement satisfait de son professionnalisme et de la qualité de son travail. Je recommande vivement !",
            'featured' => false,
          ],
          [
            'nom' => 'Ketfreeman',
            'photo' => 'Ketfreeman.jpg',
            'texte' => "Excellent travail, toujours à l’écoute et toujours présent lorsqu’on a besoin. Pour ma première boutique, c’était un bon choix.",
            'featured' => false,
          ],
        ];
      @endphp

      @foreach ($temoignages as $i => $t)
        <div class="reveal relative flex flex-col rounded-3xl p-7 sm:p-8 {{ $t['featured'] ? 'text-white sm:col-span-2' : 'border border-[var(--color-border)] bg-[var(--color-card)]' }}" @if($t['featured']) style="background: linear-gradient(160deg, var(--color-dark-surface-2), var(--color-dark-surface));" @endif>

          <svg class="h-7 w-7" style="color: {{ $t['featured'] ? 'rgba(255,255,255,0.15)' : 'var(--color-accent)' }};" viewBox="0 0 24 24" fill="currentColor">
            <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.57-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"/>
          </svg>

          <div class="mt-4 flex items-center gap-0.5">
            @for ($j = 0; $j < 5; $j++)
              <svg class="h-3.5 w-3.5" style="color: var(--color-gold);" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            @endfor
          </div>

          <p class="tracking-tight-body mt-4 text-[15.5px] leading-[1.65] {{ $t['featured'] ? 'text-white/85' : 'text-[var(--color-foreground-secondary)]' }} sm:text-[16px]">
            {{ $t['texte'] }}
          </p>

          <div class="mt-6 flex items-center gap-3">
            <img
              src="{{ asset('images/avis/' . $t['photo']) }}"
              alt="{{ $t['nom'] }}"
              class="h-10 w-10 shrink-0 rounded-full border object-cover"
              style="border-color: {{ $t['featured'] ? 'rgba(255,255,255,0.2)' : 'var(--color-border)' }};"
              loading="lazy"
            >
            <div>
              <p class="text-[13.5px] font-semibold {{ $t['featured'] ? 'text-white' : 'text-[var(--color-foreground)]' }}">{{ $t['nom'] }}</p>
              <p class="text-[12px] {{ $t['featured'] ? 'text-white/50' : 'text-[var(--color-foreground-muted)]' }}">Client Netsucess</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>