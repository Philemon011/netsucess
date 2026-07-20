@if($recentPosts->count() > 0)
<section id="blog-preview" class="relative py-24 sm:py-32">
  <div class="mx-auto max-w-6xl px-4 sm:px-6">

    {{-- En-tête --}}
    <div class="reveal mx-auto max-w-2xl text-center">
      <div class="mx-auto mb-5 inline-flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)]">
        <span class="h-1.5 w-1.5 rounded-full bg-[var(--color-primary)]"></span>
        Notre blog
      </div>
      <h2 class="text-gradient-dark font-display tracking-tight-hero text-[32px] font-semibold leading-[1.12] sm:text-[44px]">
        Conseils & stratégies e-commerce
      </h2>
      <p class="tracking-tight-body mx-auto mt-5 max-w-md text-[16px] leading-[1.65] text-[var(--color-foreground-secondary)]">
        Des articles pour vous aider à développer votre boutique et booster vos ventes.
      </p>
    </div>

    @php
      $articleVedette = $recentPosts->first();
      $autresArticles = $recentPosts->skip(1)->take(4);
    @endphp

    <div class="mt-16 grid grid-cols-1 gap-6 lg:grid-cols-[1.3fr_1fr]">

      {{-- Article vedette --}}
      @if ($articleVedette)
        <a href="{{ route('blog.show', $articleVedette->slug) }}" class="reveal group relative flex flex-col overflow-hidden rounded-3xl border border-[var(--color-border)] bg-[var(--color-card)]">
          <div class="relative aspect-[16/10] overflow-hidden bg-[var(--color-background)]">
            @if ($articleVedette->featured_image)
              <img src="{{ Storage::url($articleVedette->featured_image) }}" alt="{{ $articleVedette->title }}" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
            @else
              <div class="flex h-full w-full items-center justify-center" style="background: linear-gradient(135deg, var(--color-accent), var(--color-border));">
                <svg class="h-10 w-10" style="color: var(--color-primary); opacity: 0.4;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
              </div>
            @endif
            <span class="absolute left-4 top-4 rounded-full px-3 py-1.5 text-[11px] font-semibold text-white" style="background: var(--color-primary);">
              Dernier article
            </span>
          </div>
          <div class="flex flex-1 flex-col p-6 sm:p-7">
            @if ($articleVedette->category)
              <p class="text-[11px] font-semibold uppercase tracking-[0.08em]" style="color: var(--color-primary);">{{ $articleVedette->category->name }}</p>
            @endif
            <h3 class="tracking-tight-body mt-2 text-[20px] font-semibold leading-[1.3] text-[var(--color-foreground)] sm:text-[22px]">
              {{ $articleVedette->title }}
            </h3>
            <p class="tracking-tight-body mt-2.5 text-[14px] leading-[1.6] text-[var(--color-foreground-secondary)]">
              {{ $articleVedette->excerpt }}
            </p>
            <div class="mt-auto flex items-center justify-between pt-6">
              <span class="text-[12.5px] text-[var(--color-foreground-muted)]">{{ $articleVedette->published_at->format('d M Y') }}</span>
              <span class="flex items-center gap-1.5 text-[13px] font-semibold" style="color: var(--color-primary);">
                Lire l'article
                <svg class="h-3.5 w-3.5 transition-transform duration-300 group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </span>
            </div>
          </div>
        </a>
      @endif

      {{-- Liste des autres articles --}}
      <div class="reveal flex flex-col divide-y divide-[var(--color-border)] rounded-3xl border border-[var(--color-border)] bg-[var(--color-card)]">
        @forelse ($autresArticles as $i => $post)
          <a href="{{ route('blog.show', $post->slug) }}" class="group flex items-start gap-4 p-5 transition-colors duration-300 hover:bg-[var(--color-accent)]/40">
            <span class="font-display shrink-0 text-[24px] font-semibold leading-none opacity-[0.15]" style="color: var(--color-foreground);">
              {{ str_pad($i + 2, 2, '0', STR_PAD_LEFT) }}
            </span>
            <div class="min-w-0">
              @if ($post->category)
                <p class="text-[10.5px] font-semibold uppercase tracking-[0.06em]" style="color: var(--color-primary);">{{ $post->category->name }}</p>
              @endif
              <h4 class="tracking-tight-body mt-1 text-[14.5px] font-semibold leading-[1.35] text-[var(--color-foreground)] transition-colors duration-300 group-hover:opacity-80">
                {{ $post->title }}
              </h4>
              <p class="mt-1.5 text-[11.5px] text-[var(--color-foreground-muted)]">{{ $post->published_at->format('d M Y') }}</p>
            </div>
          </a>
        @empty
          <div class="p-6 text-center text-[13.5px] text-[var(--color-foreground-secondary)]">
            D'autres articles arrivent bientôt.
          </div>
        @endforelse
      </div>
    </div>

    <div class="reveal mt-12 flex justify-center">
      
     <a   href="{{ route('blog.index') }}"
        class="flex items-center gap-1.5 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-6 py-3 text-[13.5px] font-semibold text-[var(--color-foreground)] transition-all duration-300 hover:border-[var(--color-primary)]/30 hover:bg-[var(--color-accent)]"
      >
        Voir tous les articles
        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>
@endif