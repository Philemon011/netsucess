@extends('layouts.app')

@section('meta_title', 'Blog — Conseils e-commerce & Shopify | Netsucess')
@section('meta_description', 'Des articles concrets pour lancer, développer et faire grandir votre boutique e-commerce.')

@section('content')

{{-- Hero blog --}}
<section class="relative overflow-hidden pb-16 sm:pb-20" style="padding-top: 176px;">
    <div class="pointer-events-none absolute inset-0 -z-10 opacity-[0.5]" style="background-image: radial-gradient(circle, var(--color-border) 1px, transparent 1px); background-size: 28px 28px; mask-image: linear-gradient(to bottom, black, transparent 65%); -webkit-mask-image: linear-gradient(to bottom, black, transparent 65%);"></div>

    <div class="mx-auto max-w-2xl px-4 text-center sm:px-6">
        <div class="reveal mx-auto mb-5 inline-flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)]">
            <span class="h-1.5 w-1.5 rounded-full bg-[var(--color-primary)]"></span>
            Nouveaux articles chaque semaine
        </div>
        <h1 class="reveal text-gradient-dark font-display tracking-tight-hero text-[36px] font-semibold leading-[1.1] sm:text-[52px]">
            Conseils & stratégies e-commerce
        </h1>
        <p class="reveal tracking-tight-body mx-auto mt-5 max-w-md text-[16px] leading-[1.65] text-[var(--color-foreground-secondary)]">
            Des articles concrets pour lancer, développer et faire grandir votre boutique.
        </p>
    </div>
</section>

<section class="pb-24 sm:pb-32">
    <div class="mx-auto max-w-6xl px-4 sm:px-6">

        {{-- Filtres catégories --}}
        @if($categories->count() > 0)
        <div class="reveal mb-14 flex flex-wrap items-center justify-center gap-2">
            <a href="{{ route('blog.index') }}" class="rounded-full border px-4 py-2 text-[13px] font-medium transition-all duration-300 {{ !request('category') ? 'text-white' : 'border-[var(--color-border)] text-[var(--color-foreground-secondary)] hover:bg-[var(--color-accent)]' }}" @if(!request('category')) style="background: var(--color-primary); border-color: var(--color-primary);" @endif>
                Tous
            </a>
            @foreach($categories as $category)
                @if($category->posts_count > 0)
                <a href="{{ route('blog.index') }}?category={{ $category->slug }}"
                   class="rounded-full border px-4 py-2 text-[13px] font-medium transition-all duration-300 {{ request('category') === $category->slug ? 'text-white' : 'border-[var(--color-border)] text-[var(--color-foreground-secondary)] hover:bg-[var(--color-accent)]' }}"
                   @if(request('category') === $category->slug) style="background: var(--color-primary); border-color: var(--color-primary);" @endif>
                    {{ $category->name }}
                    <span class="ml-1 opacity-60">{{ $category->posts_count }}</span>
                </a>
                @endif
            @endforeach
        </div>
        @endif

        {{-- Grille d'articles --}}
        @if($posts->count() > 0)
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($posts as $i => $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="reveal group relative flex flex-col overflow-hidden rounded-2xl border border-[var(--color-border)] bg-[var(--color-card)] transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_30px_60px_-25px_rgba(0,0,0,0.2)]" style="transition-delay: {{ ($i % 3) * 80 }}ms;">

                <div class="relative aspect-[16/10] overflow-hidden bg-[var(--color-background)]">
                    @if($post->featured_image)
                        <img src="{{ Storage::url($post->featured_image) }}"
                             alt="{{ $post->title }}"
                             class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                             loading="lazy">
                    @else
                        <div class="flex h-full w-full items-center justify-center" style="background: linear-gradient(135deg, var(--color-accent), var(--color-border));">
                            <svg class="h-9 w-9" style="color: var(--color-primary); opacity: 0.4;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                        </div>
                    @endif
                </div>

                <div class="flex flex-1 flex-col p-5">
                    @if($post->category)
                    <p class="text-[11px] font-semibold uppercase tracking-[0.06em]" style="color: var(--color-primary);">{{ $post->category->name }}</p>
                    @endif
                    <h2 class="tracking-tight-body mt-2 text-[16px] font-semibold leading-[1.35] text-[var(--color-foreground)]">{{ $post->title }}</h2>
                    @if($post->excerpt)
                    <p class="tracking-tight-body mt-2 flex-1 text-[13.5px] leading-[1.6] text-[var(--color-foreground-secondary)]">{{ Str::limit($post->excerpt, 110) }}</p>
                    @endif
                    <div class="mt-4 flex items-center justify-between border-t border-[var(--color-border)] pt-4">
                        <span class="text-[12px] text-[var(--color-foreground-muted)]">{{ $post->published_at->format('d M Y') }}</span>
                        <span class="flex items-center gap-1 text-[12.5px] font-semibold transition-transform duration-300 group-hover:translate-x-0.5" style="color: var(--color-primary);">
                            Lire
                            <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        {{-- Pagination --}}
        @if($posts->hasPages())
        <div class="reveal mt-16">
            {{ $posts->links('vendor.pagination.netsucess') }}
        </div>
        @endif

        @else
        <div class="reveal flex flex-col items-center justify-center rounded-3xl border border-dashed border-[var(--color-border)] py-24 text-center">
            <span class="flex h-14 w-14 items-center justify-center rounded-full" style="background: var(--color-accent);">
                <svg class="h-6 w-6" style="color: var(--color-primary);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </span>
            <p class="tracking-tight-body mt-5 text-[15px] text-[var(--color-foreground-secondary)]">
                Aucun article publié pour le moment.<br>Revenez bientôt !
            </p>
        </div>
        @endif

    </div>
</section>

@endsection

@section('scripts')
<script>
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>
@endsection