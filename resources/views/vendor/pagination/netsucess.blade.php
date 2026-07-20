@if ($paginator->hasPages())
<nav role="navigation" aria-label="Pagination" class="flex items-center justify-center gap-2">

    {{-- Bouton précédent --}}
    @if ($paginator->onFirstPage())
        <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[var(--color-border)] text-[var(--color-foreground-muted)] opacity-40">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
        </span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="flex h-10 w-10 items-center justify-center rounded-full border border-[var(--color-border)] text-[var(--color-foreground)] transition-colors duration-300 hover:bg-[var(--color-accent)]">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
        </a>
    @endif

    {{-- Numéros de page --}}
    @foreach ($elements as $element)
        @if (is_string($element))
            <span class="flex h-10 w-10 items-center justify-center text-[13px] text-[var(--color-foreground-muted)]">{{ $element }}</span>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="flex h-10 w-10 items-center justify-center rounded-full text-[13px] font-semibold text-white" style="background: var(--color-primary);">{{ $page }}</span>
                @else
                    <a href="{{ $url }}" class="flex h-10 w-10 items-center justify-center rounded-full border border-[var(--color-border)] text-[13px] font-medium text-[var(--color-foreground)] transition-colors duration-300 hover:bg-[var(--color-accent)]">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Bouton suivant --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="flex h-10 w-10 items-center justify-center rounded-full border border-[var(--color-border)] text-[var(--color-foreground)] transition-colors duration-300 hover:bg-[var(--color-accent)]">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
        </a>
    @else
        <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[var(--color-border)] text-[var(--color-foreground-muted)] opacity-40">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
        </span>
    @endif
</nav>
@endif