@extends('layouts.app')

@section('meta_title', 'Blog — Conseils e-commerce & dropshipping | Netsucess')
@section('meta_description', 'Découvrez nos articles et conseils pour lancer et développer votre boutique e-commerce dropshipping.')

@section('styles')
<style>
    .blog-hero { padding: 140px 0 80px; text-align: center; }
    .blog-hero .section-title { font-family: var(--font-display); font-size: clamp(32px, 5vw, 52px); font-weight: 700; line-height: 1.1; letter-spacing: -0.03em; margin-bottom: 16px; }
    .blog-hero .section-title em { font-style: italic; color: var(--accent); }
    .blog-hero .section-desc { font-size: 17px; color: var(--text-secondary); max-width: 520px; margin: 0 auto; }

    .blog-filters { display: flex; align-items: center; justify-content: center; gap: 12px; flex-wrap: wrap; margin-bottom: 56px; }
    .filter-btn { padding: 8px 20px; border-radius: 999px; border: 1px solid var(--border); background: transparent; color: var(--text-secondary); font-family: var(--font-body); font-size: 13px; font-weight: 500; cursor: pointer; transition: var(--transition); }
    .filter-btn:hover, .filter-btn.active { border-color: var(--accent); color: var(--accent); background: rgba(34,197,94,0.07); }

    .blog-main { padding-bottom: 100px; }
    .blog-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-bottom: 56px; }
    .blog-card { background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius-lg); overflow: hidden; transition: var(--transition); display: flex; flex-direction: column; }
    .blog-card:hover { border-color: var(--border-hover); transform: translateY(-4px); }
    .blog-card-img { height: 200px; background: var(--bg-card2); overflow: hidden; }
    .blog-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease; }
    .blog-card:hover .blog-card-img img { transform: scale(1.05); }
    .blog-card-img-placeholder { width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: var(--text-muted); font-size: 13px; }
    .blog-card-body { padding: 24px; display: flex; flex-direction: column; flex: 1; }
    .blog-card-cat { font-size: 11px; font-weight: 600; color: var(--accent); text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 10px; }
    .blog-card-title { font-size: 17px; font-weight: 600; margin-bottom: 10px; line-height: 1.4; color: var(--text-primary); }
    .blog-card-excerpt { font-size: 13px; color: var(--text-secondary); line-height: 1.7; margin-bottom: 20px; flex: 1; }
    .blog-card-footer { display: flex; align-items: center; justify-content: space-between; padding-top: 16px; border-top: 1px solid var(--border); }
    .blog-card-date { font-size: 12px; color: var(--text-muted); }
    .blog-card-link { font-size: 13px; color: var(--accent); font-weight: 500; display: flex; align-items: center; gap: 4px; transition: gap var(--transition); }
    .blog-card-link:hover { gap: 8px; }

    .empty-state { text-align: center; padding: 80px 0; color: var(--text-muted); }
    .empty-state svg { width: 48px; height: 48px; margin: 0 auto 16px; opacity: 0.3; }
    .empty-state p { font-size: 16px; }

    .pagination-wrapper { display: flex; justify-content: center; }
    .pagination-wrapper nav { display: flex; gap: 8px; }
    .pagination-wrapper .page-link { padding: 8px 16px; border-radius: var(--radius-sm); border: 1px solid var(--border); background: var(--bg-card); color: var(--text-secondary); font-size: 14px; transition: var(--transition); }
    .pagination-wrapper .page-link:hover, .pagination-wrapper .page-link.active { border-color: var(--accent); color: var(--accent); background: rgba(34,197,94,0.07); }

    @media (max-width: 1024px) { .blog-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 640px) { .blog-grid { grid-template-columns: 1fr; } }
</style>
@endsection

@section('content')

<section class="blog-hero">
    <div class="container">
        <div class="badge" style="margin-bottom:20px;"><span class="dot"></span> Nouveaux articles chaque semaine</div>
        <h1 class="section-title">Conseils & <em>stratégies</em><br>e-commerce</h1>
        <p class="section-desc">Des articles concrets pour lancer, développer et scaler votre boutique dropshipping.</p>
    </div>
</section>

<section class="blog-main">
    <div class="container">

        {{-- Filtres catégories --}}
        @if($categories->count() > 0)
        <div class="blog-filters">
            <a href="{{ route('blog.index') }}" class="filter-btn {{ !request('category') ? 'active' : '' }}">Tous</a>
            @foreach($categories as $category)
                @if($category->posts_count > 0)
                <a href="{{ route('blog.index') }}?category={{ $category->slug }}"
                   class="filter-btn {{ request('category') === $category->slug ? 'active' : '' }}">
                    {{ $category->name }}
                </a>
                @endif
            @endforeach
        </div>
        @endif

        {{-- Articles --}}
        @if($posts->count() > 0)
        <div class="blog-grid">
            @foreach($posts as $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="blog-card">
                <div class="blog-card-img">
                    @if($post->featured_image)
                        <img src="{{ Storage::url($post->featured_image) }}"
                             alt="{{ $post->title }}"
                             loading="lazy">
                    @else
                        <div class="blog-card-img-placeholder">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="width:32px;height:32px;opacity:0.3"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                        </div>
                    @endif
                </div>
                <div class="blog-card-body">
                    @if($post->category)
                    <div class="blog-card-cat">{{ $post->category->name }}</div>
                    @endif
                    <div class="blog-card-title">{{ $post->title }}</div>
                    @if($post->excerpt)
                    <div class="blog-card-excerpt">{{ Str::limit($post->excerpt, 120) }}</div>
                    @endif
                    <div class="blog-card-footer">
                        <span class="blog-card-date">{{ $post->published_at->format('d/m/Y') }}</span>
                        <span class="blog-card-link">Lire →</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        {{-- Pagination --}}
        @if($posts->hasPages())
        <div class="pagination-wrapper">
            {{ $posts->links() }}
        </div>
        @endif

        @else
        <div class="empty-state">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            <p>Aucun article publié pour le moment.<br>Revenez bientôt !</p>
        </div>
        @endif

    </div>
</section>

@endsection