@extends('layouts.app')

@section('meta_title', ($post->meta_title ?? $post->title) . ' | Netsucess')
@section('meta_description', $post->meta_description ?? $post->excerpt ?? '')
@section('og_type', 'article')
@section('og_image', $post->featured_image ? Storage::url($post->featured_image) : '')

@section('content')

{{-- Hero article --}}
<section class="relative overflow-hidden pb-10 sm:pb-14" style="padding-top: 176px;">
    <div class="pointer-events-none absolute inset-0 -z-10 opacity-[0.5]" style="background-image: radial-gradient(circle, var(--color-border) 1px, transparent 1px); background-size: 28px 28px; mask-image: linear-gradient(to bottom, black, transparent 65%); -webkit-mask-image: linear-gradient(to bottom, black, transparent 65%);"></div>

    <div class="mx-auto max-w-3xl px-4 text-center sm:px-6">
        @if($post->category)
            <a href="{{ route('blog.index') }}?category={{ $post->category->slug }}" class="reveal inline-flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)] transition-colors duration-300 hover:border-[var(--color-primary)]/30">
                <span class="h-1.5 w-1.5 rounded-full" style="background: var(--color-primary);"></span>
                {{ $post->category->name }}
            </a>
        @endif

        <h1 class="reveal text-gradient-dark font-display tracking-tight-hero mt-6 text-[30px] font-semibold leading-[1.18] sm:text-[44px]">
            {{ $post->title }}
        </h1>

        <div class="reveal mt-6 flex flex-wrap items-center justify-center gap-x-5 gap-y-2 text-[13.5px] text-[var(--color-foreground-muted)]">
            <span class="flex items-center gap-1.5">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                {{ $post->published_at->format('d F Y') }}
            </span>
            <span class="flex items-center gap-1.5">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min de lecture
            </span>
        </div>
    </div>
</section>

{{-- Image à la une --}}
@if($post->featured_image)
<div class="reveal mx-auto max-w-4xl px-4 sm:px-6">
    <div class="overflow-hidden rounded-3xl border border-[var(--color-border)] shadow-[0_30px_70px_-25px_rgba(0,0,0,0.2)]">
        <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="h-full w-full object-cover" loading="eager">
    </div>
</div>
@endif

{{-- Corps de l'article --}}
<section class="py-16 sm:py-20">
    <div class="mx-auto max-w-2xl px-4 sm:px-6">
        <article class="post-content tracking-tight-body text-[16px] leading-[1.85] text-[var(--color-foreground-secondary)]">
            {!! $post->content !!}
        </article>

        <div class="mt-14 flex flex-col items-center justify-between gap-4 border-t border-[var(--color-border)] pt-8 sm:flex-row">
            <a href="{{ route('blog.index') }}" class="flex items-center gap-1.5 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-5 py-2.5 text-[13.5px] font-semibold text-[var(--color-foreground)] transition-all duration-300 hover:border-[var(--color-primary)]/30 hover:bg-[var(--color-accent)]">
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                Retour au blog
            </a>
            <a href="{{ route('home') }}#offres" class="group flex items-center gap-1.5 rounded-full px-5 py-2.5 text-[13.5px] font-semibold text-white transition-all duration-300 hover:shadow-[0_10px_25px_-8px_rgba(21,128,61,0.5)]" style="background: var(--color-primary);">
                Lancer ma boutique
                <svg class="h-3.5 w-3.5 transition-transform duration-300 group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- Articles similaires --}}
@if($relatedPosts->count() > 0)
<section class="border-t border-[var(--color-border)] py-20 sm:py-24">
    <div class="mx-auto max-w-6xl px-4 sm:px-6">
        <div class="reveal mx-auto max-w-xl text-center">
            <div class="mx-auto mb-5 inline-flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)]">
                <span class="h-1.5 w-1.5 rounded-full" style="background: var(--color-primary);"></span>
                Continuer la lecture
            </div>
            <h2 class="text-gradient-dark font-display tracking-tight-hero text-[26px] font-semibold leading-[1.2] sm:text-[32px]">
                Articles similaires
            </h2>
        </div>

        <div class="mt-14 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($relatedPosts as $i => $related)
            <a href="{{ route('blog.show', $related->slug) }}" class="reveal group flex flex-col overflow-hidden rounded-2xl border border-[var(--color-border)] bg-[var(--color-card)] transition-all duration-500 hover:-translate-y-1 hover:shadow-[0_30px_60px_-25px_rgba(0,0,0,0.2)]" style="transition-delay: {{ $i * 80 }}ms;">
                <div class="relative aspect-[16/10] overflow-hidden bg-[var(--color-background)]">
                    @if($related->featured_image)
                        <img src="{{ Storage::url($related->featured_image) }}" alt="{{ $related->title }}" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
                    @else
                        <div class="flex h-full w-full items-center justify-center" style="background: linear-gradient(135deg, var(--color-accent), var(--color-border));">
                            <svg class="h-8 w-8" style="color: var(--color-primary); opacity: 0.4;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                        </div>
                    @endif
                </div>
                <div class="flex flex-1 flex-col p-5">
                    @if($related->category)
                    <p class="text-[10.5px] font-semibold uppercase tracking-[0.06em]" style="color: var(--color-primary);">{{ $related->category->name }}</p>
                    @endif
                    <h3 class="tracking-tight-body mt-2 flex-1 text-[15px] font-semibold leading-[1.4] text-[var(--color-foreground)]">{{ $related->title }}</h3>
                    <span class="mt-4 flex items-center gap-1 border-t border-[var(--color-border)] pt-4 text-[12.5px] font-semibold transition-transform duration-300 group-hover:translate-x-0.5" style="color: var(--color-primary);">
                        Lire l'article
                        <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

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