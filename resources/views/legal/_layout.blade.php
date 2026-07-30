@extends('layouts.app')

@section('content')
<section class="relative overflow-hidden pb-16 sm:pb-20" style="padding-top: 176px;">
    <div class="pointer-events-none absolute inset-0 -z-10 opacity-[0.5]" style="background-image: radial-gradient(circle, var(--color-border) 1px, transparent 1px); background-size: 28px 28px; mask-image: linear-gradient(to bottom, black, transparent 65%); -webkit-mask-image: linear-gradient(to bottom, black, transparent 65%);"></div>

    <div class="mx-auto max-w-2xl px-4 text-center sm:px-6">
        <div class="mx-auto mb-5 inline-flex items-center gap-2 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-4 py-[7px] text-[13px] font-medium text-[var(--color-foreground-secondary)] shadow-[0_2px_8px_rgba(0,0,0,0.04)]">
            <span class="h-1.5 w-1.5 rounded-full" style="background: var(--color-primary);"></span>
            Informations légales
        </div>
        <h1 class="text-gradient-dark font-display tracking-tight-hero text-[32px] font-semibold leading-[1.15] sm:text-[42px]">
            {{ $title }}
        </h1>
        <p class="tracking-tight-body mt-4 text-[13.5px] text-[var(--color-foreground-muted)]">
            Dernière mise à jour : {{ $lastUpdated ?? 'Juillet 2026' }}
        </p>
    </div>
</section>

<section class="pb-24 sm:pb-32">
    <div class="mx-auto max-w-2xl px-4 sm:px-6">
        <div class="legal-content tracking-tight-body text-[15px] leading-[1.85] text-[var(--color-foreground-secondary)]">
            {{ $slot ?? '' }}
            @yield('legal-body')
        </div>

        <div class="mt-14 flex justify-center border-t border-[var(--color-border)] pt-8">
            <a href="{{ route('home') }}" class="flex items-center gap-1.5 rounded-full border border-[var(--color-border)] bg-[var(--color-card)] px-5 py-2.5 text-[13.5px] font-semibold text-[var(--color-foreground)] transition-all duration-300 hover:border-[var(--color-primary)]/30 hover:bg-[var(--color-accent)]">
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                Retour à l'accueil
            </a>
        </div>
    </div>
</section>
@endsection