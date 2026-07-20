<section class="relative overflow-hidden py-24 sm:py-32">

  {{-- Texte géant défilant en fond --}}
  <div class="pointer-events-none absolute inset-0 flex items-center overflow-hidden opacity-[0.05]">
    <div class="cta-marquee-text flex w-max items-center gap-8 whitespace-nowrap">
      @for ($i = 0; $i < 6; $i++)
        <span class="font-display text-[140px] font-bold leading-none sm:text-[220px]" style="color: var(--color-foreground);">
          VENDEZ&nbsp;·&nbsp;VENDEZ&nbsp;·&nbsp;VENDEZ&nbsp;·
        </span>
      @endfor
    </div>
  </div>

  {{-- Glow --}}
  <div class="pointer-events-none absolute left-1/2 top-1/2 -z-10 h-[420px] w-[600px] -translate-x-1/2 -translate-y-1/2 rounded-full opacity-[0.1]" style="background: radial-gradient(circle, var(--color-primary), transparent 70%); filter: blur(120px);"></div>

  <div class="relative mx-auto max-w-3xl px-4 sm:px-6">
    <div class="reveal relative overflow-hidden rounded-[32px] border border-[var(--color-border)] p-10 text-center shadow-[0_40px_100px_-30px_rgba(0,0,0,0.3)] sm:p-16" style="background: linear-gradient(165deg, var(--color-dark-surface-2), var(--color-dark-surface));">

      {{-- Glow interne --}}
      <div class="pointer-events-none absolute -top-32 left-1/2 h-64 w-64 -translate-x-1/2 rounded-full opacity-30" style="background: radial-gradient(circle, var(--color-primary), transparent 70%); filter: blur(80px);"></div>

      <div class="relative">
        <div class="mx-auto mb-6 inline-flex items-center gap-2 rounded-full border px-4 py-[7px] text-[13px] font-medium text-white/80" style="border-color: rgba(255,255,255,0.15); background: rgba(255,255,255,0.06);">
          <span class="flex items-center gap-0.5">
            @for ($i = 0; $i < 5; $i++)
              <svg class="h-3.5 w-3.5" style="color: var(--color-gold);" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            @endfor
          </span>
          4.8 de satisfaction client
        </div>

        <h2 class="font-display tracking-tight-hero text-[32px] font-semibold leading-[1.1] text-white sm:text-[46px]">
          Votre boutique prête à vendre, livrée en 7 jours
        </h2>
        <p class="tracking-tight-body mx-auto mt-5 max-w-md text-[16px] leading-[1.65] text-white/70">
          Design premium, structure optimisée, contenu déjà pensé pour convertir. Parlons de votre projet.
        </p>

        <div class="mt-9 flex flex-col items-center justify-center gap-3 sm:flex-row">
          
         <a   href="https://calendly.com/ulrichcevanie/30min"
    target="_blank"
    rel="noopener noreferrer"
    class="btn-cta group flex w-full items-center justify-center gap-1.5 rounded-full px-7 py-[15px] text-[14.5px] font-semibold text-white transition-all duration-300 hover:shadow-[0_10px_30px_-6px_rgba(74,222,128,0.5)] sm:w-auto"
    style="background: linear-gradient(90deg, var(--color-primary), var(--color-secondary));"
  >
    <span class="shine"></span>
    <span class="relative z-10 flex items-center gap-1.5">
      Réserver un appel
      <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <path d="M5 12h14M12 5l7 7-7 7"/>
      </svg>
    </span>
  </a>
          
          <a  href="#realisations"
            class="flex w-full items-center justify-center gap-1.5 rounded-full border px-7 py-[15px] text-[14.5px] font-semibold text-white transition-all duration-300 sm:w-auto"
            style="border-color: rgba(255,255,255,0.15);"
          >
            Voir nos réalisations
          </a>
        </div>

        <p class="mt-6 text-[13px] text-white/40">
          Sans engagement&nbsp;&nbsp;·&nbsp;&nbsp;Appel de 30 minutes&nbsp;&nbsp;·&nbsp;&nbsp;Réponse sous 24h
        </p>
      </div>
    </div>
  </div>
</section>