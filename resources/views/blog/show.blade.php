@extends('layouts.app')

@section('meta_title', ($post->meta_title ?? $post->title) . ' | Netsucess')
@section('meta_description', $post->meta_description ?? $post->excerpt ?? '')
@section('og_type', 'article')
@section('og_image', $post->featured_image ? Storage::url($post->featured_image) : '')

@section('styles')
<style>
    .post-hero { padding: 140px 0 60px; }
    .post-hero-inner { max-width: 780px; margin: 0 auto; text-align: center; }
    .post-cat { font-size: 12px; font-weight: 600; color: var(--accent); text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 16px; display: block; }
    .post-title { font-family: var(--font-display); font-size: clamp(28px, 5vw, 48px); font-weight: 700; line-height: 1.15; letter-spacing: -0.02em; margin-bottom: 24px; }
    .post-meta { display: flex; align-items: center; justify-content: center; gap: 20px; color: var(--text-muted); font-size: 14px; }
    .post-meta span { display: flex; align-items: center; gap: 6px; }
    .post-meta svg { width: 14px; height: 14px; }
    .post-featured-img { max-width: 900px; margin: 48px auto; border-radius: var(--radius-lg); overflow: hidden; }
    .post-featured-img img { width: 100%; height: auto; display: block; }
    .post-body { max-width: 720px; margin: 0 auto; padding-bottom: 80px; }
    .post-content { font-size: 16px; line-height: 1.85; color: var(--text-secondary); }
    .post-content h2 { font-family: var(--font-display); font-size: 26px; font-weight: 700; color: var(--text-primary); margin: 48px 0 16px; }
    .post-content h3 { font-size: 20px; font-weight: 600; color: var(--text-primary); margin: 32px 0 12px; }
    .post-content p { margin-bottom: 20px; }
    .post-content ul, .post-content ol { margin: 0 0 20px 24px; display: flex; flex-direction: column; gap: 8px; }
    .post-content li { color: var(--text-secondary); }
    .post-content strong { color: var(--text-primary); font-weight: 600; }
    .post-content a { color: var(--accent); text-decoration: underline; text-underline-offset: 3px; }
    .post-content blockquote { border-left: 3px solid var(--accent); padding: 16px 24px; margin: 32px 0; background: rgba(34,197,94,0.05); border-radius: 0 var(--radius-sm) var(--radius-sm) 0; font-style: italic; color: var(--text-primary); }
    .post-content img { border-radius: var(--radius-md); margin: 32px 0; }
    .post-divider { border: none; border-top: 1px solid var(--border); margin: 48px 0; }
    .related-posts { padding: 80px 0; background: var(--bg-card); }
    .related-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 40px; }
    .related-card { background: var(--bg); border: 1px solid var(--border); border-radius: var(--radius-lg); overflow: hidden; transition: var(--transition); display: flex; flex-direction: column; }
    .related-card:hover { border-color: var(--border-hover); transform: translateY(-4px); }
    .related-card-img { height: 180px; background: var(--bg-card2); overflow: hidden; display: flex; align-items: center; justify-content: center; color: var(--text-muted); font-size: 13px; }
    .related-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease; }
    .related-card:hover .related-card-img img { transform: scale(1.05); }
    .related-card-body { padding: 20px; flex: 1; display: flex; flex-direction: column; }
    .related-card-cat { font-size: 11px; font-weight: 600; color: var(--accent); text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 8px; }
    .related-card-title { font-size: 15px; font-weight: 600; margin-bottom: auto; padding-bottom: 16px; line-height: 1.4; }
    .related-card-link { font-size: 13px; color: var(--accent); font-weight: 500; display: flex; align-items: center; gap: 4px; transition: gap var(--transition); padding-top: 16px; border-top: 1px solid var(--border); }
    .related-card-link:hover { gap: 8px; }
    @media (max-width: 768px) {
        .related-grid { grid-template-columns: 1fr; }
        .post-meta { flex-wrap: wrap; gap: 12px; }
    }
</style>
@endsection

@section('content')

<section class="post-hero">
    <div class="container">
        <div class="post-hero-inner">
            @if($post->category)
                <a href="{{ route('blog.index') }}?category={{ $post->category->slug }}" class="post-cat">{{ $post->category->name }}</a>
            @endif
            <h1 class="post-title">{{ $post->title }}</h1>
            <div class="post-meta">
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    {{ $post->published_at->format('d F Y') }}
                </span>
                @if($post->category)
                    <span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
                        {{ $post->category->name }}
                    </span>
                @endif
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min de lecture
                </span>
            </div>
        </div>
    </div>
</section>

@if($post->featured_image)
    <div class="container">
        <div class="post-featured-img">
            <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" loading="eager">
        </div>
    </div>
@endif

<section>
    <div class="container">
        <div class="post-body">
            <div class="post-content">
                {!! $post->content !!}
            </div>
            <hr class="post-divider">
            <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;">
                <a href="{{ route('blog.index') }}" class="btn btn-secondary" style="font-size:14px;padding:10px 20px;">← Retour au blog</a>
                <a href="{{ route('home') }}#offres" class="btn btn-primary" style="font-size:14px;padding:10px 20px;">Lancer ma boutique →</a>
            </div>
        </div>
    </div>
</section>

@if($relatedPosts->count() > 0)
    <section class="related-posts">
        <div class="container">
            <div class="section-header center">
                <p class="section-label">Continuer la lecture</p>
                <h2 style="font-family:var(--font-display);font-size:clamp(24px,3vw,36px);font-weight:700;letter-spacing:-0.02em;margin-bottom:16px;">
                    Articles <em style="color:var(--accent);font-style:italic;">similaires</em>
                </h2>
            </div>
            <div class="related-grid">
                @foreach($relatedPosts as $related)
                    <a href="{{ route('blog.show', $related->slug) }}" class="related-card">
                        <div class="related-card-img">
                            @if($related->featured_image)
                                <img src="{{ Storage::url($related->featured_image) }}" alt="{{ $related->title }}" loading="lazy">
                            @else
                                Image à venir
                            @endif
                        </div>
                        <div class="related-card-body">
                            @if($related->category)
                                <div class="related-card-cat">{{ $related->category->name }}</div>
                            @endif
                            <div class="related-card-title">{{ $related->title }}</div>
                            <span class="related-card-link">Lire l'article →</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif


@section('json_ld')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "{{ $post->title }}",
    "description": "{{ $post->meta_description ?? $post->excerpt ?? '' }}",
    "datePublished": "{{ $post->published_at->toIso8601String() }}",
    "dateModified": "{{ $post->updated_at->toIso8601String() }}",
    "image": "{{ $post->featured_image ? Storage::url($post->featured_image) : asset('images/og-default.jpg') }}",
    "author": {
        "@type": "Organization",
        "name": "Netsucess"
    },
    "publisher": {
        "@type": "Organization",
        "name": "Netsucess",
        "logo": {
            "@type": "ImageObject",
            "url": "https://netsucess.com/images/og-default.jpg"
        }
    },
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
    }
}
</script>
@endsection

@endsection